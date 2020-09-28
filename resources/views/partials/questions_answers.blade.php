<section class="container-fluid poxoji">
  <div class="container poxoji__head">
    <h2 class="poxoji__head--text">@lang('lang.faq')</h2>
  </div>
  <div class="container poxoji__wrapper slider3__wrapper">
  @foreach($questions as $question)
    <div class="poxoji__wrapper--item">
      <a href="{{ route('question_view', ['id'=>$question->id]) }}">
      <h4 class="poxoji__wrapper--item_head">
        {{ $question->getTranslatedAttribute('question', \App::getLocale(), 'ru') }}</h4>
      <p class="poxoji__wrapper--item_text"> @php 
          $text=$question->getTranslatedAttribute('answer', \App::getLocale(), 'ru') ;
          @endphp
           {{ str_limit($text, $limit = 300, $end = '...') }} </p></a>
        <a class="poxoji__wrapper--item_link" href="#">{{ $question->username }}</a>
    </div>
  @endforeach
  </div>
</section>