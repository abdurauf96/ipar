<div class="qa__content--left">
  <ul class="nav flex-column">
    @foreach($categories as $category)
    <li class="nav-item"><a class="nav-link" href="/posts/category/{{ $category->id }}"> {{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }} </a></li>
    @endforeach
  </ul>
  <div class="qa__content--prochitat"> 
  <h2 class="qa__content--text">Прочитайте также</h2>
  @foreach($posts as $post)
  <div class="content__item">
    <div class="content__item--wrapper">
      <h3 class="content__item--date">{{ $post->created_at->format('d M Y') }}</h3><a class="fa fa-comments" href="#"><span>{{ count($post->comments) }}</span></a><a class="far fa-eye" href="#"><span>{{ $post->view }}</span></a>
    </div>
    <a href="{{ route('post_view', ['id'=>$post->slug]) }}"><h3 class="content__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3></a>
    <p class="content__item--text">{{ $post->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru') }} </p>
  </div>
  @endforeach
 
</div>
</div>
