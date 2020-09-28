@extends('layouts.index')

@section('title', 'Полезные статьи')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>

 <section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/@lang('lang.polezni') </a></div>
</section>
<section class="container-fluid qa__content">
  <div class="container qa__content--wrapper">
    @include('layouts.sidebar_posts')
    <div class="qa__content--right"> 
      <div class="nsearch">
        <form action="">
          <input class="form-control" type="search" id="post_search" placeholder="@lang('lang.key')"/>
        </form>
        <div class="nsearch__a">
          <a class="sort_posts" data-key="top" href="#">@lang('lang.tops')<span class="fa fa-filter"></span></a>
          <a class="sort_posts" data-key="xit" href="#">@lang('lang.xits')<span class="fa fa-filter"></span></a>
          <a class="sort_posts" data-key="new" href="#">@lang('lang.latest')<span class="fa fa-filter"></span></a>
        </div>
      </div>
      @php $segment=Request::segment(3) @endphp

     <input type="hidden" value="{{ $segment }}" id="post_cat_id" name="">
      <div id="search_result">
        <div class="nwrapper">
        @foreach($posts as $post)
        <div class="nwrapper__item"> 
          <div class="absolute">
            <div class="absoluteblock">
              <h3 class="content__item--date">{{ $post->created_at->format('d M Y') }}</h3><a class="fa fa-comments" href="#"><span>{{ count($post->comments) }}</span></a><a class="far fa-eye" href="#"><span>{{ $post->view }}</span></a>
            </div>
            <div class="absolutetext">
              <p>{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p>
            </div>
             @php $image=str_replace('.png', '-small.png',  $post->image ) @endphp
            <img class="nwrapper__item--img" src="{{ Voyager::image($image) }}" alt="kuting"/>
          </div>
          <p class="nwrapper__item--text">
           
               @php $text=$post->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru'); @endphp
          
              {{ str_limit($text, $limit = 100, $end = '...') }}
          
          </p><a class="nwrapper__item--link" href="{{ route('post_view', ['slug'=>$post->slug]) }}">@lang('lang.more') </a>
        </div>
        @endforeach
        </div>
      
        <div class="content--right--pagenation">
         {{ $posts->links('layouts.pagination') }}
        </div>
      </div>
    </div>
  </div>
</section>
@include('partials.products')
@include('partials.zayafka')

@stop