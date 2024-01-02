
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | TERESA - Telkom Reserve Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- <div class="color"></div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>Telkom Reserve Service</h3>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12 text-center">
                          <img src="img/logo/teresa.jpg" class="img-responsive center-block" alt="">
                        </div>
                      </div>
                    </div>
                    <p>Sistem Peminjaman dan Perizinan Penggunaan
                      Fasilitas Telkom University Berbasis Website
                      </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="{{route('register')}}">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <p>Create with patient &copy; <a href="https://instagram.com/rayhanalr_">Kelompok 5</a>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
