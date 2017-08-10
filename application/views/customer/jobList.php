<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
?>

<section class="breadcrumb-search parallex">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding">
                <div class="search-form-contaner">
                    <h1 class="search-main-title"> Ten million success stories. Start yours today </h1>
                    <form class="form-inline" action="<?php echo site_url('job/post/search_job') ?>" method="post">
                        <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search Keyword"
                                       value="<?php echo (isset($tags)) ? $tags : ''; ?>">
                                <i class="icon-magnifying-glass"></i>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="form-group">
                                <select class="select-category form-control" name="category">
                                    <option value=""></option>
                                    <?php
                                    $i = 0;
                                    $selected = (isset($category)) ? $category : -1;

                                    foreach ($this->categories as $category) { ?>
                                        <option value="<?php echo $i;
                                        echo ($i == $selected) ? ' selected' : ''; ?>"><?php echo $category; ?></option>
                                        <?php $i++;
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="form-group">
                                <input type="text"
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 nopadding">
                            <div class="form-group form-action">
                                <button type="submit" id='search_button' class="btn btn-default btn-search-submit">Search <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="categories-list-page light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <h4 class="search-result-text">Showing <?php echo count($result); ?> of <?php echo $total_count; ?> available job(s)</h4>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="all-jobs-list-box">
                        <?php
                        foreach ($result as $row) { ?>
                            <div class="job-box">
                                <div class="col-md-1 col-sm-1 col-xs-12 hidden-xs hidden-sm">
                                    <div class="comp-logo">
                                        <a href="">
                                            <img class="img-responsive" src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $row->user_id; ?>.jpg" alt="Image"
                                                 onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company/default_profile.png'">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 nopadding">
                                    <div class="job-title-box">
                                        <a href="<?php
                                        if ($this->login_user_id) {
                                            if ($this->login_user_type == 'customer' || $this->login_user_id != $row->user_id) {
                                                echo site_url('job/post/user_post_detail/' . $row->post_id . '/' . $row->user_id . "/" . $this->login_user_id);
                                            } else {
                                                echo site_url('job/post/post_detail/' . $row->post_id . '/' . $row->user_id);
                                            }
                                        } else {
                                            echo site_url('job/post/user_post_detail/' . $row->post_id . '/' . $row->user_id);
                                        }
                                        ?>
                                        ">
                                            <div class="job-title"> <?php echo $row->title; ?></div>
                                        </a>
                                        <a href="#"><span class="comp-name"><?php echo $row->company_name; ?><?php echo $row->city; ?>Malaysia</span></a>
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
                                        <a href="<?php echo site_url('job/post/search_job/' . $before); ?>" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
                                    </li>
                                    <?php
                                    for ($i = $start; $i <= $end; $i++) {
                                        ?>
                                        <li <?php echo ($i == $page) ? "class='active'" : ""; ?>><a href="<?php echo site_url('job/post/search_job/' . $i); ?>"><?php echo $i; ?></a></li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo site_url('job/post/search_job/' . $next); ?>" aria-label="Next"> <span aria-hidden="true">»</span> </a>
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
