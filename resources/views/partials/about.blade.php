<section class="container-fluid okam">
  <div class="container okam__wrapper">
    <div class="okam__wrapper--right"></div>
    <div class="okam__wrapper--right">
      <h3 class="okam__wrapper--head">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
      <p class="okam__wrapper--text">{{ $page->getTranslatedAttribute('body', \App::getLocale(), 'ru') }} </p>
    
    </div>
  </div>
</section>