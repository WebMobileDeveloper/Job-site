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
                <h3>
                    <?php echo  ($menu != 'dashboard')?$menu:'site info';  ?>
                </h3>
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
                        <?php }else{ ?>
                            <li class="active">site info</li>
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
                <?php include($menu . ".php"); ?>
            </div>
        </div>
    </div>
</section>


