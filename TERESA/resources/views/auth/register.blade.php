<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | TERESA - Telkom Reserve Service</title>
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

    <!-- <div class="color-line"></div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Telkom Reserve Service</h3>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12 text-center">
                          <img src="img/logo/teresa.jpg" class="img-responsive center-block" alt="">
                        </div>
                      </div>
                    </div>
                    <p>Silahkan daftarkan akun Anda untuk dapat masuk ke laman TERESA. </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Fullname</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Register</button>
                                <br>
                            </div>
                        </form>
                        <br>
                        <center><a href="{{route('login')}}"><button class="btn btn-default">Cancel</button></a></center>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
