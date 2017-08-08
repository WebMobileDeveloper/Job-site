<?php if ($selected_menu == 'Dashboard') { ?>
    <section class="dashboard parallex">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="dashboard-header">
                        <div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-2 col-sm-offset-1">
                            <div class="user-avatar ">
                                <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>.jpg" alt="Image"
                                     onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'" class="img-responsive center-block">
                                <h3><?php echo $client_info->firstName; ?>&nbsp;<?php echo $client_info->lastName; ?></h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="rad-info-box rad-txt-success">
                                <i class="icon icon-presentation"></i>
                                <span class="title-dashboard">Followings</span>
                                <span class="value"><span>250K</span></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="rad-info-box rad-txt-success">
                                <i class="icon icon-aperture"></i>
                                <span class="title-dashboard">Jobs Applied</span>
                                <span class="value"><span>200</span></span>
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

                        <div class="profile-card">
                            <div class="user-image">
                                <img class="img-responsive img-circle" src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>.jpg" alt="Image"
                                     onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'">
                            </div>
                            <div class="card-body">
                                <h3> <?php echo $client_info->firstName."  ".$client_info->lastName;?></h3>
                                <span class="title"><?php echo $client_info->company_name; ?></span>

                            </div>
                        </div>

                    <div class="profile-nav">
                        <div class="panel">
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php echo ($selected_menu == 'Dashboard') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('customer/customerDashboard'); ?>"> <i class="fa fa-user"></i> Dashboard</a>
                                </li>
                                <li <?php echo ($selected_menu == 'Edit Profile') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('customer/customerDashboard/edit_profile'); ?>"> <i class="fa fa-edit"></i> Edit Profile</a>
                                </li>
                                <li <?php echo ($selected_menu == 'My Resumes') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('customer/customerDashboard/applied_posts'); ?>"> <i class="fa  fa-list-ul"></i> My Resumes</a>
                                </li>
                                <!--
                                <li <?php /*echo ($selected_menu == 'featured_posts') ? "class='active'" : ""; */?>>
                                    <a href="<?php /*echo site_url('customer/customerDashboard/featured_posts'); */?>"> <i class="fa  fa-list-alt"></i> Featured Jobs</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include("rightUser" . $selected_menu . ".php"); ?>
            </div>
        </div>
    </div>
</section>


