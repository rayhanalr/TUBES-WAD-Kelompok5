<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>History | TERESA - Telkom Reserve Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Google Fonts
                ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- main CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- morrisjs CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- forms CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/form/all-type-forms.css') }}">
    <!-- style CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
                ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('home')}}"><img class="main-logo" src="img/logo/teresa.jpg" alt=""
                        style="height: 50px;" /></a>
                <strong><img src="img/logo/teresa.jpg" alt=""></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{route('home')}}">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                    class="fa big-icon fa-building icon-wrap"></i> <span
                                    class="mini-click-non">Reservation</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="Create" href="{{route('create')}}"><i class="fa fa-inbox sub-icon-mg"
                                                    aria-hidden="true"></i> 
                                                    @if (Auth::user()->role == 1)
                                                    <span class="mini-sub-pro">Manage Form</span></a></li>
                                                    @else
                                                    <span class="mini-sub-pro">Create</span></a></li>
                                                    @endif
                                                    
                                        <li><a title="View History" href="{{route('history')}}"><i class="fa fa-list sub-icon-mg"
                                                    aria-hidden="true"></i> 
                                                    @if (Auth::user()->role == 1)
                                                    <span class="mini-sub-pro">List Event</span></a></li>
                                                    @else
                                                    <span class="mini-sub-pro">History</span></a></li>
                                                    @endif
        
                                    </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{route('home')}}"><img class="main-logo" src="img/logo/teresa.jpg" style="height: 50px;"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Reservation</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                            class="fa fa-bell-o" aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>
                                                    <div role="menu"
                                                        class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <h2>{{ Auth::user()->name }}</h2>
                                                                        <p>Penganjuan peminjaman tempat telah disetujui.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf"
                                                            aria-hidden="true"></i>
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i
                                                            class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><span
                                                                class="fa fa-lock author-log-ic"></span>
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="{{route('home')}}">Home <span
                                                    class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="{{route('home')}}">Approved</a></li>
                                                <li><a href="index-1.html">Waiting</a></li>
                                                <li><a href="index-3.html">Reject</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Reservation <span
                                                    class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="{{route('create')}}">Create</a>
                                                </li>
                                                <li><a href="{{route('history')}}">History</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>
        <div class="single-product-tab-area mg-tb-15" style="padding-top: 20px;">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil"
                                                aria-hidden="true"></i>
                                                @if (Auth::user()->role == 1)
                                                    List Event
                                                @else
                                                    History Reservation
                                                @endif
                                                </a></li>
                                </ul>
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>
                                                        @if (Auth::user()->role == 1)
                                                            List Event
                                                        @else
                                                        History List
                                                        @endif
                                                    </h4>
                                                    @if (Auth::user()->role == 1)
                                                        
                                                    @else
                                                    <div class="add-product">
                                                        <a href="{{route('create')}}">Create Reservation</a>
                                                    </div>
                                                    @endif
                                                    <table>
                                                        <tr>
                                                            <th>Submition Date</th>
                                                            <th>Status</th>
                                                            <th>Place</th>
                                                            <th>Event</th>
                                                            @if (Auth::user()->role == 1)
                                                                <th>Action</th>
                                                            @endif
                                                        </tr>
                                                        @php
                                                        $offset = 5;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $offset;
                                                        $prev = $page - 1;
                                                        $next = $page + 1;
                                                        if (Auth::user()->role == 1){
                                                            $data = DB::table('reservation')->get();
                                                        }else{
                                                            $data = DB::table('reservation')->where('user_id', Auth::user()->id)->get();
                                                        }
                                                        $total = $data->count();
                                                        $lastPage = ceil($total / $offset);
                                                        $reservasi = $data->slice($start, $offset);
                                                        $no = $start + 1;

                                                        @endphp
                                                        @while ($item = $reservasi->shift())
                                                            <tr> 
                                                            <td>
                                                                @php
                                                                $bulan = array(
                                                                1 => 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
                                                                );
                                                                $split = explode('-', $item->tanggal);
                                                                echo $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
                                                                @endphp
                                                            </td>
                                                            <td>
                                                                @if($item->status == "Menunggu")
                                                                <button class="pd-setting">On Going</button>
                                                                @elseif($item->status == "Diterima")
                                                                <button class="pd-setting">On Going</button>
                                                                @elseif($item->status == "Ditolak")
                                                                <button class="xs-setting">Rejected</button>
                                                                @else
                                                                <button class="ds-setting">Already Done</button>
                                                                @endif
                                                            </td>
                                                            <td>{{$item->tempat_kegiatan}}</td>
                                                            <td>{{$item->nama_kegiatan}}</td>
                                                            @if (Auth::user()->role == 1)
                                                                <td>
                                                                    <a href="{{route('show-pdf', $item->file)}}" target="_blank"><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa fa-download" aria-hidden="true"></i></button></a>
                                                                    @if ($item->status == "Menunggu")
                                                                        <a href="{{route('accept', $item->id)}}"><button data-toggle="tooltip" title="Accept" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                                                        <a href="{{route('decline', $item->id)}}"><button data-toggle="tooltip" title="Reject" class="pd-setting-ed"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                                                                    @elseif ($item->status == "Diterima")
                                                                        <a href="{{route('done', $item->id)}}"><button data-toggle="tooltip" title="Accept" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                                                    @endif
                                                                </td>
                                                            @endif
                                                        </tr>
                                                        @endwhile
                                                        
                                                    </table>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12 pagi-area ">
                                                                <nav aria-label="navigation">
                                                                    <ul class="pagination">
                                                                        <li class="page-item">
                                                                            <a class="page-link"
                                                                                <?php if($page > 1){ echo "href='?page=$prev'"; } ?>>Previous</a>
                                                                        </li>
                                                                        <?php 
                                                                        for($x=1;$x<=$lastPage;$x++){
                                                                            ?>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <li class="page-item">
                                                                            <a class="page-link"
                                                                                <?php if($page < $lastPage) { echo "href='?page=$next'"; } ?>>Next</a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Create with patient &copy; <a href="https://instagram.com/rayhanalr_">Kelompok 5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
                ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
                ============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
                ============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
                ============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
                ============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
                ============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
                ============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
                ============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
                ============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- tab JS
                ============================================ -->
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>

    <!-- plugins JS
                ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
                ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>