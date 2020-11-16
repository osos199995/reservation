<!DOCTYPE html>
<html dir="">
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
@else
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="{{asset('assets/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- Page CSS -->
    <link href="{{asset('assets/css/pages/contact-app-page.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/pages/footable-page.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/rtl/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
@endif

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield('styles')
</head>
<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Pro</p>
    </div>
</div>


@yield('content')


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/custom.min.js')}}"></script>

<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/plugins/d3/d3.min.js')}}"></script>

<script src="{{asset('assets/plugins/c3-master/c3.min.js')}}"></script>

<script src="{{asset('assets/js/dashboard3.js')}}"></script>

<script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
<script src="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<!-- This is data table -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script src="{{asset('assets/plugins/sidebar-nav/dist/sidebar-nav.min.js')}}" type="text/javascript"></script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@yield('scripts')
</body>
</html>
