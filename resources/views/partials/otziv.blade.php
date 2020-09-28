<section class="container-fluid produk">
  <div class="container produk__head">
    <p class="produk__head--text">@lang('part.otziv_title')   </p>
  </div>
  <div class="container slider2">
    <div class="slider3__wrapper">
      @foreach($comments as $comment)
      <div class="slider2__item">
        <p class="slider2__item--text">{{ $comment->message }}</p><a class="slider2__item--link" href="#">{{ $comment->name }}</a>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container produk__link"><a href="{{ route('thoughts') }}">@lang('part.vse_otziv')</a></div>
</section>