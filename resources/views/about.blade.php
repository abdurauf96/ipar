@extends('layouts.index')

@section('title', 'О компании')

@section('content')
<section class="container-fluid menusecond">
    @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home') </a><a class="way__wrapper--link" href="#">/@lang('lang.about') </a></div>
</section>
<section class="container-fluid okampaniya">
  <div class="container okampaniya__wrapper">
    <div class="okampaniya__left">
      <ul class="nav flex-column">
        @foreach($pages as $page)
        <li class="nav-item page" data-id="{{ $page->id }}"><a href="#"> <img class="nav-icon" src="{{ Voyager::image($page->icon) }}" alt="kuting"/><span class="nav-link">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</span></a></li>
        @endforeach
      </ul>
    </div>
    
    <div class="okampaniya__right">
      <div id="result">
        @foreach($pages as $page)
        <h3 class="okampaniya__right--head">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <div class="okampaniya__right--img"><img src="{{ Voyager::image($page->image) }}" alt="kuting"/>
          <p class="okampaniya__right--text">{{$page->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru')}}</p>
        </div>
        <p class="okampaniya__right--text"> {{ $page->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
        @break
       @endforeach
      </div>
      <div class="okampaniya__right--slider">
        @foreach($sertificats as $sertificat)
        <div class="slider__ser">
          @php $image=str_replace('.png', '-small.png',  $sertificat->image ) @endphp
          <img class="slider__ser--item" src="{{ Voyager::image($image) }}" alt="kuting"/>
        </div>
        @endforeach
      </div>
    </div>
    
  </div>
</section>

{{-- NASH OFIS --}}
<section class="container-fluid nashofis">
  <div class="container">
    <h3 class="nashofis__head">@lang('lang.ofis')</h3>
  </div>
  <div class="container nashofis__wrapper">
    <div class="nashofis__wrapper--img">
      @foreach($images as $image)
      <div class="img__wrapper @if($loop->first) img1 @elseif($loop->last) img2 @endif">
        @php $image=str_replace('.png', '-small.png',  $image->image ) @endphp
        <img src="{{ Voyager::image($image) }}" alt="kuting"/></div>
      @endforeach
    </div>
  </div>
</section>

@include('partials.otziv')

@stop