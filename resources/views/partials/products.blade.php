@isset($products)
<section class="container-fluid slider1">
  <div class="container slider1__head">
    <p class="slider1__head--text">@lang('lang.nash_prod')   </p>
  </div>
  <div class="container slider1__wrapper">
    @foreach($products as $product)
    <div class="slider1__item">
      <div class="front side">
        <h4 class="slider1__item--head">{{ $product->getTranslatedAttribute('status', \App::getLocale(), 'ru') }} </h4>
        <div class="front__content">
          @php $images=json_decode($product->image) @endphp
          @foreach($images as $image)
            @if($loop->first) 
          <img class="slider1__item--img" src="{{ Voyager::image($image)}}" alt="kuting"/>
            @endif
          @endforeach
          <h3 class="slider1__item--avtor">{{ $product->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</h3>
          <p class="slider1__item--text">
            @php $text=$product->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
            {{ str_limit($text, $limit = 80, $end = '...') }}   
          </p>
          <p class="slider1__item--sena">@lang('lang.price'): <span>
            {{ $product->getTranslatedAttribute('price', \App::getLocale(), 'ru') }}
          </span></p>
        </div>
      </div>
      <div class="back side"><a href="{{ route('product_view', ['id'=>$product->id]) }}">@lang('part.podrobne')</a>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endisset