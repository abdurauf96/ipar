<section class="container-fluid xit">
  <div class="container xit__head">
    <h3 class="xit__head--text">@lang('part.xit_prod')</h3>
  <div class="container xit__wrapper">
    @foreach($products as $product)
    <div class="xit__item">
      <h4 class="xit__item--head">{{ $product->getTranslatedAttribute('status', \App::getLocale(), 'ru') }}</h4>
      <div class="xit__item--left">
        @php $images=json_decode($product->image) @endphp
          @foreach($images as $image)
            @if($loop->first) 
          <img class="xit__item--img" src="{{ Voyager::image($image)}}" alt="kuting"/>
            @endif
          @endforeach
      </div>
      <div class="xit__item--right">
        <h3 class="xit__item--avtor">{{ $product->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</h3>
        <p class="xit__item--text">
         @php $text=$product->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
            {{ str_limit($text, $limit = 200, $end = '...') }}   
        </p>
        <p class="xit__item--sena">@lang('lang.price'): <span>{{ $product->getTranslatedAttribute('price', \App::getLocale(), 'ru') }}</span></p>
        <div class="xit__item--link"><a data-id="{{ $product->id }}" class="xit__item--zakas zakazat" href="#">@lang('lang.book')</a><a class="xit__item--podrob" href="{{ route('product_view', ['id'=>$product->id]) }}">@lang('part.podrobne')</a></div>
      </div>
    </div>
    @endforeach
  </div>
</section>