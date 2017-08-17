<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>sky mediae</title>
    <link rel="icon" href="<?php echo ASSETS_ROOT; ?>images/favicon.ico" type="image/x-icon">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/bootstrap.min.css">

    <!-- JQUERY SELECT -->
    <link href="<?php echo ASSETS_ROOT; ?>css/select2.min.css" rel="stylesheet"/>

    <!-- JQUERY MENU -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/mega_menu.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/animate.min.css">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/owl.style.css">

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/admin.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_ROOT; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="<?php echo ASSETS_ROOT;?>css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_ROOT;?>css/font2.css" rel="stylesheet" type="text/css">

    <!-- DATE PICKER CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery-3.1.1.min.js"></script>

    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery.validate.min.js"></script>
    <!-- JavaScripts -->
    <script src="<?php echo ASSETS_ROOT; ?>js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo ASSETS_ROOT;?>js/html5shiv.min.js"></script>
    <script src="<?php echo ASSETS_ROOT;?>js/respond.min.js"></script>
    <![endif]-->

    <!--data table-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


    <script src="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
    <link href="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.css"  rel="stylesheet" type="text/css">
    <script src="//bartaz.github.io/sandbox.js/jquery.highlight.js"></script>




</head>
<body>

<div class="page">
    <div id="spinner">
        <div class="spinner-img"><img alt="Opportunities Preloader" src="<?php echo ASSETS_ROOT; ?>images/loader.gif"/>
            <h2>Please Wait.....</h2>
        </div>
    </div>
    <nav id="menu-1" class="mega-menu fa-change-black">
        <section class="menu-list-items container">
            <ul class="menu-logo">
                <li><a href="<?php echo site_url("admin"); ?>"> <img src="<?php echo ASSETS_ROOT; ?>images/logo.png" alt="logo" class="img-responsive"> </a></li>
            </ul>
            <ul class="menu-links pull-right">
                <li ><a href="javascript:void(0)">Dashboard<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel">
                        <li><a href="<?php echo site_url('admin'); ?>">Site Info</a></li>
                        <li><a href="<?php echo site_url('admin/home/edit'); ?>">admin setting</a></li>
                    </ul>
                </li>
                <li ><a href="javascript:void(0)">Users<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel">
                        <li><a href="<?php echo site_url('admin/home/sellers'); ?>">Sellers</a></li>
                        <li><a href="<?php echo site_url('admin/home/customers'); ?>">Customers</a></li>
                    </ul>
                </li>
                <li ><a href="javascript:void(0)">Posts<i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel">
                        <li><a href="<?php echo site_url('admin/home/allPosts'); ?>">all posts</a></li>
                        <li><a href="<?php echo site_url('admin/home/featuredPosts'); ?>">featured posts</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('admin/home/payment'); ?>">Payment</a></li>
                <li class="no-bg login-btn-no-bg"><a href="<?php echo site_url('admin/auth/signout'); ?>" class="login-header-btn"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
        </section>
    </nav>
    <div class="clearfix"></div>
    <script>

    </script>