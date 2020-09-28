<section class="container-fluid video">
  <div class="container video__top">
    <h3 class="video__top--text">@lang('part.zayafka_title')</h3>
  </div>
  <div class="container video__wrapper">
    <div class="video__wrapper--left"><img src="/img/video_fon.png" alt="kuting"/></div>
    <div class="video__wrapper--right">
      <div class="zayavku">
        <div class="zayavku__head">
          <h3 class="zayavku__head--top">@lang('lang.ostavte')</h3>
          <p class="zayavku__head--text">@lang('lang.sub_ostavte')</p>
        </div>
        <form class="form" action="">
          <div class="form__head">
            <p class="form__head--text">@lang('lang.zapolnite_form')</p><a href="tel: ">{{ setting('site.phone') }}</a>
          </div>
          <div class="form-group">
            <label class="3id" for="imya">@lang('lang.imya'):</label>
            <input class="form-control name" type="text" placeholder="Александра"/>
            <label for="imya">@lang('lang.phone'):</label>
            <input class="form-control phone" type="text" placeholder="+998"/>
            <div class="zayavku--link">
              <input type="submit" class="send_message" value="@lang('part.poluchit')"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>