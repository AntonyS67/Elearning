
{{-- Inicio Login --}}
@include('header')
<body id="login_bg">
	
        <nav id="menu" class="fake_menu"></nav>
        
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- End Preload -->
        
        <div id="login">
            <aside>
                <figure>
                    <a href="{{url('/')}}"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
                </figure>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="access_social">
                        <a href="#0" class="social_bt facebook">{{__('Iniciar Sesión con Facebook')}}k</a>
                        <a href="#0" class="social_bt google">{{__('Iniciar Sesión con Google')}}</a>
                        <a href="#0" class="social_bt linkedin">{{__('Iniciar Sesión con Linkedin')}}</a>
                    </div>
                    <div class="divider"><span>Or</span></div>
                    <div class="form-group">
                        <span class="input">
                        <input class="input_field" type="email" autocomplete="off" name="email">
                            <label class="input_label">
                            <span class="input__label-content @error('email') is-invalid @enderror">Email</span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
                        </span>
    
                        <span class="input">
                        <input class="input_field" type="password" autocomplete="new-password" name="password">
                            <label class="input_label">
                            <span class="input__label-content @error('password') is-invalid @enderror">Contraseña</span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </label>
                        </span>
                        @if (Route::has('password.request'))
                            <small><a href="{{ route('password.request') }}">Olvidaste tu Contraseña?</a></small>
                        @endif
                    </div>
                    <button class="btn_1 rounded full-width add_top_60">{{__('Iniciar Sesión')}}</button>
                    <div class="text-center add_top_10">Nuevo en Udema? <strong><a href="{{route('register')}}">Registrate!</a></strong></div>
                </form>
                <div class="copy">© 2017 Udema</div>
            </aside>
        </div>
        <!-- /login -->
            
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
{{-- Fin login --}}
                    
