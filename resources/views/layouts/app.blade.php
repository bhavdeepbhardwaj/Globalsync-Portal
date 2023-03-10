<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="GLOBALSYNC PORTAL">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png ') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico ') }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.css ') }}">
    <!-- {{-- <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css ') }}"> --}} -->
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.css ') }}">
    <!-- {{-- <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css ') }}"> --}} -->
    <link rel="stylesheet" href="{{ asset('assets/css/site.css ') }}">
    <!-- {{-- <link rel="stylesheet" href="{{ asset('assets/css/site.min.css ') }}"> --}} -->

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/waves/waves.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/formvalidation/formValidation.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/forms/validation.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/jquery-wizard/jquery-wizard.css ') }}">

    <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/tables/datatable.css ') }}">




    <link rel="stylesheet" href="{{ asset('global/vendor/chartist/chartist.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/jvectormap/jquery-jvectormap.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/dashboard/v1.css ') }}">

    <link rel="stylesheet" href="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/dropify/dropify.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/pages/profile.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/toastr/toastr.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/advanced/toastr.css ') }}">

    <link rel="stylesheet" href="{{ asset('global/vendor/jsgrid/jsgrid.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/tables/jsgrid.css ') }}">


    <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-table/bootstrap-table.css ') }}">

    {{-- sweetalert css --}}
    <link rel="stylesheet" href="{{ asset('global/vendor/bootstrap-sweetalert/sweetalert.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/toastr/toastr.css ') }}">
    {{-- sweetalert css --}}



    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('global/fonts/material-design/material-design.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/web-icons/web-icons.min.css ') }}">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    {{--  --}}
    @yield('css')


    <!--[if lt IE 9]>
      {{-- <script src="{{ asset('global/vendor/html5shiv/html5shiv.min.js ') }}"></script> --}}
      <![endif]-->
    <!--[if lt IE 10]>
      {{-- <script src="{{ asset('global/vendor/media-match/media.match.min.js ') }}"></script> --}}
      {{-- <script src="{{ asset('global/vendor/respond/respond.min.js ') }}"></script> --}}
      <![endif]-->
    <!-- Scripts -->
    <script src="{{ asset('global/vendor/breakpoints/breakpoints.js ') }}"></script>
    <script>
        Breakpoints();
    </script>
</head>

{{-- <body class="animsition page-profile"> --}}
{{-- <body class="animsition dashboard"> --}}

<body class="animsition page-profile">

    {{--  Navbar  --}}
    @include('layouts.component.navbar')
    {{--  Navbar  --}}

    {{--  Sidebar  --}}
    @include('layouts.component.sidebar')
    {{--  Sidebar  --}}

    <!-- Page Main-->
    @yield('content')
    <!-- End Page -->

    <!-- Footer -->
    @include('layouts.component.footer')
    <!-- Footer -->

    <!-- Core  -->
    <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js ') }}"></script>
    <script src="{{ asset('global/vendor/jquery/jquery.js ') }}"></script>
    <script src="{{ asset('global/vendor/popper-js/umd/popper.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap/bootstrap.js ') }}"></script>
    <script src="{{ asset('global/vendor/animsition/animsition.js ') }}"></script>
    <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.js ') }}"></script>
    <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.js ') }}"></script>
    <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js ') }}"></script>
    <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js ') }}"></script>
    <script src="{{ asset('global/vendor/waves/waves.js ') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('global/vendor/switchery/switchery.js ') }}"></script>
    <script src="{{ asset('global/vendor/intro-js/intro.js ') }}"></script>
    <script src="{{ asset('global/vendor/screenfull/screenfull.js ') }}"></script>
    <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js ') }}"></script>
    <script src="{{ asset('global/vendor/formvalidation/formValidation.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/formvalidation/framework/bootstrap4.min.js ') }}"></script>
    {{-- <script src="{{ asset('global/vendor/chartist/chartist.min.js ') }}"></script> --}}
    {{-- <script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js ') }}"></script> --}}
    <script src="{{ asset('global/vendor/jvectormap/jquery-jvectormap.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js ') }}"></script>
    <script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-min.js ') }}"></script>
    <script src="{{ asset('global/vendor/peity/jquery.peity.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net/jquery.dataTables.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-scroller/dataTables.scroller.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-responsive/dataTables.responsive.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons/dataTables.buttons.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.html5.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.flash.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.print.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons/buttons.colVis.js ') }}"></script>
    <script src="{{ asset('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js ') }}"></script>
    <script src="{{ asset('global/vendor/asrange/jquery-asRange.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/bootbox/bootbox.js ') }}"></script>
    <script src="{{ asset('global/vendor/jquery-ui/jquery-ui.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-tmpl/tmpl.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-load-image/load-image.all.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-process.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-image.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-audio.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-video.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-validate.js ') }}"></script>
    <script src="{{ asset('global/vendor/blueimp-file-upload/jquery.fileupload-ui.js ') }}"></script>
    <script src="{{ asset('global/vendor/dropify/dropify.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/formatter/jquery.formatter.js ') }}"></script>
    <script src="{{ asset('global/vendor/jsgrid/jsgrid.js ') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.js ') }}"></script>

    <script src="{{ asset('global/vendor/bootstrap-table/bootstrap-table.min.js ') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js ') }}"></script>




    <!-- Scripts -->
    <script src="{{ asset('global/js/Component.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin.js ') }}"></script>
    <script src="{{ asset('global/js/Base.js ') }}"></script>
    <script src="{{ asset('global/js/Config.js ') }}"></script>
    <script src="{{ asset('assets/js/Section/Menubar.js ') }}"></script>
    <script src="{{ asset('assets/js/Section/GridMenu.js ') }}"></script>
    <script src="{{ asset('assets/js/Section/Sidebar.js ') }}"></script>
    <script src="{{ asset('assets/js/Section/PageAside.js ') }}"></script>
    <script src="{{ asset('assets/js/Plugin/menu.js ') }}"></script>
    <script src="{{ asset('global/js/config/colors.js ') }}"></script>
    <script src="{{ asset('assets/js/config/tour.js ') }}"></script>
    <script>
        Config.set('assets', '../assets');
    </script>

    <!-- Page -->
    {{-- sweetalert JS --}}
    <script src="{{ asset('global/js/Plugin/bootbox.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/bootstrap-sweetalert.js ') }}"></script>
    {{-- <script src="{{ asset('assets/examples/js/advanced/bootbox-sweetalert.js ') }}"></script> --}}
    <script src="{{ asset('global/vendor/bootbox/bootbox.js ') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap-sweetalert/sweetalert.js ') }}"></script>
    {{-- sweetalert JS --}}

    {{-- toastr JS --}}
    <script src="{{ asset('global/js/Plugin/toastr.js ') }}"></script>
    <script src="{{ asset('global/vendor/toastr/toastr.js ') }}"></script>
    {{-- toastr JS --}}


    <script src="{{ asset('global/js/Plugin/jquery-placeholder.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/input-group-file.js ') }}"></script>
    <script src="{{ asset('assets/js/Site.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/asscrollable.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/slidepanel.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/switchery.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/matchheight.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/jvectormap.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/peity.js ') }}"></script>
    {{-- <script src="{{ asset('assets/examples/js/dashboard/v1.js ') }}"></script> --}}
    <script src="{{ asset('assets/examples/js/forms/validation.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/datatables.js ') }}"></script>
    <script src="{{ asset('assets/examples/js/tables/datatable.js ') }}"></script>
    <script src="{{ asset('assets/examples/js/uikit/icon.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/tabs.js ') }}"></script>
    <script src="{{ asset('global/js/Plugin/dropify.js ') }}"></script>

    <script src="{{ asset('assets/examples/js/forms/uploads.js ') }}"></script>
    {{-- <script src="{{ asset('global/js/Plugin/formatter.js ') }}"></script> --}}
    <script src="{{ asset('global/js/Plugin/jquery-wizard.js ') }}"></script>

    {{-- <script src="{{ asset('assets/examples/js/forms/wizard.js ') }}"></script> --}}
    <script src="{{ asset('global/js/Plugin/responsive-tabs.js ') }}"></script>







    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>



    {{-- Custom js --}}
    @yield('js')
    @if (Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if (Session::has('message'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    </script>
@endif

@if (Session::has('error'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    </script>
@endif

@if (Session::has('info'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    </script>
@endif

@if (Session::has('warning'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    </script>
@endif
</body>

</html>