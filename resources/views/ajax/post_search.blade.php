<div class="nwrapper">
  @if(count($posts)>0)
 @foreach($posts as $post)
  <div class="nwrapper__item"> 
    <div class="absolute">
      <div class="absoluteblock">
        <h3 class="content__item--date">{{ $post->created_at->format('d M Y') }}</h3><a class="fa fa-comments" href="#"><span>{{ count($post->comments) }}</span></a><a class="far fa-eye" href="#"><span>{{ $post->view }}</span></a>
      </div>
      <div class="absolutetext">
        <p>{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p>
      </div>
       @php $image=str_replace('.png', '-small.png',  $post->image ) @endphp
      <img class="nwrapper__item--img" src="{{ Voyager::image($image) }}" alt="kuting"/>
    </div>
    <p class="nwrapper__item--text">
      
      @php $text=$post->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru'); @endphp
          
        {{ str_limit($text, $limit = 100, $end = '...') }}
    </p><a class="nwrapper__item--link" href="{{ route('post_view', ['slug'=>$post->slug]) }}"> Прочитать дальше</a>
  </div>
@endforeach
@else
<div class="alert alert-info">
  <p>не найдено</p>
</div>
@endif
</div>