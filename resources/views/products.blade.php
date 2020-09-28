@extends('layouts.index')

@section('title', 'Наша продукция')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
<section class="container-fluid way">
      <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/ @lang('lang.nash_prod') </a></div>
    </section>
    @include('partials.zakazat')
    <section class="container-fluid">
      <div class="container">
        <div class="nsearch">
          <form action="">
            <input class="form-control data" type="search" id="data" placeholder="Ключевое слово"/>
          </form>
          <div class="nsearch__a"><a href="{{ route('products_sort', ['key'=>'top']) }}">@lang('lang.tops')<span class="fa fa-filter"></span></a><a href="#">@lang('lang.xits')<span class="fa fa-filter"></span></a><a href="{{ route('products_sort', ['key'=>'new']) }}">@lang('lang.xits')<span class="fa fa-filter"></span></a></div>
        </div>
      </div>
      <div class="container">
        <div class="produk__menu">
          @foreach($categories as $category)
          <a class="produk__menu--item" href="/products/category/{{ $category->id }}">
            {{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}
          </a>
          @endforeach
        </div>
      </div>
      @php $segment = Request::segment(3); @endphp
      <input type="hidden" value="{{ $segment }}"  id="cat_id">
      <div class="container produk__wrapper" id="search_result">
        @foreach($products as $product)
        <div class="slider1__item">
          <div class="front side">
            <h4 class="slider1__item--head">{{ $product->getTranslatedAttribute('status', \App::getLocale(), 'ru') }} </h4>
              <div class="front__content">
              @php $images=json_decode($product->image) @endphp
              @foreach($images as $image)
                @if($loop->first) 
              <img class="slider1__item--img" src="{{ Voyager::image($image) }}" alt="kuting"/>
                @endif
              @endforeach         
              <h3 class="slider1__item--avtor">{{ $product->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</h3>
              <p class="slider1__item--text">{{ $product->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
              <p class="slider1__item--sena">Цена: <span>{{ $product->getTranslatedAttribute('price', \App::getLocale(), 'ru') }}</span></p>

            </div>
          </div>
          <div class="back side"><a href="{{ route('product_view', ['id'=>$product->id]) }}">@lang('lang.more')</a></div>
        </div>
        @endforeach
      </div>
      <div class="container content--right--pagenation">
       {{ $products->links('layouts.pagination') }}
      </div>
    </section>
  	@include('partials.zayafka')
@stop