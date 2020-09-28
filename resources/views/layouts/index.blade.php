<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title-->
    <title>@yield('title') - ipar Uzbekistan</title>
    <!-- title the end-->
    <!-- all css files goes here-->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/all.min.css"/>
    <link rel="stylesheet" href="/css/slick-theme.css"/>
    <link rel="stylesheet" href="/css/slick.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <!-- css files the end-->
  </head>
  <body>


  @yield('content')

  <footer class="container-fluid footer">
      <div class="container footer__wrapper">
        <div class="footer__wrapper--item">
          <h3 class="footer__wrapper--kont">@lang('lang.nash_contact')</h3>
          <ul class="nav">
            <li class="nav-item"><i class="fa fa-phone"></i>
              <div class="link"><a href="tel ">{{ setting('site.phone') }}</a><a href="tel ">{{ setting('site.phone2') }}</a></div>
            </li>
            <li class="nav-item"> <i class="fa fa-map-marker-alt"></i>
              <div class="link">
                <p>@lang('lang.adres')</p>
              </div>
            </li>
            <li class="nav-item"> <i class="fa fa-envelope"></i>
              <div class="link"><a href="email">{{ setting('site.email') }}</a></div>
            </li>
          </ul>
          <div class="menejer"><a href="#"><span class="fab fa-facebook-f"></span></a><a href="#"><span class="fab fa-vk"></span></a><a href="#"><span class="fab fa-telegram-plane"></span></a></div>
        </div>
        <div class="footer__wrapper--item">
          <h3 class="footer__wrapper--text">@lang('lang.contact_menejer')</h3>
          <div class="kon__menejer">
            <p class="kon__menejer--text">Имя Фамилия</p><a class="kon__menejer--call" href="tel:">+998 94 490-50-11</a><a class="kon__menejer--email" href="email">example@sitename.uz</a>
          </div>
          <div class="kon__menejer">
            <p class="kon__menejer--text">Имя Фамилия</p><a class="kon__menejer--call" href="tel:">+998 94 490-50-11</a><a class="kon__menejer--email" href="email">example@sitename.uz</a>
          </div>
          <div class="kon__menejer">
            <p class="kon__menejer--text">Имя Фамилия</p><a class="kon__menejer--call" href="tel:">+998 94 490-50-11</a><a class="kon__menejer--email" href="email">example@sitename.uz</a>
          </div>
        </div>
        <div class="footer__wrapper--item">
          <h3 class="footer__wrapper--text">@lang('lang.contact') </h3><a class="footer__link" href="/products">@lang('lang.nash_prod')</a><a class="footer__link" href="/posts">@lang('lang.polezni')</a><a class="footer__link" href="/questions">@lang('lang.ques_answ')  </a>
        </div>
        <div class="footer__wrapper--item">
          <h3 class="footer__wrapper--text">@lang('lang.info')</h3>
          <a class="footer__link" href="/aboutUs">@lang('lang.onas')</a>
          <a class="footer__link" href="/contact">@lang('lang.contact')</a>
          <a class="footer__link" href="/faq">FAQ</a>
        </div>
      </div>
    </footer>
    <section class="container-fluid modal consult_form">
      <div class="container">
        <div class="zayavku">
          <div class="exit"> 
            <p>&times;</p>
          </div>
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
                <input type="submit" class="send_message" value="@lang('lang.poluchit')"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="container-fluid otprovlen">
      <div class="container otprovlen__wrapper"><img class="otprovlen__img" src="/img/correct.png" alt="kuting"/>
        <p class="otprovlen__head">@lang('lang.otprovlen')</p>
        <p class="otprovlen__text">@lang('lang.sub_otprovlen')</p><a class="otprovlen__xorosho" href="#">@lang('lang.ok')</a>
      </div>
    </section>
    <section class="container-fluid footer__bottom">
      <div class="container">
        <p>© 2019 Все права защищены </p>
        <p>Создание сайтов <a href="#">Webmasters </a></p>
      </div>
    </section>

    <section class="container-fluid modal modal__form">
      <div class="container">
        <div class="zayavku">
          <div class="exit"> 
            <p>&times;</p>
          </div>
          <div class="zayavku__head">
            <h3 class="zayavku__head--top">@lang('lang.ostavte')</h3>
            <p class="zayavku__head--text">@lang('lang.sub_ostavte')</p>
          </div>
          <form class="form" action="">
            <div class="form__head">
              <p class="form__head--text">@lang('lang.zapolnite_form')</p><a href="tel: ">{{ setting('site.phone') }}</a>
            </div>
            <div class="form__content">
              <p class="form__content--head">@lang('lang.info')@lang('lang.vi_zak'):</p>
              <h3 class="form__content--name product_name"></h3>
            </div>
            <div class="form-group">
              <label class="3id"  for="imya">@lang('lang.imya'):</label>
              <input class="form-control" id="name" type="text" placeholder="Александра"/>
              <label for="imya">@lang('lang.phone'):</label>
              <input class="form-control" id="phone" type="text" placeholder="+998"/>
              <div class="zayavku--link">
                <input type="submit" class="send_zakas" value="@lang('lang.book')"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- all js files goes here-->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/my.js"></script>
    <!-- script files the end-->
  
<script src="{{ asset('js/share.js') }}"></script>
  </body>
</html>