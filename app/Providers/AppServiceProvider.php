<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.products', function($view){
            $products=\App\Product::withTranslation(\App::getLocale())->get();
            $view->with(compact('products'));
        });
        view()->composer('partials.new_products', function($view){
            $products=\App\Product::withTranslation(\App::getLocale())
            ->limit(8)
            ->latest()
            ->get();
            $view->with(compact('products'));
        });
        view()->composer('partials.xit_products', function($view){
            $products=\App\Product::withTranslation(\App::getLocale())
            ->limit(4)
            ->orderBy('view')
            ->get();
            $view->with(compact('products'));
        });
        view()->composer('partials.otziv', function($view){
            $comments=\App\Comment::whereNotNull('status')->get() ;
            $view->with(compact('comments'));
        });

        view()->composer('layouts.sidebar_posts', function($view){
            $categories=\App\Category::withTranslation(\App::getLocale())->get();
            $posts=\App\Post::withTranslation(\App::getLocale())->inRandomOrder()->limit(3)->get();
            $view->with(compact('categories', 'posts'));
        });
       
       view()->composer('layouts.sidebar_questions', function($view){
            $categories=\App\QuestionCategory::withTranslation(\App::getLocale())->get();
            $view->with(compact('categories'));
        });

       view()->composer('partials.questions_answers', function($view){
           $questions=\App\Question::whereNotNull('status')->withTranslation(\App::getLocale())->get();
            $view->with(compact('questions'));
        });

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
