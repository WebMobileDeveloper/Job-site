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

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_ROOT; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="<?php echo ASSETS_ROOT;?>css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_ROOT;?>css/font2.css" rel="stylesheet" type="text/css">

    <!-- DATE PICKER CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/sidebar-menu.css">

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
</head>
<script>
    var top_menu="<?php echo $top_menu;?>";
    var sub_menu="<?php echo $selected_menu;?>";

</script>
<body>
<div class="page">
    <div id="spinner">
        <div class="spinner-img"><img alt="Opportunities Preloader" src="<?php echo ASSETS_ROOT; ?>images/loader.gif"/>
            <h2>Please Wait.....</h2>
        </div>
    </div>
    <nav class="navbar navbar-default no-margin">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" id="menu-toggle">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
            </button>
            <a href="<?php echo site_url("sellerhome"); ?>"> <img src="<?php echo ASSETS_ROOT; ?>images/logo.png" alt="logo" class="img-responsive"> </a>
        </div>
        <!-- navbar-header-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-left">
                <li class="active">
                    <button class="navbar-toggle collapse in " data-toggle="collapse" id="menu-toggle-2"><span class=" fa fa-bars" aria-hidden="true"></span></button>
                </li>
            </ul>
            <a href="<?php echo site_url("auth/signout"); ?>" class="btn login-header-btn pull-right"><i class="fa fa-power-off"></i> Logout</a>
        </div>
        <!-- bs-example-navbar-collapse-1 -->
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <div class="profile-card">
                    <div class="user-image">
                        <img class="img-responsive img-circle" src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>.jpg" alt="Image"
                             onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'">
                    </div>
                    <div class="card-body">
                        <h3> <?php echo $client_info->fullname; ?></h3>
                    </div>
                </div>
                <li top-menu="Dashboard">
                    <a href=""><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> <label>Dashboard</label></a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li sub-menu="Dashboard"><a href="<?php echo site_url('sellerhome/sellerDashboard') ?>"><i class="fa fa-user"></i> Account Info</a></li>
                        <li sub-menu="Edit Profile"><a href="<?php echo site_url('sellerhome/sellerDashboard/edit'); ?>"><i class="fa fa-gear"></i> Account Setting</a></li>
                    </ul>
                </li>
                <li top-menu="Jobs">
                    <a href=""><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span> <label>Jobs</label></a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li sub-menu="Post"><a href="<?php echo site_url('job/post'); ?>"><i class="fa fa-envelope"></i> Post a New Job</a></li>
                        <li sub-menu="Dashboard"><a href="<?php echo site_url('job/dashboard'); ?>"><i class="fa fa-gear"></i> Company Info</a></li>
                        <li sub-menu="Edit Profile"><a href="<?php echo site_url('job/dashboard/edit_profile'); ?>"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li sub-menu="Active Jobs"><a href="<?php echo site_url('job/dashboard/active_posts'); ?>"><i class="fa fa-bookmark-o"></i> Acitived Jobs</a></li>
                        <li sub-menu="Featured Jobs"><a href="<?php echo site_url('job/dashboard/featured_posts'); ?>"><i class="fa fa-star"></i> Featured Jobs</a></li>
                        <li sub-menu="Resume"><a href="<?php echo site_url('job/dashboard/resume'); ?>"><i class="fa fa-eye"></i> Read Resumes</a></li>
                    </ul>
                </li>
                <li top-menu="Educations">
                    <a href=""><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span> <label>Educations</label></a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li sub-menu="Post"><a href="<?php echo site_url('education/post'); ?>"><i class="fa fa-envelope"></i> Post a New Education</a></li>
                        <li sub-menu="Dashboard"><a href="<?php echo site_url('education/dashboard'); ?>"><i class="fa fa-gear"></i> Company Info</a></li>
                        <li sub-menu="Edit Profile"><a href="<?php echo site_url('education/dashboard/edit_profile'); ?>"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li sub-menu="Active Educations"><a href="<?php echo site_url('education/dashboard/active_posts'); ?>"><i class="fa fa-bookmark-o"></i> Acitived Educations</a></li>
                        <li sub-menu="Featured Educations"><a href="<?php echo site_url('education/dashboard/featured_posts'); ?>"><i class="fa fa-star"></i> Featured Educations</a></li>
                        <li sub-menu="Resume"><a href="<?php echo site_url('education/dashboard/resume'); ?>"><i class="fa fa-eye"></i> Read Resumes</a></li>
                    </ul>
                </li>
                <li top-menu="Properties">
                    <a href=""><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span> <label>Properties</label></a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li sub-menu="Post"><a href="<?php echo site_url('property/post'); ?>"><i class="fa fa-envelope"></i> Post a New Property</a></li>
                        <li sub-menu="Dashboard"><a href="<?php echo site_url('property/dashboard'); ?>"><i class="fa fa-gear"></i> Company Info</a></li>
                        <li sub-menu="Edit Profile"><a href="<?php echo site_url('property/dashboard/edit_profile'); ?>"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li sub-menu="Active Properties"><a href="<?php echo site_url('property/dashboard/active_posts'); ?>"><i class="fa fa-bookmark-o"></i> Acitived Properties</a></li>
                        <li sub-menu="Featured Properties"><a href="<?php echo site_url('property/dashboard/featured_posts'); ?>"><i class="fa fa-star"></i> Featured Properties</a></li>
                        <li sub-menu="Resume"><a href="<?php echo site_url('property/dashboard/resume'); ?>"><i class="fa fa-eye"></i> Read Resumes</a></li>
                    </ul>
                </li>
                <!--
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Shortcut</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                        <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
                </li>
                <li>
                    <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
                </li>-->
            </ul>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12">
