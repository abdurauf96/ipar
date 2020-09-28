<h3 class="okampaniya__right--head">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
<div class="okampaniya__right--img"><img src="{{ Voyager::image($page->image) }}" alt="kuting"/>
  <p class="okampaniya__right--text">{{$page->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru')}}</p>
</div>
<p class="okampaniya__right--text"> {{ $page->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>