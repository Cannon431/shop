<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>t>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('') }}images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(Auth::check())
                                <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Корзина @if(isset($cartCount)) {{ '(' . $cartCount . ')' }} @endif</a></li>
                                <li><a href="{{ url('account') }}"><i class="fa fa-user"></i> Аккаунт</a></li>
                                <li><a href="{{ url('logout') }}"><i class="fa fa-times-circle"></i> Выйти</a></li>
                            @else
                                <li><a href="{{ url('login') }}"><i class="fa fa-lock"></i> Вход</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('/') }}">Главная</a></li>
                            <li><a href="{{ url('catalog') }}">Каталог товаров</a></li>
                            @if(Auth::check())
                                <li>
                                    <a href="{{ url('cart') }}">Корзина @if(isset($cartCount)) {{ '(' . $cartCount . ')' }} @endif</a>
                                </li>
                            @endif
                            <li><a href="{{ url('contact') }}">Обратная связь</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->


<section>
    <div class="container">
        <div class="row">
        @if(!isset($notNeedCategories))
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">

                        @foreach ($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading ">
                                    <h4 class="panel-title ">
                                        <a href="{{ url('category/' . $category->id) }}" @if(isset($categoryId) && $categoryId == $category->id) class="active" @endif>
                                            {{ $category->name }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
           @yield('content')
        </div>
    </div>
</section>


<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © {{ date('Y') }}</p>
                <p class="pull-right">Justify Inc.</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/price-range.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>