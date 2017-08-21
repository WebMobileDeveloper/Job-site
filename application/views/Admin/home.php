<style>
    .dashboard-body .profile-nav ul > li > a {
        border-left: 5px solid #bfbdbd;
        background-color: #f7f8f9;
    }
</style>
<section class="job-breadcrumb">
    <div class="row">
        <div class="col-md-3 col-sm-3 co-xs-12 text-left">
            <h3>
                <?php echo ($selected_menu != 'dashboard') ? $selected_menu : 'site info'; ?>
            </h3>
        </div>
        <div class="col-md-9 col-sm-9 co-xs-12 text-right">
            <div class="bread">
                <ol class="breadcrumb">
                    <li><a href="#">Admin</a>
                    </li>
                    <li><a href="#">Dashboard</a>
                    </li>
                    <?php if ($selected_menu != 'dashboard') { ?>
                        <li class="active"><?php echo $selected_menu; ?></li>
                    <?php } else { ?>
                        <li class="active">site info</li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-body">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php include($selected_menu . ".php"); ?>
        </div>
    </div>
</section>


