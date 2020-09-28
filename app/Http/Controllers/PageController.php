<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $page=\App\Page::withTranslation(\App::getLocale())->where('slug', 'o-kompanii')->first();
        $faqs=\App\Faq::withTranslation(\App::getLocale())->get();
    	return view('welcome', compact('page', 'faqs'));
    }

    public function aboutUs()
    {
        $images=\App\Image::all();
        $pages=\App\Page::withTranslation(\App::getLocale())->get();
        $sertificats=\App\Sertifikat::all();
    	return view('about', compact('pages', 'images', 'sertificats'));
    }


    public function faq()
    {
        $faqs=\App\Faq::withTranslation(\App::getLocale())->get();
    	return view('faq', compact('faqs'));
    }

    public function questions()
    {
        $questions=\App\Question::whereNotNull('status')->withTranslation(\App::getLocale())->paginate(6);
    	return view('questions_answers', compact('questions'));
    }

    public function contact()
    {
    	return view('contact');
    }

    public function thoughts()
    {

        $comments=\App\Comment::whereNotNull('status')->paginate(6);
    	return view('otziv', compact('comments'));
    }

    public function question_view($id)
    {
        $question=\App\Question::withTranslation(\App::getLocale())->find($id);
        return view('question_view', compact('question'));
    }

    public function questions_category($id)
    {
        $questions=\App\Question::where('category_id', $id)->withTranslation(\App::getLocale())->paginate(6);
        return view('questions_answers', compact('questions'));
    }

    public function about_pages()
    {
        $id=$_POST['id'];
        $page=\App\Page::withTranslation(\App::getLocale())->find($id);
        $res=view('ajax.about_pages', compact('page'));
        return $res;
    }

    public function search(Request $request)
    {
        $data=$request->data;
        $products=\App\Product::where('name', 'like', '%'.$data.'%')
        ->orWhere('description', 'like', '%'.$data.'%')
        ->withTranslation(\App::getLocale())
        ->paginate(6);

        $posts=\App\Post::where('title', 'like', '%'.$data.'%')
        ->orWhere('excerpt', 'like', '%'.$data.'%')
        ->orWhere('body', 'like', '%'.$data.'%')
        ->withTranslation(\App::getLocale())
        ->get();

        return view('search', compact('posts', 'products', 'data'));
    }
}
