<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    @if (\Illuminate\Support\Facades\App::getLocale() == 'en')
        <!-- Bootstrap Core CSS -->
            <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
            <!-- Footable CSS -->
            <link href="{{asset('assets/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
            <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
            <!-- Page CSS -->
            <link href="{{asset('assets/css/pages/contact-app-page.css')}}" rel="stylesheet">
            <link href="{{asset('assets/css/pages/footable-page.css')}}" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
            <!-- You can change the theme colors from here -->
            <link href="{{asset('assets/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
        @else(\Illuminate\Support\Facades\App::getLocale() == 'ar')
        <!-- Bootstrap Core CSS -->
            <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
            <!-- Footable CSS -->
            <link href="{{asset('assets/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
            <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
            <!-- Page CSS -->
            <link href="{{asset('assets/rtl/css/pages/contact-app-page.css')}}" rel="stylesheet">
            <link href="{{asset('assets/rtl/css/pages/footable-page.css')}}" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="{{asset('assets/rtl/css/style.css')}}" rel="stylesheet">
            <!-- You can change the theme colors from here -->
            <link href="{{asset('assets/rtl/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
    @endif

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>

<body
    @if (\Illuminate\Support\Facades\App::getLocale() == 'ar')
      style="direction: rtl"
    @elseif (\Illuminate\Support\Facades\App::getLocale() == 'en')
    style="direction: ltr"
      @endif
      class="fix-header card-no-border fix-sidebar">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin  dashboard</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->

                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->

                        <!-- Light Logo text -->
                         <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item hidden-sm-down"></li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                        <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                            <a class="dropdown-item" href="{{url('setlang/ar')}}"><i class="flag-icon flag-icon-kw" title="kw" id="kw"></i>Arabic</a>

                            <a class="dropdown-item" href="{{url('setlang/en')}}"><i class="flag-icon flag-icon-us"></i> English</a>

                        </div>

                    </li>

                    <!-- End Comment -->
                    <!-- ============================================================== -->

                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside     @if (\Illuminate\Support\Facades\App::getLocale() == 'ar')
               style="direction: rtl"
               @elseif (\Illuminate\Support\Facades\App::getLocale() == 'en')
               style="direction: ltr"
               @endif class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">


                    <li class="">
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="mdi mdi-bullseye"></i><span class="hide-menu">{{__('messages.resturants')}}</span></a>

                        <ul aria-expanded="false" class="collapse" style="height: 0px;">

                            <li><a href="{{route('create-resturants')}}">{{__('messages.create')}}</a></li>

                            <li><a href="{{route('resturants')}}">{{__('messages.show')}}</a></li>

                        </ul>

                    </li>



                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">{{__('messages.Resturant_Categories')}} </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('create-resturants-categories')}}">{{__('messages.create')}}</a></li>
                            <li><a href="{{route('resturants-categories')}}">{{__('messages.show')}}</a></li>
                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu"> {{__('messages.Resturant_options')}}</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('create-resturants-options')}}">{{__('messages.create')}}</a></li>
                            <li><a href="{{route('resturants-options')}}">{{__('messages.show')}}</a></li>
                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">    {{__('messages.Resturant_types')}} </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('create-resturants-types')}}">{{__('messages.create')}}</a></li>
                            <li><a href="{{route('resturants-types')}}">{{__('messages.show')}}</a></li>
                        </ul>
                    </li>


                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->


    </div>


</div>
@yield('content')
@if (\Illuminate\Support\Facades\App::getLocale() == 'en')
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!-- Footable -->
    <script src="{{asset('assets/plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{asset('assets/js/footable-init.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@else(\Illuminate\Support\Facades\App::getLocale() == 'ar')
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/rtl/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/rtl/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/rtl/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/rtl/js/custom.min.js')}}"></script>
    <!-- Footable -->
    <script src="{{asset('assets/plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{asset('assets/rtl/js/footable-init.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @endif


@yield('scripts')
</body>

</html>
