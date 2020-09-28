 @if(count($post->comments)>0)
<h4 class="comment__head">@lang('lang.comments') ( {{ count($post->comments) }} )</h4>
@foreach($post->comments as $comment)
<div class="content__item">
  <div class="content__item--wrapper">
    <h3 class="content__item--avtor">{{ $comment->name }}</h3><!-- <a class="fa fa-comments" href="#"><span>Ответить</span></a> --><a href="#"> <span>{{ $comment->created_at->format('d M Y , h:m') }}</span></a>
  </div>
  <p class="content__item--text">{{ $comment->body }}</p>
</div>
@endforeach
@else
<h4 class="comment__head">@lang('lang.net_com')</h4>
@endif