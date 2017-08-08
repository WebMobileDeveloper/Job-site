<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
$aniType = array("fadeInUp active", "fadeInDown", "fadeInLeft", "fadeInRight", "fadeInUp");

$indexArr = array("bycompany", "bycategory", "bycity", "bytype", "byprice");
?>
<section class="main-section parallex">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding">
                <div class="search-form-contaner">
                    <h1 class="search-main-title"> Ten million success stories. Start yours today </h1>
                    <form class="form-inline" action="<?php echo site_url('home/search_job')?>" method="post">
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
                                    <option value="">&nbsp;</option>
                                    <?php
                                    $i = 0;
                                    $selected = (isset($category)) ? $category : -1;
                                    foreach ($this->categories as $category) { ?>
                                        <option value="<?php echo $i;
                                        echo ($i == $selected) ? ' selected' : ''; ?>"><?php echo $category; ?></option>
                                    <?php $i++; } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                            <div class="form-group">
                                <select class="select-location form-control" name="country">
                                    <option value="">&nbsp;</option>
                                    <?php
                                    $i = 0;
                                    $selected = (isset($country)) ? $country : -1;
                                    foreach ($this->countries as $country) { ?>
                                        <option value="<?php echo $i;
                                        echo ($i == $selected) ? ' selected' : ''; ?>"><?php echo $country; ?></option>
                                    <?php
                                        $i++;
                                    } ?>
                                </select>
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
                                <li class="active"><a href="#tab0" data-toggle="tab"><i class="icofont icon-ribbon"></i><span class="hidden-xs hidden-sm">Jobs</span></a></li>
                                <li><a href="#tab1" data-toggle="tab"><i class="icofont icon-layers"></i><span class="hidden-xs hidden-sm">Educations</span></a></li>
                                <li><a href="#tab2" data-toggle="tab"><i class="icofont icon-global"></i><span class="hidden-xs hidden-sm">Properties</span></a></li><!--
                                <li><a href="#tab3" data-toggle="tab"><i class="icofont icon-linegraph"></i><span class="hidden-xs hidden-sm">By Type</span></a></li>
                                <li><a href="#tab4" data-toggle="tab"><i class="icofont icon-briefcase"></i><span class="hidden-xs hidden-sm">By Price</span></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <?php
                            $type=array('job','education','property');
                            for ($i = 0; $i < 3; $i++) { ?>
                                <div class="tab-pane animated <?php echo $aniType[$i]; ?>" id="tab<?php echo $i; ?>"> <?php
                                    foreach ($postData[$type[$i]] as $post) { ?>
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <div class="job-box">
                                                <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                    <div class="comp-logo">
                                                        <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $post->user_id;?>_<?php echo $type[$i]; ?>.jpg"
                                                             onerror=" this.src = '<?php echo ASSETS_ROOT; ?>images/company/default_profile.png'" class="img-responsive"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="job-title-box">
                                                        <a href="#">
                                                            <div class="job-title"> <?php echo $post->title; ?></div>
                                                        </a>
                                                        <a href="#"><span class="comp-name"><?php echo $post->company_name . "   " . $post->country; ?> </span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <div class="job-location"><i class="fa fa-location-arrow"></i> <?php echo $post->city; ?></div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-6">
                                                    <div class="job-type <?php echo $typeColor[$post->type]; ?>"><i class="fa fa-clock-o"></i>
                                                        <?php echo $this->job_types[$post->type]; ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <button class="btn btn-primary btn-custom">Apply Now</button>
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
                        <h1>Featured Jobs</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero
                            eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> Graphic Designer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 1 days ago</a>
                                <a href="" class="mata-detail part">Part Time</a></div>
                            <div class="feature-post-meta-bottom"><span>$500<small>/ month</small></span> <a href=""
                                                                                                             class="apply pull-right">
                                    Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/4.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> Software Engineer </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 5 days ago</a>
                                <a href="" class="mata-detail remote">Remote</a></div>
                            <div class="feature-post-meta-bottom"><span>$900<small>/ month</small></span> <a href=""
                                                                                                             class="apply pull-right">
                                    Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> Netword Administrator </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a>
                                <a href="" class="mata-detail full-time">Full Time</a></div>
                            <div class="feature-post-meta-bottom"><span>$1500<small>/ month</small></span> <a
                                        href="" class="apply pull-right"> Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/2.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> managing director </a></h4>
                                <p> Kings Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a>
                                <a href="" class="mata-detail full-time">full Time</a></div>
                            <div class="feature-post-meta-bottom"><span>$2500<small>/ month</small></span> <a
                                        href="" class="apply pull-right"> Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/5.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> 54/A Ready Flat in Miami Beach </a></h4>
                                <p> Confidential Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 2 days ago</a>
                                <a href="" class="mata-detail remote">Freelancer</a></div>
                            <div class="feature-post-meta-bottom"><span>$500<small>/ month</small></span> <a href=""
                                                                                                             class="apply pull-right">
                                    Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-image-box">
                        <div class="img-box"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png" class="img-responsive center-block"
                                                  alt=""></div>
                        <div class="content-area">
                            <div class="">
                                <h4><a href=""> Documentation Expert </a></h4>
                                <p> XCosdo Int. Pvt. Ltd. Pakistan </p>
                            </div>
                            <div class="feature-post-meta"><a href=""> <i class="fa fa-clock-o"></i> 10 days ago</a>
                                <a href="" class="mata-detail intern">Intern</a></div>
                            <div class="feature-post-meta-bottom"><span>$400<small>/ month</small></span> <a href=""
                                                                                                             class="apply pull-right">
                                    Apply Now</a></div>
                        </div>
                    </div>
                </div>
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
