<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
$matadetailColor = array("full-time", "intern", "remote", "part");
$aniType = array("fadeInUp active", "fadeInDown", "fadeInLeft", "fadeInRight", "fadeInUp");

$indexArr = array("bycompany", "bycategory", "bycity", "bytype", "byprice");

function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

?>
<section class="main-section parallex">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding">
                <div class="search-form-contaner">
                    <h1 class="search-main-title"> Ten million success stories. Start yours today </h1>
                    <form class="form-inline" action="<?php echo site_url('home/search_job') ?>" method="post">
                        <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                            <div class="form-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search Keyword"
                                       value="<?php echo (isset($tags)) ? $tags : ''; ?>">
                                <i class="icon-magnifying-glass"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                            <div class="form-group">
                                <select class="select-category form-control" name="category">
                                    <option value="">&nbsp;</option>
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
                        <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                            <div class="form-group form-action">
                                <button type="submit" id='search_button' class="btn btn-default btn-search-submit">
                                    Search <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cat-tabs cat-tab-index-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="cat-title">Browse Recent Posts</div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class="active"><a href="#tab0" data-toggle="tab"><i class="icofont icon-ribbon"></i><span
                                                class="hidden-xs hidden-sm">Jobs</span></a></li>
                                <li><a href="#tab1" data-toggle="tab"><i class="icofont icon-layers"></i><span
                                                class="hidden-xs hidden-sm">Educations</span></a></li>
                                <li><a href="#tab2" data-toggle="tab"><i class="icofont icon-global"></i><span
                                                class="hidden-xs hidden-sm">Properties</span></a></li><!--
                                <li><a href="#tab3" data-toggle="tab"><i class="icofont icon-linegraph"></i><span class="hidden-xs hidden-sm">By Type</span></a></li>
                                <li><a href="#tab4" data-toggle="tab"><i class="icofont icon-briefcase"></i><span class="hidden-xs hidden-sm">By Price</span></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <?php
                            $type = array('job', 'education', 'property');
                            for ($i = 0; $i < 3; $i++) { ?>
                                <div class="tab-pane animated <?php echo $aniType[$i]; ?>"
                                     id="tab<?php echo $i; ?>"> <?php
                                    foreach ($postData[$type[$i]] as $post) { ?>
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="job-box">
                                                <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                    <div class="comp-logo">
                                                        <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $post->user_id; ?>_<?php echo $type[$i]; ?>.jpg"
                                                             onerror=" this.src = '<?php echo ASSETS_ROOT; ?>images/company/default_profile.png'"
                                                             class="img-responsive"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="job-title-box">
                                                        <a href="<?php
                                                        if ($this->login_user_id) {
                                                            if ($this->login_user_type == 'customer' || $this->login_user_id != $post->user_id) {
                                                                echo site_url('customer/'.$post->post_type.'/user_post_detail/' . $post->post_id . '/' . $post->user_id . "/" . $this->login_user_id);
                                                            } else {
                                                                echo site_url($post->post_type.'/post/post_detail/' . $post->post_id . '/' . $post->user_id);
                                                            }
                                                        } else {
                                                            echo site_url('home/user_post_detail/' . $post->post_id . '/' . $post->user_id);
                                                        }
                                                        ?>">
                                                            <div class="job-title"> <?php echo $post->title; ?></div>
                                                        </a>
                                                        <a ><span
                                                                    class="comp-name"><?php echo $post->company_name . "   Malaysia"; ?> </span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <div class="job-location"><i
                                                                class="fa fa-location-arrow"></i> <?php echo $post->city; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-6">
                                                    <div class="job-type <?php echo $typeColor[$post->type]; ?>"><i
                                                                class="fa fa-clock-o"></i>
                                                        <?php echo $this->job_types[$post->type]; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <a class="btn btn-default show-modal" post_id="<?php echo $post->post_id; ?>" client_id="<?php echo $post->user_id; ?>"
                                                       style="margin-top: 10px;"> Apply Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="facts">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="fact-box">
                    <div class="single-facts-area">
                        <div class="facts-icon"><i class="icon-megaphone"></i></div>
                        <span class="counter">180</span>
                        <h3>Jobs</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="fact-box">
                    <div class="single-facts-area">
                        <div class="facts-icon"><i class="icon-document"></i></div>
                        <span class="counter">175</span>
                        <h3> Resume </h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="fact-box">
                    <div class="single-facts-area">
                        <div class="facts-icon"><i class="icon-profile-male"></i></div>
                        <span class="counter">20</span>
                        <h3>Members</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-6">
                <div class="fact-box">
                    <div class="single-facts-area">
                        <div class="facts-icon"><i class="icon-toolbox"></i></div>
                        <span class="counter">2142</span>
                        <h3>Company</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Heading-title black">
                        <h1>Featured Posts</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
                <?php
                $i=0;
                $limit=(count($featuredPosts)<6)?3:6;
                foreach ($featuredPosts as $post) {
                    $i++;
                    if($i>$limit)break;
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-image-box">
                            <div class="img-box"><img
                                        src="<?php echo ASSETS_ROOT; ?>profile image/client/profile_image/<?php echo $post->user_id; ?>_<?php echo $type[$post->type]; ?>.jpg"
                                        onerror=" this.src = '<?php echo ASSETS_ROOT; ?>images/company/default_profile.png'"
                                        style="max-height:105px;" class="img-responsive center-block" alt="">
                            </div>
                            <div class="content-area">
                                <div class="">
                                    <h4><a href="<?php
                                        if ($this->login_user_id) {
                                            if ($this->login_user_type == 'customer' || $this->login_user_id != $post->user_id) {
                                                echo site_url('customer/'.$post->post_type.'/user_post_detail/' . $post->post_id . '/' . $post->user_id . "/" . $this->login_user_id);
                                            } else {
                                                echo site_url($post->post_type.'/post/post_detail/' . $post->post_id . '/' . $post->user_id);
                                            }
                                        } else {
                                            echo site_url('home/user_post_detail/' . $post->post_id . '/' . $post->user_id);
                                        }
                                        ?>"> <?php echo $post->title; ?> </a></h4>
                                    <p> <?php echo $post->company_name; ?> Malaysia </p>
                                </div>
                                <div class="feature-post-meta"><a > <i class="fa fa-clock-o"></i> <?php echo time_elapsed_string($post->posted_date); ?></a>
                                    <a class="mata-detail <?php echo $matadetailColor[$post->type]; ?>"><?php echo $this->job_types[$post->type]; ?></a>
                                    <a class="mata-detail1 <?php echo $post->post_type; ?>"><?php echo $post->post_type; ?></a>
                                </div>
                                <div class="feature-post-meta-bottom"><span>$<?php echo $post->price; ?><small>/ month</small></span>
                                    <a class="btn btn-default pull-right show-modal" post_id="<?php echo $post->post_id; ?>" client_id="<?php echo $post->user_id; ?>"
                                        style="margin-top: 0px;"> Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="load-more-btn">
                        <button class="btn-default"> View All <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call-to-action-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <i class="icon-trophy"></i>
                    <div class="heading-detail">
                        <h3>World’s Best Job Portal Website Template</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <a href="" class="btn btn-default btn-block">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
