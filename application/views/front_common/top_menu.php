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

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_ROOT; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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
                <li><a href="<?php echo site_url("home"); ?>"> <img src="<?php echo ASSETS_ROOT; ?>images/logo.png" alt="logo" class="img-responsive"> </a></li>
            </ul>
            <ul class="menu-links pull-right">
                <?php

                    if ($this->login_user_type == 'seller') { ?>
                        <!--job menu-->
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Jobs <i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('job/post'); ?>" class="post" type="job">Post New Job</a></li>
                                <li><a href="<?php echo site_url('job/dashboard'); ?>">Company Dashboard</a></li>
                                <li><a href="<?php echo site_url('job/dashboard/active_posts'); ?>">Acitived Jobs </a></li>
                                <li><a href="<?php echo site_url('job/dashboard/featured_posts'); ?>">Featured Jobs </a></li>
                                <li><a href="<?php echo site_url('job/dashboard/resume'); ?>">Read Resumes </a></li>
                            </ul>
                        </li>
                        <!--education menu-->
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Educations <i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('education/post'); ?>" class="post" type="education">Post New Education</a></li>
                                <li><a href="<?php echo site_url('education/dashboard'); ?>">Company Dashboard</a></li>
                                <li><a href="<?php echo site_url('education/dashboard/active_posts'); ?>">Acitived Educations </a></li>
                                <li><a href="<?php echo site_url('education/dashboard/featured_posts'); ?>">Featured Educations </a></li>
                                <li><a href="<?php echo site_url('education/dashboard/resume'); ?>">Read Resumes </a></li>
                            </ul>
                        </li>
                        <!--property menu-->
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Properties <i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('property/post'); ?>" class="post" type="property">Post New Properties</a></li>
                                <li><a href="<?php echo site_url('property/dashboard'); ?>">Company Dashboard</a></li>
                                <li><a href="<?php echo site_url('property/dashboard/active_posts'); ?>">Acitived Properties </a></li>
                                <li><a href="<?php echo site_url('property/dashboard/featured_posts'); ?>">Featured Properties </a></li>
                                <li><a href="<?php echo site_url('property/dashboard/resume'); ?>">Read Resumes </a></li>
                            </ul>
                        </li>
                        <!--account menu-->
                        <li class="profile-pic">
                            <a href="javascript:void(0)">
                                <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>.jpg" width="36"
                                     onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'" class="img-circle">
                                <span class="hidden-xs hidden-sm"><?php echo $this->login_user_name; ?> </span><i class="fa fa-angle-down fa-indicator"></i>
                            </a>
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="<?php echo site_url('home/sellerDashboard') ?>"><i class="fa fa-user"></i> Dashboard</a></li>
                                <li><a href="<?php echo site_url('home/sellerDashboard/edit'); ?>"><i class="fa fa-gear"></i> Account Setting</a></li>
                                <li><a href="<?php echo site_url("auth/signout") ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php }
                    if ($this->login_user_type == 'customer')  { ?>
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Jobs<i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('customer/job/applied_posts'); ?>">Applied Jobs </a></li>
                                <li><a href="<?php echo site_url('customer/job/featured_posts'); ?>">Featured Jobs </a></li>
                            </ul>
                        </li>
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Educations<i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('customer/education/applied_posts'); ?>">Applied Educations </a></li>
                                <li><a href="<?php echo site_url('customer/education/featured_posts'); ?>">Featured Educations </a></li>
                            </ul>
                        </li>
                        <li style="margin-right: 20px;"><a href="javascript:void(0)">My Properties<i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="<?php echo site_url('customer/property/applied_posts'); ?>">Applied Propertiess </a></li>
                                <li><a href="<?php echo site_url('customer/property/featured_posts'); ?>">Featured Properties </a></li>
                            </ul>
                        </li>
                        <li class="no-bg"><a href="<?php echo site_url('home/search_job'); ?>" class="p-job"><i class="fa fa-search"></i> Search Job</a></li>
                        <li class="profile-pic">
                            <a href="javascript:void(0)">
                                <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>.jpg" width="36"
                                     onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'" class="img-circle">
                                <span class="hidden-xs hidden-sm"><?php echo $this->login_user_name; ?> </span><i class="fa fa-angle-down fa-indicator"></i>
                            </a>
                            <ul class="drop-down-multilevel left-side">
                                <li><a href="<?php echo site_url('customer/customerDashboard') ?>"><i class="fa fa-user"></i> Dashboard</a></li>
                                <li><a href="<?php echo site_url('customer/customerDashboard/edit_profile'); ?>"><i class="fa fa-gear"></i> Account Setting</a></li>
                                <li><a href="<?php echo site_url("auth/signout"); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php }
                if (!$this->login_user_id) { ?>
                    <li class="no-bg login-btn-no-bg"><a href="<?php echo site_url('auth'); ?>" class="login-header-btn"><i class="fa fa-sign-in"></i> Log in</a></li>
                <?php } ?>
            </ul>
        </section>
    </nav>
    <div class="clearfix"></div>
    <script>

    </script>