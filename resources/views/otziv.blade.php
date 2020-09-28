@extends('layouts.index')

@section('title', 'Полезные статьи')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/ @lang('lang.otziv')</a></div>
</section>
 <section class="container-fluid otziv">
  <div class="container">
    <h3 class="otziv__head">@lang('lang.otziv_title')</h3>
  </div>
  <div class="container otziv__wrapper">
    @foreach($comments as $comment)
    <div class="slider2__item">
      <p class="slider2__item--text">{{ $comment->message }}</p><a class="slider2__item--link" href="#">{{ $comment->name }}</a>
    </div>
    @endforeach
  </div>
  <div class="container content--right--pagenation otziv__center">
    {{ $comments->links('layouts.pagination') }}
    <form class="form">
      <h3 class="form__head">@lang('lang.osta_otziv')</h3>
      <div class="form__group">
        <input class="form-control" type="text" placeholder="@lang('lang.imya')"/>
        <input class="form-control" type="text" placeholder="@lang('lang.phone')"/>
        <textarea class="form-control" placeholder="@lang('lang.vash_vop')"></textarea>
        <input class="form-control" type="submit" value="@lang('lang.send') "/><a href="#">@lang('lang.lichnie')</a>
      </div>
    </form>
  </div>
</section>

@stop