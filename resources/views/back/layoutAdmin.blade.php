<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/back/assets/images/favicon_1.ico">

        <title>@yield('title')</title>

        <!--calendar css-->
        <link href="/back/assets/plugins/footable/css/footable.core.css" rel="stylesheet">
        <link href="/back/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

        <link href="/back/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/back/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/back/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/back/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/back/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/back/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/back/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="/back/assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="/back/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="/back/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> {{\App\Http\Controllers\Fun\Auth::getName(session('user_token'))}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/logout"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="/admin" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard </span></a>
                                <a href="/admin/reg" class="waves-effect"><i class="fa fa-book"></i> <span> Registrasi </span></a>
                                <a href="/admin/pendaftaran" class="waves-effect"><i class="fa fa-newspaper-o"></i> <span> Pendaftar </span></a>
                                <a href="/admin/test" class="waves-effect"><i class="fa fa-check-square-o"></i> <span> Test Covid </span></a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            @yield('content')

            <script>
                var resizefunc = [];
            </script>

            <!-- jQuery  -->
            <script src="/back/assets/js/jquery.min.js"></script>
            <script src="/back/assets/js/bootstrap.min.js"></script>
            <script src="/back/assets/js/detect.js"></script>
            <script src="/back/assets/js/fastclick.js"></script>
            <script src="/back/assets/js/jquery.slimscroll.js"></script>
            <script src="/back/assets/js/jquery.blockUI.js"></script>
            <script src="/back/assets/js/waves.js"></script>
            <script src="/back/assets/js/wow.min.js"></script>
            <script src="/back/assets/js/jquery.nicescroll.js"></script>
            <script src="/back/assets/js/jquery.scrollTo.min.js"></script>


            <script src="/back/assets/js/jquery.core.js"></script>
            <script src="/back/assets/js/jquery.app.js"></script>

            <script src="/back/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

            <!-- BEGIN PAGE SCRIPTS -->
            <script src="/back/assets/plugins/footable/js/footable.all.min.js"></script>

            <script src="/back/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

            <!--FooTable Example-->
            <script src="/back/assets/pages/jquery.footable.js"></script>

            <script src="/back/assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>
            <script src="/back/assets/pages/jquery.bs-table.js"></script>

        </body>
    </html>
