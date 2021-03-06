

<?php if ($selected_menu == 'Dashboard') { ?>
    <section class="company-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="dashboard-header">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="dashboard-header-logo-box">
                                <div class="company-logo">
                                    <img  src="<?php echo ASSETS_ROOT; ?>profile image/client/profile_image/<?php echo $this->login_user_id?>_property.jpg" alt="Image"
                                         onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company/default_profile.png'" class="img-responsive center-block">
                                </div>
                                <h3><?php echo $client_info->company_name; ?></h3>
                                <p><?php echo $client_info->address; ?>  <?php echo $client_info->city; ?>   Malaysia</p>
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
                                <span class="title-dashboard">propertys Posted</span>
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
                            <li><a href="#">property</a></li>
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
                            <img class="img-responsive center-block" src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id?>_property.jpg" alt="Image"
                                 onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company-logo/default.png'">
                        </div>
                        <div class="text-center dashboard-logo-sidebar-title">
                            <h4><?php echo $client_info->company_name; ?></h4>
                        </div>
                    </div>

                </div>
                <?php  include("right".$selected_menu.".php"); ?>
            </div>
        </div>
    </div>
</section>


