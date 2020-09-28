@extends('layouts.index')

@section('title', 'Контакты')

@section('content')
<section class="container-fluid menusecond">   
  @include('layouts.menu')
</section>
<section class="container-fluid way">
  <div class="container way__wrapper"><a class="way__wrapper--link way__wrapper--active" href="/">@lang('lang.home') </a><a class="way__wrapper--link" href="#">/ @lang('lang.contact')</a></div>
</section>
<section class="container-fluid kontakt">
  <div class="container kontakt__wrapper">
    <div class="kontakt__wrapper--left">
      <h4 class="kontakt__wrapper--head">@lang('lang.contact')</h4>
      <ul class="nav flex-column">
        <li class="nav-link">
          <div class="nav-icon"><i class="fa fa-phone"></i></div>
          <div class="nav-item">
            <p class="nav-item--text">@lang('lang.teli') FTD:</p><a class="nav-item__link" href="#">+998 93 736-44-77 </a>
          </div>
        </li>
        <li class="nav-link">
          <div class="nav-icon"><i class="fa fa-calendar"></i></div>
          <div class="nav-item">
            <p class="nav-item--text">@lang('lang.teli') FTD:</p><a class="nav-item__link" href="#">+998 93 736-44-77 </a>
          </div>
        </li>
        <li class="nav-link">
          <div class="nav-icon"><i class="fa fa-envelope"></i></div>
          <div class="nav-item">
            <p class="nav-item--text">@lang('lang.email'):</p><a class="nav-item__link" href="#">{{ setting('site.email') }} </a>
          </div>
        </li>
        <li class="nav-link">
          <div class="nav-icon"><i class="fa fa-map-marker-alt"></i></div>
          <div class="nav-item">
            <p class="nav-item--text">@lang('lang.nash_adr')</p><a class="nav-item__link" href="#">Адрес Фирмы</a>
          </div>
        </li>
      </ul>
      <div class="sot_set"><span>@lang('lang.sotseti')</span><a href="#"><span class="fab fa-facebook-f"></span></a><a href="#"><span class="fab fa-vk"></span></a><a href="#"><span class="fab fa-telegram-plane"></span></a></div>
      <div class="pishmite__nam">
        <p>Пишите нам по:</p><a class="btn telegram" href="#">Telegram</a><a class="btn whatsap" href="#">Whatsapp</a><a class="btn viber" href="#">Viber</a><a class="btn skype" href="#">Skype</a>
      </div>
    </div>
    <div class="kontakt__wrapper--right">
      <div class="kon_zayavku">
        <div class="kon_zayavku__head">
          <h3 class="kon_zayavku__head--top">@lang('lang.napishite')</h3>
          <p class="kon_zayavku__head--text">@lang('lang.sub_ostavte')</p>
        </div>
        <form class="form" action="">
          <div class="form-group">
            <div class="form1">
              <label class="3id" for="imya">@lang('lang.imya'):</label>
              <input class="form-control name" type="text" placeholder="Александра"/>
            </div>
            <div class="form1">
              <label for="imya">@lang('lang.phone'):</label>
              <input class="form-control phone" type="text" placeholder="+998"/>
            </div>
            <textarea class="form-control msg" placeholder="@lang('lang.sms')"></textarea>
            <div class="kon_zayavku--link">
              <input type="submit" class="contact_msg" value="@lang('lang.send')"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@stop