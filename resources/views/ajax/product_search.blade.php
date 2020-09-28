  @if(count($products)>0)
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
    <div class="back side"><a href="{{ route('product_view', ['id'=>$product->id]) }}">Подробнее</a></div>
  </div>
  @endforeach
  @else
  <div class="alert alert-danger"> 
    <p>not found</p>
  </div>
  @endif
