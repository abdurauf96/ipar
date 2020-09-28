@extends('layouts.index')

@section('title', 'Поиск')

@section('content')
<section class="container-fluid menusecond">
   @include('layouts.menu')
</section>

<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home')</a><a class="way__wrapper--link" href="#">/@lang('lang.rezultati') </a></div>
</section>
@if(count($products)>0)
<section class="container-fluid">
	<div class="container titlep">
		<p>@lang('part.prod')</p>
	</div>
	<div class="container produk__wrapper">

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
          <p class="slider1__item--text">
            @php $text=$product->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
            {{ str_limit($text, $limit = 80, $end = '...') }} 
          </p>
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
@endif

@if(count($posts)>0)
<section class="container-fluid qa__content">
	<div class="container titlep">
		<p>@lang('lang.polezni')</p>
	</div>
  <div class="container qa__content--wrapper search__pos">

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
</section>
@endif

@if( (count($products)==null) && (count($products)==null) )
<div class="container-fluid">
  <div class="container">
    <p class="ne__nayden">Для "<span class="way__wrapper--active">{{$data}}</span>" результатов не найдено</p>  
  </div>
  
</div>
@endif

@endsection