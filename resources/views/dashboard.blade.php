
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Absensi @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('style/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('style/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('style/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="{{asset('style/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="https://pngtree.com/so/classic">

    <!-- Data Tables-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="navbar-brand">
                            <img src="logo-wk.png" style="width: 3rem" alt=".."/>
                        </a>
                        <a class="navbar-brand">
                            <h3>Absensi
                            </h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{url('/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/students">
                                <i class="fas fa-briefcase"></i> Student</a>
                        </li>
                        <li>
                            <a href="/rombel">
                                <i class="fas fa-book"></i> Rombel</a>
                        </li>
                        <li>
                            <a href="/rayon">
                                <i class="fas fa-user"></i>Rayon</a>
                        </li>
                        <li>
                            <a href="/absen">
                                <i class="fas fa-tasks"></i>Absen</a>
                        </li>
                        <li>
                            <a href="/notabsen">
                                <i class="fas fa-tasks"></i>Tidak Hadir</a>
                        </li>
    
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            
                        </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="navbar-brand">
                    <img src="logo-wk.png" style="width: 3rem" alt=".."/>
                </a>
                <a class="navbar-brand">
                    <h3>Absensi</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{url('/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/students">
                                <i class="fas fa-briefcase"></i> Student</a>
                        </li>
                        <li>
                            <a href="/rombel">
                                <i class="fas fa-book"></i> Rombel</a>
                        </li>
                        <li>
                            <a href="/rayon">
                                <i class="fas fa-user"></i>Rayon</a>
                        </li>
                        <li>
                            <a href="/absen">
                                <i class="fas fa-tasks"></i>Data Hadir</a>
                        </li>
                        <li>
                            <a href="/notabsen">
                                <i class="fas fa-tasks"></i>Data Tidak Hadir</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                 </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </li>
                            </ul>
                            </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <header class="header-desktop">
                
            </header>
            
            
            <div class="main-content">
            <div class="section__content section__content--p30">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="overview-wrap">
            <h2 class="title-1">Dashboard</h2>
            </div>
            </div>
            </div>
            <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
            <div class="overview__inner">
            <div class="overview-box clearfix">
            <div class="icon">
            <i class="zmdi zmdi-account-o"></i>
            </div>
            <div class="text">
            <h2>10368</h2>
            <span>members online</span>
            </div>
            </div>
            <div class="overview-chart">
            <canvas id="widgetChart1"></canvas>
            </div>
            </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
            <div class="overview__inner">
            <div class="overview-box clearfix">
            <div class="icon">
            <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <div class="text">
            <h2>388,688</h2>
            <span>items solid</span>
            </div>
            </div>
            <div class="overview-chart">
            <canvas id="widgetChart2"></canvas>
            </div>
            </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
            <div class="overview__inner">
            <div class="overview-box clearfix">
            <div class="icon">
            <i class="zmdi zmdi-calendar-note"></i>
            </div>
            <div class="text">
            <h2>1,086</h2>
            <span>this week</span>
            </div>
            </div>
            <div class="overview-chart">
            <canvas id="widgetChart3"></canvas>
            </div>
            </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
            <div class="overview__inner">
            <div class="overview-box clearfix">
            <div class="icon">
            <i class="zmdi zmdi-money"></i>
            </div>
            <div class="text">
            <h2>$1,060,386</h2>
            <span>total earnings</span>
            </div>
            </div>
            <div class="overview-chart">
            <canvas id="widgetChart4"></canvas>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
            <div class="au-card recent-report">
            <div class="au-card-inner">
            <h3 class="title-2">recent reports</h3>
            <div class="chart-info">
            <div class="chart-info__left">
            <div class="chart-note">
            <span class="dot dot--blue"></span>
            <span>products</span>
            </div>
            <div class="chart-note mr-0">
            <span class="dot dot--green"></span>
            <span>services</span>
            </div>
            </div>
            <div class="chart-info__right">
            <div class="chart-statis">
            <span class="index incre">
            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
            <span class="label">products</span>
            </div>
            <div class="chart-statis mr-0">
            <span class="index decre">
            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
            <span class="label">services</span>
            </div>
            </div>
            </div>
            <div class="recent-report__chart">
            <canvas id="recent-rep-chart"></canvas>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="au-card chart-percent-card">
            <div class="au-card-inner">
            <h3 class="title-2 tm-b-5">char by %</h3>
            <div class="row no-gutters">
            <div class="col-xl-6">
            <div class="chart-note-wrap">
            <div class="chart-note mr-0 d-block">
            <span class="dot dot--blue"></span>
            <span>products</span>
            </div>
             <div class="chart-note mr-0 d-block">
            <span class="dot dot--red"></span>
            <span>services</span>
            </div>
            </div>
            </div>
            <div class="col-xl-6">
            <div class="percent-chart">
            <canvas id="percent-chart"></canvas>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
         
            <div class="row">
            <div class="col-md-12">
            <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved.</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            
            </div>
            </div>

    <!-- Jquery JS-->
    <script src="{{asset('style/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('style/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('style/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('style/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('style/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('style/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('style/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('style/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('style/js/main.js')}}"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('style/vendor/jquery-3.2.1.min.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6949885e6e4c49d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
    
    
</body>
</html>
<!-- end document-->
