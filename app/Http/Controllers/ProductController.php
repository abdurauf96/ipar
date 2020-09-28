<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    	
    public function products($category=null, $id=null)
    {   
        if ($id!=null) {
            $products=\App\Product::withTranslation(\App::getLocale())
            ->where('category_id', $id)
            ->paginate(8);
        }
        else{
            $products=\App\Product::withTranslation(\App::getLocale())
            ->paginate(8);
        }
        $categories=\App\CategoryProduct::withTranslation(\App::getLocale())->get();
        
    	return view('products', compact('products', 'categories'));
    }

    public function products_sort(Request $request)
    {   
       
        if ($request->key=="new") {
        	$products=\App\Product::withTranslation(\App::getLocale())
        	->latest()
            ->paginate(8);
        }
        elseif($request->key=="top"){
        	$products=\App\Product::withTranslation(\App::getLocale())
        	->orderBy('view', 'desc')
            ->paginate(8);
        }
        $categories=\App\CategoryProduct::withTranslation(\App::getLocale())->get();
        
        return view('products', compact('products', 'categories'));
    }

    public function product_view($id)
    {
    	$product=\App\Product::withTranslation(\App::getLocale())
        ->with('category')
        ->find($id);
    	$product->view=$product->view+1;
    	$product->save();
    	//dd($product->view);
    	return view('product_view', compact('product'));
    }

    public function product_search()
    {
    	$data=$_POST['data'];
        $cat_id=$_POST['cat_id'];

        if ( $cat_id>0) {
            $products=\App\Product::withTranslation(\App::getLocale())
            ->where('category_id', $cat_id)
            ->where( function($query) use ($data) {
                $query->orWhere('name', 'LIKE', '%'.$data.'%')
                ->orWhere('description', 'LIKE', '%'.$data.'%');
            })
            ->get();
            
        }else{
            $products=\App\Product::withTranslation(\App::getLocale())
            ->where('name', 'LIKE', '%'.$data.'%')
            ->orWhere('description', 'LIKE', '%'.$data.'%')
            ->get();
        }
    	$res=view('ajax.product_search', compact('products'));
    	return $res;
    }

    public function get_product()
    {
        $id=$_POST['id'];
        $product=\App\Product::find($id);
        return $product->name;
    }

    public function send_zakas()
    {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $product=$_POST['product'];

        $order=new \App\Order();
        $order->product_name=$product;
        $order->phone=$phone;
        $order->name=$name;
        $order->save();
    }

}
