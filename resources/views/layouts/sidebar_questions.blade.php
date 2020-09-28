 <ul class="nav flex-column">
  <li class="nav-item"><a class="nav-link" href="/questions">Все вопросы</a></li>
  @foreach($categories as $category)
     <li class="nav-item"><a class="nav-link" href="{{ route('questions_category', ['id'=>$category->id]) }}">{{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</a></li>
  @endforeach
</ul>