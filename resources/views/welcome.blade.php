@extends('layouts.index')
@section('title', 'Главная')
@section('content')
<header class="container-fluid header">
      
    @include('layouts.menu')
  
  <div class="container header__text">
    <h2 class="header__text--body">IPAR Uzbekistan</h2>
    <p class="header__text--content">@lang('lang.home_title')</p>
  </div>
</header>
    @include('partials.service')
    @include('partials.products')
    @include('partials.new_products')
    @include('partials.xit_products')
    @include('partials.about')
    @include('partials.otziv')
    @include('partials.faq')
    @include('partials.zayafka')
    

@endsection