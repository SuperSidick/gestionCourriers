<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    
    <!-- Meta Tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1, initial-scale=1.0, maximum-scale=1">
    <meta name="author" content="WMCCI">
    <meta name="description" content="Application de gestion de courriers du Ministère de la Promotion de la Riziculture" />
    <meta name="Copyright" content="WMCCI">
    <meta name="Language" content="fr">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{asset('mdb/css/bootstrap.min.css')}}"> 
    <!-- bootstrap css -->
    <!--  <link rel="stylesheet" href="assets/mdb/css/mdb.min.css"> mdb css -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">   
    <link rel="stylesheet" href="{{asset('main/css/main.css')}}"> <!-- main css -->

    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- template--> 
    <link rel="stylesheet" href="{{asset('dist/css/style.min.css')}}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">

        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar">
            @include('user.layouts.partials.header')
        </header>
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            @include('user.layouts.partials.sidebar')
        </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            
            @include('flash::message')
            @yield('content')

        </div>
        <!-- End Page wrapper  -->

        <!-- footer -->
        <footer class="footer text-center">
            @include('user.layouts.partials.footer')
        </footer>
        <!-- End footer -->
    </div>
    <!-- End main Wrapper -->

    <!-- customizer Panel -->
    {{-- <aside class="customizer">
        @include('user.layouts.partials.customiser')
    </aside> --}}
    <!-- end customizer Panel -->

    <div class="chat-windows"></div>
    
    <!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

    <!--template-->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>
    <script src="{{asset('dist/js/app.init.js')}}"></script>
    <script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>

    <!-- JS scripts -->

    <!-- <script src="assets/mdb/js/jquery-3.3.1.min.js"></script> -->  <!-- jq -->
    <!-- <script src="assets/mdb/js/popper.min.js"></script>  popper -->
    <!-- <script src="assets/mdb/js/bootstrap.min.js"></script>  bootstrap js -->
    <!-- <script src="assets/mdb/js/mdb.min.js"></script>   mdb js -->
    <script src="{{asset('main/js/main.js')}}"></script> <!-- main js -->
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $('#flash-overlay-modal').modal();
        // $('#flash-overlay-modal').modal().delay(3000).fadeOut(350);
    </script>

</body>

</html>