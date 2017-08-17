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
                <?php include("sellerRight" . $selected_menu . ".php"); ?>
            </div>
        </div>
    </div>
</section>


