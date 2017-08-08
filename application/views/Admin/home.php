<style>
    .dashboard-body .profile-nav ul > li > a {
        border-left: 5px solid #bfbdbd;
        background-color: #f7f8f9;
    }
</style>
<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3>Admin Dashboard</h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Admin</a>
                        </li>
                        <li><a href="#">Dashboard</a>
                        </li>
                        <?php if ($menu != 'dashboard') { ?>
                            <li class="active"><?php echo $menu; ?></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-body" style="padding-top:130px; ">
    <div class="container" style="min-height: 500px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="profile-nav">
                        <div class="panel">
                            <ul class="nav nav-pills nav-stacked">
                                <li <?php echo ($menu == 'dashboard') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin'); ?>"> <i class="fa fa-user"></i> Dashboard</a>
                                </li>
                                <li <?php echo ($menu == 'edit') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin/home/edit'); ?>"> <i class="fa fa-edit"></i> Account Setting</a>
                                </li>
                                <li <?php echo ($menu == 'sellers') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin/home/sellers'); ?>"> <i class="fa fa-file-o"></i> Sellers</a>
                                </li>
                                <li <?php echo ($menu == 'customers') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin/home/customers'); ?>"> <i class="fa fa-file-o"></i> Customers </a>
                                </li>
                                <li <?php echo ($menu == 'allPosts') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin/home/allPosts'); ?>"> <i class="fa  fa-list-ul"></i> All Posts</a>
                                </li>
                                <li <?php echo ($menu == 'featuredPosts') ? "class='active'" : ""; ?>>
                                    <a href="<?php echo site_url('admin/home/featuredPosts'); ?>"> <i class="fa  fa-list-alt"></i> Featured Posts</a>
                                </li>
                                <!--<li <?php /*echo ($menu == 'followers') ? "class='active'" : ""; */ ?>>
                                    <a href="<?php /*echo site_url('job/dashboard/followers'); */ ?>"> <i class="fa  fa-bookmark-o"></i> Followers </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include($menu . ".php"); ?>
            </div>
        </div>
    </div>
</section>


