 <!-- ?	HEADER -->
 <header class="header">

     <!--todo	HEADER-SECTION TOP -->
     <div class="header__top ">
         <div class="header__top-inner container">
             <div class="header__messengers">
                 <div class="header__write-us">Напишите нам</div>
                 <img class="header__messengers-icon" src="img/header-top/header-messages/icon-whatsapp.png"
                     alt="whatsapp">
                 <img class="header__messengers-icon" src="img/header-top/header-messages/icon-telegram.png"
                     alt="telegram">
                 <img class="header__messengers-icon" src="img/header-top/header-messages/icon-viber.png" alt="viber">
             </div>
             <div class="header__section-right">
                 <div class="header__demo df">
                     <div class="header__text">Демо-доступ</div>
                     <img class="header__messengers-icon" src="img/header-top/header-icons/arrow.png" alt="telegram">
                 </div>
                 <div class="header__user-accuont df">
                     <img class="header__messengers-icon" src="img/header-top/header-icons/Group 519.png" alt="viber">
                     @guest
                         @if (Route::has('login'))
                             <div class="header__text"><a class="own-room__link" href="{{ route('login') }}">Войти</a>
                             </div>
                         @endif
                         @if (Route::has('register'))
                             <div class="header__text"><a class="own-room__link" href="{{ route('register') }}">Регистрация</a></div>
                         @endif
                     @else
                         <div class="header__text"><a class="own-room__link" href="{{ route('home') }}">{{ Auth::user()->name }}</a></div>
                     @endguest
                 </div>
             </div>
         </div>
     </div>
     <!--todo	HEADER-SECTION TOP -->

     <!--todo	HEADER-SECTION INNER -->
     <div class="header__inner">
         <div class="container df-between">

             <img class="header__inner-self " src="img/header-inner/header-logo.png" alt="header-logo">

             <div class="header__inner-self">
                 <div class="header__inner-text-cctv df">
                     <div class="header__inner-text-gps">ГЛОНАСС/GPS мониторинг транспорта контроль расхода топлива,
                         тахографы</div>
                 </div>
             </div>
             <div class="header__inner-self">

                 <!--todo	block-->
             </div>
             <div class="header__inner-self">
                 <div class="header__inner-text-cctv df">
                     <img class="icon-size" src="img/header-inner/cctv.png" alt="Camera">
                     <div class="header__inner-text-cctv-inner"> Видеонаблюдение <br> в автомобиль</div>
                 </div>
             </div>
             <!--todo	block-END -->

             <!--todo	block-->
             <div class="header__inner-self">
                 <div class="header__inner-text-cctv df">
                     <img class="icon-size" src="img/header-inner/tools.png" alt="Tools">
                     <div class="header__inner-text-cctv-inner">Все <br> компетенции</div>
                 </div>
             </div>
             <!--todo	block end-->

             <!--todo	block-->
             <div class="header__inner-self">
                 <div class="header__inner-text-cctv-geo dfc">
                     <div>
                         <img src="img/header-inner/geo.png" alt="Geo">
                         <span class="geo-town">Ставрополь</span>
                         <div><span class="header__inner-text-geo">Время работы по МСК:</span><br>
                             <span class="header__inner-text-geo-inner">
                                 Пн — Пт с
                                 5:00 до 19:00
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
             <!--todo	block end-->

             <!--todo	block -->
             <div class="header__inner-self">
                 <div class="header__inner-text-gps dfc">
                     <div> <span class="shadow">Звонки по России бесплатные</span> </div>
                     <div class="number">8 (800) 505-40-23</div>
                     <div class="number">8 (865) 299-17-31</div>
                     <div class="">
                         <img class="number-call-img" src="img/header-inner/number.png" alt="number">
                         <span class="number-call">Заказать звонок</span>
                     </div>
                 </div>
             </div>
             <!--todo	block end-->

         </div>
     </div>
     <!--todo	HEADER-SECTION INNER END-->

     <!--todo	HEADER-BOTTON -->
     <div class="header__bottom">
         <div class="container">
             @include('page-components.nav')
         </div>
     </div>
     <!--todo	HEADER-BOTTON -->

 </header>
 <!-- ?	HEADER -->
