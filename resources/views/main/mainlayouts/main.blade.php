<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/upheadN.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <title>@yield('title')</title> --}}
</head>
<style type="text/css">
    .garant{
    background: #FF5C00;
    color: white;
    max-width: 33%;
    display: inline-block;
	}
	.div-garant{
		margin-top: 40px;
		margin-bottom: 40px;
	}
    .navbar{
        font-size: 130%;
    }
    .block2{
        height: 45%;
        border:1px solid white;
    }
    .btnzakaz{
        position: relative;
        margin: 0;
        margin-left: auto;
        background: #FF5C00;
        color: white;
        display: block;
    }
    .btnzakaz:hover{
    background: white;
    color: #3a7999;
    box-shadow: inset 0 0 0 3px #3a7999;
        transition: .4s;
    -ms-transition: .4s;
    -webkit-transition: .4s;
    transition-duration: .4s;
}
    .usluga{
    color: white;
    box-sizing: border-box;
    width: 100%;
    font-size: 120%;

    }
    .card-hover:hover{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
        z-index: 100;
    }
    .minigrid6{
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    }
    .seredinka{
    height: 350px;
    max-height: 400px;
    background: #4D4D4D;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;  
    }
    .vkonce{
        height: 50px;
        width: 100%;
        background: grey;
        text-align: center;
        color: white;
        padding-top: 15px;
        font-size: 120%;
    }
    .menuha{
        display: flex;
        flex-direction: row;
        margin-bottom: 40px;
        margin-top: 40px;
        font-size: 140%;
    }
    .btn_foot{
        margin-bottom: 20px;
        margin-top: 30px;
    }
    .menu-hover{
        padding-right: 30px;
    }
    .logo_img{
        display: block;
        position: absolute;
        width: 20%;
        margin-left: 7%;
        /*border-radius: 0px 0px 10px 10px;*/
    	/*border: 2px solid red;*/
    }
    .img_logo_end {
    	border-radius: 0px 0px 10px 10px;
    }
    .logo{
    	width: 22%;
    }
    .menu-hover:hover{
        text-decoration:underline;
        cursor: pointer;
    }
    /*#consectetur{text-decoration: none;color: skyblue;cursor:pointer;font-size: 100%;}*/
    /*#consectetur:hover{color: darkblue;}*/
    .card-img-top{
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .map-cont{
        display: flex;
        flex-direction: row;
    }
    .cont-map{
        display: flex;
        flex-direction: column;
    }
    .block2{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border:none;
        height: 800px;
        max-height: 800px;
        background-image: url({{asset('images/bg_image_car.jpg')}});
	    background-repeat: no-repeat;
	     -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	     background-size: cover;
    }
    .kont_uslug{
    	display: inline-flex;
    	flex-flow: row wrap;
    	-webkit-box-orient: horizontal;
	    -webkit-box-direction: normal;
	    align-items: center;
        justify-content: center;
        background:black;
    }
    .cell{
    	width: 25%;
    	-webkit-box-flex: 0;
    /*-ms-flex: 0 0 auto;*/
    flex: 0 0 auto;
    min-height: 0px;
    min-width: 0px;
    background:grey;
    border:1px solid grey;
    color: white;
    font-weight: 600;
    font-size: 110%;

    }
</style>
<body>
    {{-- ////////////////////////////////////////////////////////////////////////////////////// --}}
<div class="head_mod">

        <div class="top_line">
            <div class="logo ">
                <a href="/"><img class="img-fluid" src="{{asset('images/xenon-moscow.jpeg')}}"></a>
            </div>
            <div class="location">
                <div>
                    г.Москва
                </div>
                <div class="street str1">
                    1 Проезд Перова Поля 9 строение 1
                </div>
                <div class="show_map">
                    <a href="#map" class="roll">Показать на карте</a>
                </div>
            </div>
            <div class="sched">
                <div class="header">
                    График работы:
                </div>
                <div class="time">
                    пн-пт: 08.00 - 19.00<br>
                    сб: 09.00 - 18.00<br>
                    вс: выходной
                </div>
            </div>
            <div class=" phone">
                <div class="phones">
                    <a class="phone1" href="tel:+380952132328">+ 7 925 297-07-87</a><br>
                    <a class="phone2" href="tel:+380972132328">+ 7 999 550-35-04</a><br>
                </div>
                <div>Почта: info@xen-on.tech</div>
                <div class="btn-lg btnzakaz"><a class="modal11 ">Заказать звонок</a></div>
            </div>
        </div>
            {{-- <div class="descriptor">Сеть металлоцентров по Запорожью и области</div> --}}
    </div>

{{-- /////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Xenon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/aboutus">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">Услуги</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contacts">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/reviews">Отзывы</a>
      </li>
    </ul>
    {{-- <ul class="navbar-nav">
        <li class="form-inline my-2 my-lg-0">
          <li class="nav-item">
                <a href="" class="nav-link">Войти</a>
          </li>
          <li class="nav-item">
                <a href="" class="nav-link">Регистация</a>
          </li>
        </li>
    </ul> --}}
			    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
  </div>
</nav>
{{-- ////// --}}

<main class="" style="width: 100%;">
    @yield('content')
</main>

{{-- ///////////////////////////////////////////////////////////////////////////////////// --}}
<footer class="text-center bg-primary minigrid6" >
            {{-- <div class="kart-fon"></div> --}}
            <div class="logo_img">
            	<a href="/#"><img class="img_logo_end img-fluid" src="{{asset('images/xenon-moscow.jpeg')}}"></a>
            </div>
            <div class="seredinka">

                <div class="main-menu menuha">
                    <div class="menu-hover">Главная</div>
                    <div class="menu-hover">О нас</div>
                    <div class="menu-hover">Услуги</div>
                    <div class="menu-hover">Контакты</div>
                    <div class="menu-hover">Отзывы</div>
                </div>
                <div class="">
                    <button class="btn-lg btnzakaz mx-auto btn_foot">Заказать звонок</button>
                </div>
            </div>
            <div class="vkonce">
                Copyright &copy; 2020 Company Name
            </div>
        
</footer>


    {{-- <script  src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
</body>
</html>