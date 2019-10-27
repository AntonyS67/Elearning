{{-- Inicio Registro --}}
@include('header')

<body id="register_bg">
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
            <form autocomplete="off" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">

                    <span class="input">
                    <input name="name" class="input_field  @error('name') is-invalid @enderror" type="text">
                        <label class="input_label">
                        <span class="input__label-content">{{__('Nombre')}}</span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>
                    </span>

                    <span class="input">
                    <input name="lastname" class="input_field" type="text">
                        <label class="input_label">
                        <span class="input__label-content">{{__('Apellidos')}}</span>
                    </label>
                    </span>

                    <span class="input">
                        <input name="email" class="input_field @error('email') is-invalid @enderror" type="email">
                            <label class="input_label">
                            <span class="input__label-content">{{__('Email')}}</span>
                        </label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </span>

                    <span class="input">
                        <input name="password" class="input_field" type="password" id="password1">
                            <label class="input_label">
                            <span class="input__label-content">{{__('Contraseña')}}</span>
                        </label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </span>

                    <span class="input">
                        <input class="input_field" name="password_confirmation"  type="password" id="password2">
                            <label class="input_label">
                            <span class="input__label-content">{{__('Confirmar Contraseña')}}</span>
                        </label>
                    </span>
                    
                    <div id="pass-info" class="clearfix"></div>
                </div>
                <button class="btn_1 rounded full-width add_top_30">{{__('Registrarse')}}</button>
                <div class="text-center add_top_10">{{__('Ya tienes una cuenta?')}}<strong><a href="{{route('login')}}"> {{__('Inicia Sesión')}}</a></strong></div>
            </form>
            <div class="copy">© 2017 Udema</div>
        </aside>
    </div>
    <!-- /login -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/pw_strenght.js"></script>
    
</body>
</html>
{{-- Fin Registro --}}
