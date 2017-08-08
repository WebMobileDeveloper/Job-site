<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <?php

    define('WEB_ROOT', base_url());
    define('ASSETS_ROOT', WEB_ROOT . 'assets/admin/');
    //        define('PRINT_ROOT', WEB_ROOT . 'print/');
    ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <!--<link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/morris/morris.css">-->
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?php echo ASSETS_ROOT ?>kendo/kendo.all.min.js"></script>

    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo ASSETS_ROOT ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--<script src="<?php echo ASSETS_ROOT ?>plugins/morris/morris.min.js"></script>-->
    <!-- Sparkline -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo ASSETS_ROOT ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo ASSETS_ROOT ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/datepicker/bootstrap-datepicker.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo ASSETS_ROOT ?>global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo ASSETS_ROOT ?>plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo ASSETS_ROOT ?>dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo ASSETS_ROOT ?>dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo ASSETS_ROOT ?>dist/js/demo.js"></script>

    <script src="<?php echo ASSETS_ROOT ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo ASSETS_ROOT ?>js/math.js"></script>

    <!--<link href="<?php echo ASSETS_ROOT ?>kendo/examples.css" rel="stylesheet">-->


    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>kendo/kendo.common.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>kendo/kendo.rtl.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>kendo/kendo.default.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>kendo/kendo.silver.min.css">
    <!--<link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>kendo/kendo.mobile.all.min.css">-->

    <!--<script src="<?php echo ASSETS_ROOT ?>kendo/kendoui.woff.js"></script>-->
    <!--<script src="<?php echo ASSETS_ROOT ?>kendo/jszip.min.js"></script>-->


    <!--        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
            <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>ccount</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Account</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img src="<?php echo ASSETS_ROOT ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                            <span class="hidden-xs"><?php echo $this->session->userdata('login_user_name'); ?></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="#" class="btn btn-default btn-flat"><?php echo $this->session->userdata('login_user_email'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("admin/auth/signout") ?>" class="btn btn-default btn-flat">Sign out</a>
                            </li>


                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>