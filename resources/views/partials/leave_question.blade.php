<section class="container-fluid vapros">
  <div class="container vapros__wrapper">
    <form class="form">
      <h3 class="form__head">@lang('part.question')</h3>
      <p class="form__text">@lang('part.sub_question')</p>
      <div class="form__group">
        <input class="form-control name" type="text" placeholder="@lang('lang.imya')"/>
        <input class="form-control phone" type="text" placeholder="@lang('lang.phone')"/>
        <textarea class="form-control question" placeholder="@lang('lang.vash_vop')"></textarea>
        <input class="form-control send_question" type="submit" value="@lang('lang.send') "/><a href="#">@lang('part.vse')</a>
      </div>
    </form>
  </div>
</section>