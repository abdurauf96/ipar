<div class="media_menu">
  <div class="burger__menu"><span class="icon"></span></div>
</div>
<div class="container header__menu">
  <div class="header__top">
    <div class="header__logo">
      <a href="/"> <img src="/img/logo.png" alt="kuting"/>
    </a>
    </div>
    <div class="header__form">
      <form class="form-group" method="get" action="{{ route('search') }}">
        {{ csrf_field() }}
        <input class="form-control" type="search" name="data" placeholder="Поиск по сайту"/>
        <input class="form-control" type="submit" value="Найти"/>
      </form>
    </div>
    <div class="header__right">
      <div class="header__right--call">
        <div class="header__right--icon"></div>
        <div>
          <a class="header__right--number" href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
          <a class="header__right--number" href="tel:{{ setting('site.phone2') }}">{{ setting('site.phone2') }}</a>
        </div>
      </div>
      <div class="header__right--language">
        @if(\App::getLocale()=='ru')
        <img class="header__right--flag" src="/img/rus_flag.png" alt="kuting"/>
        @else
        <img class="header__right--flag" src="/img/uz.png" alt="kuting"/>
        @endif
        <div class="dropdown">
          <button class="btn" id="Mydrop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <a href="/lang/ru">язык</a></button>
          <div id="drop_menu" class="dropdown-menu" aria-labelledby="Mydrop"><a class="dropdown-item" href="/lang/en">O'zb</a><a class="dropdown-item" href="/lang/ru">Руc</a></div>
        </div>
      </div>
    </div>
  </div> 
</div>

<div class="container-fluid menu__link--second">
  <div class="container " >
    <div class="header__link">
      {{ menu('main', 'layouts.menu2') }}
    </div>
  </div>
</div>
