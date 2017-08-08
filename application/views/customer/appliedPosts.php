<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
?>

<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding">
                <h3>Your Applied <?php echo $Ctype; ?>s</h3>
            </div>
        </div>
    </div>
</section>

<section class="categories-list-page light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <h4 class="search-result-text">Showing <?php echo count($result); ?> of <?php echo $total_count; ?> available <?php echo $Ctype; ?>(s)</h4>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="all-jobs-list-box">
                        <?php
                        foreach ($result as $row) { ?>
                            <div class="job-box">
                                <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                    <div class="comp-logo">
                                        <a href="">
                                            <img class="img-responsive post-logo" src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $row->user_id; ?>_<?php echo $type; ?>.jpg" alt="Image"
                                                 onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company-logo/default.png'">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="job-title-box">
                                        <a href="<?php echo site_url('customer/'.$type.'/user_post_detail/' . $row->post_id . '/' . $row->user_id . "/" . $this->login_user_id);?>">
                                            <div class="job-title"> <?php echo $row->title; ?></div>
                                        </a>
                                        <a href="#"><span class="comp-name"><?php echo $row->company_name; ?><?php echo $row->city; ?><?php echo $this->countries[$row->country]; ?></span></a>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <a href="#">
                                        <div class="job-type <?php echo $typeColor[$row->type]; ?>">
                                            <i class="fa fa-clock-o"></i> <?php echo $this->job_types[$row->type]; ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12 nopadding">
                                    <?php
                                    switch ($row->hired) {
                                        case -1://unapplied    ?>
                                            <a class="btn btn-default show-modal" post_id="<?php echo $row->post_id; ?>" client_id="<?php echo $row->user_id; ?>">Apply Now</a>
                                    <?php break;
                                        case 0: //applied    ?>
                                            <a class="btn fa fa-check" style="color:#07a50a; font-size: 20px;" aria-hidden="true">&nbsp;Applied</a>
                                    <?php break;
                                        case 1: //hired    ?>
                                            <a class="btn fa fa-thumbs-up" style="color:#0926a5; font-size: 20px;" aria-hidden="true">&nbsp;Hired</a>
                                    <?php break;
                                        case 2:   // declined
                                            ?>
                                            <a class="btn fa fa-thumbs-down" style="color:#a51d09; font-size: 20px;" aria-hidden="true">&nbsp;Declined</a>
                                            <?php break;
                                    } ?>
                                </div>
                                <div class="col-md-10 com-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-2">
                                    <?php echo substr($row->description, 0, 100); ?>...
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <?php if ($total_count > 0) { ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="pagination-box clearfix">
                                <?php $pages = ceil($total_count / $per_page);
                                $start = floor(($page - 1) / 5) + 1;
                                $end = floor(($page - 1) / 5) + 5;
                                $end = ($end > $pages) ? $pages : $end;
                                $before = ($start > 5) ? $start - 1 : 1;
                                $next = ($end < $pages) ? $end + 1 : $pages;
                                ?>


                                <ul class="pagination">
                                    <li>
                                        <a href="<?php echo site_url('customer/'.$type.'/applied_posts/' . $before); ?>" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
                                    </li>
                                    <?php
                                    for ($i = $start; $i <= $end; $i++) {
                                        ?>
                                        <li <?php echo ($i == $page) ? "class='active'" : ""; ?>><a href="<?php echo site_url('customer/'.$type.'/applied_posts/' . $i); ?>"><?php echo $i; ?></a></li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo site_url('customer/'.$type.'/applied_posts/' . $next); ?>" aria-label="Next"> <span aria-hidden="true">»</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</section>
