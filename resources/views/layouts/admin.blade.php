<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('css/admin/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('css/admin/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ URL::asset('css/admin/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ URL::asset('css/admin/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::asset('css/admin/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ URL::asset('css/admin/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/admin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/admin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/admin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/admin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }} " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('css/admin/custom.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ URL::asset('admin_images/img.jpg') }}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">General Form</a></li>
                                    <li><a href="form_advanced.html">Advanced Components</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizards.html">Form Wizard</a></li>
                                    <li><a href="form_upload.html">Form Upload</a></li>
                                    <li><a href="form_buttons.html">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">General Elements</a></li>
                                    <li><a href="media_gallery.html">Media Gallery</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="glyphicons.html">Glyphicons</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">E-commerce</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project_detail.html">Project Detail</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#level1_1">Level One</a>
                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#level1_2">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        @include('admin.partials._navigation')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('dashboard')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.partials._footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ URL::asset('js/admin/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('js/admin/fastclick/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ URL::asset('js/admin/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ URL::asset('js/admin/Chart/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ URL::asset('js/admin/gauge/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ URL::asset('js/admin/gauge/gauge.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('js/admin/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ URL::asset('js/admin/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ URL::asset('js/admin/Flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('js/admin/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::asset('js/admin/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ URL::asset('js/admin/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ URL::asset('js/admin/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ URL::asset('js/admin/flot.orderbars/jquery.flot.orderBars.js') }}"></script>
<script src="{{ URL::asset('js/admin/flot-spline/jquery.flot.spline.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ URL::asset('js/admin/DateJS/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('js/admin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/jqvmap/jquery.vmap.world.js') }}"></script>
<script src="{{ URL::asset('js/admin/jqvmap/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ URL::asset('js/admin/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('js/admin/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Datatables -->
<script src="{{ URL::asset('css/admin/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ URL::asset('css/admin/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('css/admin/pdfmake/build/vfs_fonts.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ URL::asset('js/admin/custom.min.js') }}"></script>

</body>
</html>
