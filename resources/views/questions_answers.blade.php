@extends('layouts.index')

@section('title', 'Вопросы и ответы')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
  


<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/  @lang('lang.ques_answ')</a></div>
</section>
<section class="container-fluid qa__content">
  <div class="container qa__content--wrapper">
    <div class="qa__content--left">
     
     @include('layouts.sidebar_questions')
    </div>
    <div class="qa__content--right">       
      <h3 class="content--right--head">@lang('lang.otveti')</h3>
      @foreach($questions as $question)
      <a class="content--right--item" href="{{ route('question_view', ['id'=>$question->id]) }}">
        <h4 class="content--right--item_head">{{ $question->getTranslatedAttribute('question', \App::getLocale(), 'ru') }}</h4>
        <p class="content--right--item_text">
            
        @php 
          $text=$question->getTranslatedAttribute('answer', \App::getLocale(), 'ru') ;
        @endphp  

        {{ str_limit($text, $limit = 100, $end = '...') }}           
        </p>
        <h5 class="content--right--item_link">{{ $question->username }}</h5>
      </a>
      @endforeach
      <div class="content--right--pagenation">
        {{ $questions->links('layouts.pagination') }}
      </div>
    </div>
  </div>
</section>
@include('partials.leave_question')
@include('partials.products')
@include('partials.zayafka')
@stop