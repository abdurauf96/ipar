@extends('layouts.index')

@section('title', 'Полезные статьи')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home') </a><a class="way__wrapper--link" href="/questions">/  @lang('lang.ques_answ') </a></div>
</section>
<section class="container-fluid qa__content">
  <div class="container qa__content--wrapper">
    <div class="qa__content--left">
      @include('layouts.sidebar_questions')
    </div>
    <div class="qa__content--right">   
      <div class="content--right--item">
       
        <h5 class="content--right--item_link"><span>@lang('lang.otpravil'): </span> {{ $question->username }}</h5>
        <p class="content--right--item_text"><span>@lang('lang.vopros'): </span>{{ $question->getTranslatedAttribute('question', \App::getLocale(), 'ru') }}</p>
      </div>
      <div class="content--right--otvet">
        <p><span>@lang('lang.otvet'): </span> {{ $question->getTranslatedAttribute('answer', \App::getLocale(), 'ru') }} </p>
      </div>
    </div>
  </div>
</section>
@include('partials.questions_answers')
@include('partials.leave_question')

@include('partials.products')
@stop