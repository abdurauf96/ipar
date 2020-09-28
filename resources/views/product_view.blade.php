@extends('layouts.index')

@section('title', 'Полезные статьи')

@section('content')

<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home') </a><a class="way__wrapper--link" href="#">/@lang('lang.tovar') </a><a class="way__wrapper--link" href="#">/ {{ $product->getTranslatedAttribute('name',\App::getLocale(), 'ru') }}</a></div>
</section>
<section class="container-fluid product">
  <div class="container product__wrapper">
    <div class="row">
      <div class="col-lg-6">
        <div class="product__wrapper--left">
          <div class="s_number1">
            @php $images=json_decode($product->image) @endphp
            @foreach($images as $image)
            <div class="s_number1--item">
              <img src="{{ Voyager::image($image) }}" alt="kuting"/>
            </div>
            @endforeach
          </div>
          <div class="s_number2">
            @php $images=json_decode($product->image) @endphp
            @foreach($images as $image)
            <div class="s_number2--item">
              <img src="{{ Voyager::image($image) }}" alt="kuting"/>
            </div>
            @endforeach   
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="product__wrapper--right">
          <div class="right__warpper">
            <div class="right__wrapper--button">
              <button>{{ $product->getTranslatedAttribute('status', \App::getLocale(), 'ru') }}</button> 
              <p>Категория: <span>{{ $product->category->getTranslatedAttribute('name',\App::getLocale(), 'ru') }} </span></p>
            </div>
            <div class="right__wrapper--head">
              <h3>{{ $product->getTranslatedAttribute('name',\App::getLocale(), 'ru') }}</h3>
            </div>
            <div class="right__wrapper--table">
              <table class="table">
                <tr>
                  <td>@lang('lang.min_zak'): <span>{{ $product->getTranslatedAttribute('min_zakas',\App::getLocale(), 'ru') }}</span></td>
                </tr>
                <tr>
                  <td>@lang('lang.marka'): <span>{{ $product->marca }}</span></td>
                </tr>
                <tr>
                  <td>@lang('lang.ves'): <span>{{ $product->getTranslatedAttribute('weight',\App::getLocale(), 'ru') }}.</span></td>
                </tr>
                <tr> 
                  <td>@lang('lang.quantity'): <span>{{ $product->getTranslatedAttribute('quantity',\App::getLocale(), 'ru') }}.</span></td>
                </tr>
                <tr>  
                  <td> <span>{{ $product->getTranslatedAttribute('description',\App::getLocale(), 'ru') }}</span></td>
                </tr>
              </table>
            </div>
            <div class="right__wrapper--link"><a data-id="{{ $product->id }}" class="zakazat" href="#">@lang('lang.book')</a>
              <p class="link__sena">@lang('lang.price'): <span>{{ $product->getTranslatedAttribute('price',\App::getLocale(), 'ru') }}</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container product__text">
    <p>{{ $product->getTranslatedAttribute('body',\App::getLocale(), 'ru') }}</p>
  </div>
</section>
@include('partials.zakazat')
@include('partials.products')
@include('partials.zayafka')
 
@stop