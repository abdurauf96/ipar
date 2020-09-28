@extends('layouts.index')

@section('title', 'FAQ')

@section('content')
<section class="container-fluid menusecond">
    @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home') </a><a class="way__wrapper--link" href="#"> / @lang('lang.faq')</a></div>
</section>
<section class="container-fluid accordion ch_accordion">
  <div class="container accordion__top">
    <h3 class="accordion__top--text">@lang('lang.faq')</h3>
  </div>
  <div class="container">
    <div class="accordion__left">
      @foreach($faqs as $faq)
      <div class="accordion__item">
        <div class="accordion__head accordion__active">
          <p>{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#"><i class="fa fa-angle-right"> </i></a>
        </div>
        <div class="accordion__body @if($loop->first) accordion__first @endif">
          <div class="news__right--text">
            <p>{{ $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('partials.questions_answers')
@include('partials.products')
@include('partials.zayafka')
@stop