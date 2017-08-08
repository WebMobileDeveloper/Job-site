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
                        <?php if ($selected_menu != 'Dashboard') { ?>
                            <li class="active"><?php echo $selected_menu; ?></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-body" style="padding-top:130px;">
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
                            <h3> <?php echo $client_info->fullname; ?></h3>
                        </div>
                    </div>

                    <div class="profile-nav">
                        <div class="panel">
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php echo ($selected_menu == 'Dashboard') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('home/sellerDashboard'); ?>"> <i class="fa fa-user"></i> Account Info</a>
                                </li>
                                <li <?php echo ($selected_menu == 'Edit Profile') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('home/sellerDashboard/edit'); ?>"> <i class="fa fa-edit"></i> Account Setting</a>
                                </li>
                                <!--<li < ?php /*echo ($selected_menu == 'Resume') ? "class='active'" : ""; */?>>
                                    <a href="< ?php /*echo site_url('home/sellerDashboard/resume'); */?>"> <i class="fa fa-file-o"></i>Resume </a>
                                </li>
                                <li < ?php /*echo ($selected_menu == 'active_posts') ? "class='active'" : ""; */?>>
                                    <a href="< ?php /*echo site_url('home/sellerDashboard/actived'); */?>"> <i class="fa  fa-list-ul"></i> Active Jobs</a>
                                </li>
                                <li < ?php /*echo ($selected_menu == 'featured_posts') ? "class='active'" : ""; */?>>
                                    <a href="< ?php /*echo site_url('home/sellerDashboard/featured'); */?>"> <i class="fa  fa-list-alt"></i> Featured Jobs</a>
                                </li>-->
                                <!--<li < ?php /*echo ($selected_menu == 'followers') ? "class='active'" : ""; */ ?>>
                                    <a href="< ?php /*echo site_url('job/dashboard/followers'); */ ?>"> <i class="fa  fa-bookmark-o"></i> Followers </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include("sellerRight" . $selected_menu . ".php"); ?>
            </div>
        </div>
    </div>
</section>


