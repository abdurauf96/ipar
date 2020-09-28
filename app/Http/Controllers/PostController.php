<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_view($slug)
    {
    	$post=\App\Post::withTranslation(\App::getLocale())
    	->where('slug', $slug)
        ->with('comments')
    	->first();
    	$post->view=$post->view+1;
    	$post->save();
    	return view('post_view', compact('post'));
    }

    public function posts($category=null, $id=null)
    {
    	if ($id!=null) {
    		$posts=\App\Post::withTranslation(\App::getLocale())
            ->where('category_id', $id)
            ->paginate(6);
    	}else{
    		$posts=\App\Post::withTranslation(\App::getLocale())->paginate(6);
    	}
       
    	return view('posts', compact('posts'));
    }

    public function post_search()
    {
    	$data=$_POST['data'];
    	$cat_id=$_POST['cat_id'];

    	if ($cat_id!=null) {
    		$posts=\App\Post::withTranslation(\App::getLocale())
    		->where('category_id', $cat_id)
    		->where(function($query) use ($data){
    			$query->orWhere('title', 'like', '%'.$data.'%')->orWhere('excerpt', 'like', '%'.$data.'%')->orWhere('body', 'like', '%'.$data.'%');
    		})->get();
    	}else{
    		$posts=\App\Post::withTranslation(\App::getLocale())
    		->where('title', 'like', '%'.$data.'%')
    		->orWhere('excerpt', 'like', '%'.$data.'%')
    		->orWhere('body', 'like', '%'.$data.'%')
    		->get();
    	}
    	$res=view('ajax.post_search', compact('posts'));
    	return $res;
    }

    public function posts_sort()
    {
        $key=$_POST['key'];
        $cat_id=$_POST['cat_id'];

        if ($cat_id!=null) {
            if ($key=='new') {
                $posts=\App\Post::withTranslation(\App::getLocale())
                ->where('category_id', $cat_id)
                ->latest()
                ->get();
            }elseif($key=='top'){
                $posts=\App\Post::withTranslation(\App::getLocale())
                ->where('category_id', $cat_id)
                ->orderBy('view', 'desc')
                ->get();
            }else{
               $posts=\App\Post::withTranslation(\App::getLocale())
                ->where('category_id', $cat_id)
               ->where('featured', '!=', '0')
                ->get(); 
            }
        }else{
            if ($key=='new') {
                $posts=\App\Post::withTranslation(\App::getLocale())
                ->latest()
                ->get();
            }elseif($key=='top'){
                $posts=\App\Post::withTranslation(\App::getLocale())
                ->orderBy('view', 'desc')
                ->get();
            }else{
               $posts=\App\Post::withTranslation(\App::getLocale())
                ->where('featured', '!=', '0')
                ->get(); 
            }
        }

        $res=view('ajax.post_search', compact('posts'));
        return $res;
    }

    public function add_comment()
    {
        $post_id=$_POST['post_id'];
        $name=$_POST['name'];
        $body=$_POST['body'];
        $new_comment=new \App\PostComment();

        $new_comment->post_id=$post_id;
        $new_comment->name=$name;
        $new_comment->body=$body;

        $new_comment->save();
        $post=\App\Post::where('id', $post_id)->first();
        $res=view('ajax.comment', compact('post'));
        return $res;
    }

}
