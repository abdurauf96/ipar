<ul class="nav">
    @foreach($items as $item)
    <li class="nav-item"><a class="nav-link" href="{{ $item->url }}">{{ $item->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</a></li>
    @endforeach
  </ul>