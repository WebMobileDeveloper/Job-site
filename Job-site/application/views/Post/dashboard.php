

<?php if ($selected_menu == 'Dashboard') { ?>
    <section class="company-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="dashboard-header">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="dashboard-header-logo-box">
                                <div class="company-logo">
                                    <img src="images/company/s1.png" alt="" class="img-responsive center-block "></a>
                                </div>
                                <h3>Confidential Agency Pvt. Ltd</h3>
                                <p>2nd Downtown street, hellon city, vatnaam</p>
                                <ul class="social-links list-inline">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-googleplus"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="rad-info-box">
                                <i class="icon icon-profile-male"></i>
                                <span class="title-dashboard">Followers</span>
                                <span class="value"><span>450M</span></span>
                            </div>
                            <div class="rad-info-box">
                                <i class="icon icon-presentation"></i>
                                <span class="title-dashboard">Jobs Posted</span>
                                <span class="value"><span>2500</span></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="rad-info-box">
                                <i class="icon icon-documents"></i>
                                <span class="title-dashboard">New resume</span>
                                <span class="value"><span>200</span></span>
                            </div>
                            <div class="rad-info-box rad-txt-success">
                                <i class="icon icon-briefcase"></i>
                                <span class="title-dashboard">Hired</span>
                                <span class="value"><span>6500</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="job-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li class="active"><?php echo $selected_menu; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="dashboard-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="panel">
                        <div class="dashboard-logo-sidebar">
                            <img class="img-responsive center-block" src="<?php echo ASSETS_ROOT; ?>images/company/logo1.jpg" alt="Image">
                        </div>
                        <div class="text-center dashboard-logo-sidebar-title">
                            <h4>Your Company Agency Pvt. Ltd</h4>
                        </div>
                    </div>
                    <div class="profile-nav">
                        <div class="panel">
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php echo ($selected_menu == 'dashboard') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('Job/Dashboard'); ?>"> <i class="fa fa-user"></i> Dashboard</a>
                                </li>
                                <li <?php echo ($selected_menu == 'Edit Profile') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('Job/Dashboard/edit_profile'); ?>"> <i class="fa fa-edit"></i> Edit Profile</a>
                                </li>
                                <li <?php echo ($selected_menu == 'Resume') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('Job/Dashboard/resume'); ?>"> <i class="fa fa-file-o"></i>Resume </a>
                                </li>
                                <li <?php echo ($selected_menu == 'active_jobs') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('Job/Dashboard/active_jobs'); ?>"> <i class="fa  fa-list-ul"></i> Active Jobs</a>
                                </li>
                                <li <?php echo ($selected_menu == 'featured_jobs') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('Job/Dashboard/featured_jobs'); ?>"> <i class="fa  fa-list-alt"></i> Featured Jobs</a>
                                </li>
                                <!--<li <?php /*echo ($selected_menu == 'followers') ? "class='active'" : ""; */?>>
                                    <a href="<?php /*echo site_url('Job/Dashboard/followers'); */?>"> <i class="fa  fa-bookmark-o"></i> Followers </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="job-short-detail">
                        <div class="heading-inner">
                            <p class="title">Profile detail</p>
                        </div>
                        <dl>
                            <dt>Industry:</dt>
                            <dd> Designing</dd>

                            <dt>Type of Business:</dt>
                            <dd> Single Proprietorship</dd>

                            <dt>Established In:</dt>
                            <dd> 15 Feb,2015</dd>

                            <dt>Phone:</dt>
                            <dd>+99 333 1234567</dd>

                            <dt>Email:</dt>
                            <dd>martine-aug234@domain.com</dd>

                            <dt>No. of Employees:</dt>
                            <dd>55</dd>

                            <dt>Address:</dt>
                            <dd>234 Uptown new City Tower</dd>

                            <dt>City:</dt>
                            <dd>Islamabad, Rawalindi</dd>

                            <dt>Provience:</dt>
                            <dd>North Vega</dd>

                            <dt>Country:</dt>
                            <dd>Somewere at Antarctica</dd>
                        </dl>
                    </div>
                    <div class="heading-inner">
                        <p class="title">Some Line About Our Company</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet. </p>
                </div>
            </div>
        </div>
    </div>
</section>
