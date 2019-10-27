@include('header')
<body>
    <div id="page">
        <header class="header menu_2">
            <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
            <div id="logo">
                <a href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></a>
            </div>
            <!-- Authentication Links -->
            <ul id="top_menu">
            @guest
                
                    <li><a href="#0" class="search-overlay-menu-btn">Buscar</a></li>
                    <li class="hidden_tablet">
                        <a href="{{ route('login') }}" class="btn_1 rounded">{{ __('Ingresa') }}</a>
                    </li>
            @else
                <li class="dropdown">
                    <a id="navbarDropdown" class="btn_1 rounded dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="{{url('/')}}">Bienvenido</a></span>
                    </li>
                    <li><span><a href="cursos.html">Cursos</a></span>
                    </li>
                </ul>
            </nav>
            <!-- Search Menu -->
            <div class="search-overlay-menu">
                <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
                <form role="search" id="searchform" method="get">
                    <input value="" name="q" type="search" placeholder="Search..." />
                    <button type="submit"><i class="icon_search"></i>
                    </button>
                </form>
            </div><!-- End Search Menu -->
        </header>
        <!-- /header -->
        <main>
            @yield('content')
        </main>
        @include('footer')
    </div>
    <!-- COMMON SCRIPTS -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/validate.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/modernizr_tables.js')}}"></script>
    <script src="{{asset('js/tables_func.js')}}"></script>
</body>
</html>
