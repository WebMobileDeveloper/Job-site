<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
?>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Your Featured Jobs</p>
    </div>
    <div class="all-jobs-list-box2">
        <?php foreach ($featured_posts as $row) { ?>
            <div class="job-box job-box-2 expire-box ribbon-content">
                <div class="job-title-box">
                    <a href="#">
                        <div class="job-title"> <?php echo $row->title; ?></div>
                    </a>
                    <a href="#"><span class="comp-name"><?php echo $row->company_name; ?>&emsp;<?php echo $row->city; ?>&emsp;<?php echo $this->countries[$row->country]; ?> </span></a>
                    <a href="" class="job-type <?php echo $typeColor[$row->type]; ?>">
                        <i class="fa fa-clock-o"></i> <?php echo $this->job_types[$row->type]; ?>
                    </a>
                </div>
                <div class="expire-job-box">
                    <span class="expire-date"> This job will Expire on <strong><?php echo substr($row->expire_date,0,10); ?></strong></span>
                </div>
                <div class="ribbon base"><span class="feature"> <i class="icon-trophy"></i>  Featured</span></div>
            </div>
        <?php } ?>
    </div>


    <?php if ($total_count > 0) { ?>
        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
            <div class="pagination-box clearfix">
                <?php
                $pages = ceil($total_count / $per_page);
                $start = floor(($page-1) / 5) + 1;
                $end = floor(($page-1) / 5) + 5;
                $end = ($end > $pages) ? $pages : $end;
                $before = ($start > 5) ? $start - 1 : 1;
                $next = ($end < $pages) ? $end + 1 : $pages;
                ?>
                <ul class="pagination">
                    <li>
                        <a href="<?php echo site_url('customer/customerDashboard/featured_posts/' . $before); ?>" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
                    </li>
                    <?php
                    for ($i = $start; $i <= $end; $i++) {
                        ?>
                        <li <?php echo ($i == $page) ? "class='active'" : ""; ?>><a href="<?php echo site_url('customer/customerDashboard/featured_posts/' . $i); ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo site_url('customer/customerDashboard/featured_posts/' . $next); ?>" aria-label="Next"> <span aria-hidden="true">»</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>

</div>
                    