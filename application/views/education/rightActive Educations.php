<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
?>

<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Active Educations</p>
    </div>
    <div class="all-jobs-list-box2">
        <?php foreach ($active_posts as $row) { ?>
            <div class="job-box job-box-2">
                <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                    <div class="comp-logo">
                        <a href=""><img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id ?>_education.jpg" alt="Image"
                                        onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company-logo/default.png'" class="img-responsive center-block"> </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="job-title-box">
                        <a href="<?php echo site_url('education/post/post_detail/'.$row->post_id.'/'.$row->user_id); ?>">
                            <div class="job-title"> <?php echo $row->title; ?></div>
                        </a>
                        <span class="job-type <?php echo $typeColor[$row->type]; ?>">
                        <i class="fa fa-clock-o"></i> <?php echo $this->job_types[$row->type]; ?>
                    </span>
                        <span><span class="comp-name"><?php echo $row->company_name; ?>&emsp;<?php echo $row->city; ?>&emsp;<?php echo $this->countries[$row->country]; ?></span></span>

                    </div>
                    <div>
                        <?php echo substr($row->description, 0, 250); ?>
                        <?php if (strlen($row->description) > 250) echo "......." ?>
                    </div>
                </div>
                <div class="job-salary">
                    <i class="fa fa-money"></i> $&nbsp;<?php echo $row->price; ?>
                </div>
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
                        <a href="<?php echo site_url('education/dashboard/active_posts/'.$before); ?>" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
                    </li>
                    <?php
                    for ($i = $start; $i <= $end; $i++) {
                        ?>
                        <li <?php echo ($i == $page) ? "class='active'" : ""; ?>><a href="<?php echo site_url('education/dashboard/active_posts/'.$i); ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo site_url('education/dashboard/active_posts/'.$next); ?>" aria-label="Next"> <span aria-hidden="true">»</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
                    