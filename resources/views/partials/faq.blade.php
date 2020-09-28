<section class="container-fluid accordion ">
  <div class="container accordion__top">
    <h3 class="accordion__top--text">@lang('lang.faq')</h3>
  </div>
  <div class="container">
    <div class="accordion__left">
      @foreach($faqs as $faq)
      <div class="accordion__item">
        <div class="accordion__head accordion__active">
          <p>{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#"><i class="fa fa-angle-right"> </i></a>
        </div>
        <div class="accordion__body  @if($loop->first) accordion__first @endif ">
          <div class="news__right--text">
            <p>{{ $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>