@extends('layouts.index')

@section('title', 'Полезные статьи')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/@lang('lang.posts') </a></div>
</section>
<section class="container-fluid qa__content novosti"> 
  <div class="container qa__content--wrapper">
    <div class="qa__content--left">
      @include('layouts.sidebar_posts')
    </div>
    <div class="qa__content--right novosti__right"> 
      <button>{{ $post->created_at->format('d M Y') }}   </button>
      <h3 class="content--right--head">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
      <div class="novosti__right--wrapper"><img class="novosti__right--wrapper_img" src="{{ Voyager::image($post->image) }}" alt="kuting"/>
        <p class="novosti__right_text">{{ $post->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru') }}</p>
      </div>
      <p class="novosti__right_text">{{ $post->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
     
      <div class="novosti__right_mensenjer"><a class="novosti__right--nazad" href="/posts">@lang('lang.nazad')</a>
        <div class="mensenjer"><span>@lang('lang.share'):</span>
          <a href="https://wa.me/?text={{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }};url=http://vodiy24.uz"> <i class="fab fa-whatsapp"></i></a>

          <a href="https://www.facebook.com/sharer/sharer.php?u=http://vodiy24.uz/post/{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}"><i class="fab fa-facebook-f"></i></a>

          <a href="https://twitter.com/intent/tweet?text={{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }};url=http://vodiy24.uz"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      <div>
        
      </div>
      <div class="comment" id="comment">
        @if(count($post->comments)>0)
        <h4 class="comment__head">@lang('lang.comments') ( {{ count($post->comments) }} )</h4>
        @foreach($post->comments as $comment)
        <div class="content__item">
          <div class="content__item--wrapper">
            <h3 class="content__item--avtor">{{ $comment->name }}</h3><!-- <a class="fa fa-comments" href="#"><span>Ответить</span></a> --><a href="#"> <span>{{ $comment->created_at->timezone('Asia/Tashkent')->format('d M Y , h:m') }}</span></a>
          </div>
          <p class="content__item--text">{{ $comment->body }}</p>
        </div>
        @endforeach
        @else
        <h4 class="comment__head">@lang('lang.net_com')</h4>
        @endif
      </div>
      <form class="form" >
        <h3 class="form__head">@lang('lang.dobavit')</h3>
        <div class="form__group">
          <input type="hidden" value="{{ $post->id }}" id="post_id" name="">
          <input class="form-control" id="name" type="text" placeholder="@lang('lang.imya')"/>
          <textarea class="form-control" id="body" placeholder="@lang('lang.text')"></textarea>
          <input type="submit" class="add_comment" value="@lang('lang.send') "/>
        </div>
      </form>
    </div>
  </div>
</section>
@include('partials.products')
@include('partials.zayafka')
@stop