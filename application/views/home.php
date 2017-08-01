
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span
                                        id="search_concept">Filter By</span> <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">By Company</a></li>
                                <li><a href="#">By Function</a></li>
                                <li><a href="#">By City </a></li>
                                <li><a href="#">By Salary </a></li>
                                <li><a href="#">By Industry</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control search-field" name="x" placeholder="Search term...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                        </span></div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-section parallex">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-md-offset-1 col-xs-12 nopadding">
                    <div class="search-form-contaner">
                        <h1 class="search-main-title"> Ten million success stories. Start yours today </h1>
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding">
                                <div class="form-group">

                                    <input type="text" class="form-control" name="keyword" placeholder="Search Keyword"
                                           value="">
                                    <i class="icon-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                                <div class="form-group">
                                    <select class="select-category form-control">
                                        <option value=""></option>
                                        <?php
                                        $i=0;
                                        foreach ($categories as $category){ ?>
                                            <option value="<?php echo $i++;?>"><?php echo $category;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                                <div class="form-group">
                                    <select class="select-location form-control">
                                        <option value="">&nbsp;</option>
                                        <?php
                                        $i=0;
                                        foreach ($countries as $country){ ?>
                                            <option value="<?php echo $i++;?>"><?php echo $country;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 nopadding">
                                <div class="form-group form-action">
                                    <button type="button" class="btn btn-default btn-search-submit">Search <i class="fa fa-angle-right"></i></button>
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
                        <div class="cat-title">Browse Jobs</div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab1" data-toggle="tab"><i class="icofont icon-ribbon"></i><span
                                                    class="hidden-xs hidden-sm">By Company</span></a></li>
                                    <li><a href="#tab2" data-toggle="tab"><i class="icofont icon-layers"></i><span
                                                    class="hidden-xs hidden-sm">By Function</span></a></li>
                                    <li class="active"><a href="#tab3" data-toggle="tab"><i
                                                    class="icofont icon-global"></i><span class="hidden-xs hidden-sm">By City</span></a>
                                    </li>
                                    <li><a href="#tab4" data-toggle="tab"><i class="icofont icon-linegraph"></i><span
                                                    class="hidden-xs hidden-sm">By Type</span></a></li>
                                    <li><a href="#tab5" data-toggle="tab"><i class="icofont icon-briefcase"></i><span
                                                    class="hidden-xs hidden-sm">By Industry</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane tab-pane animated fadeInUp" id="tab1">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Documentation Specialist</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. Australia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6 ">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Melbourne
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-part-time-color"><i class="fa fa-clock-o"></i>
                                                    Part Time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Looking for Bootstrap designer</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Pakistan</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Lahore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-remote-color"><i class="fa fa-clock-o"></i>
                                                    Remote
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Assistant Engineer (IT/Networks)</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Malaysia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Singapore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-intern-color"><i class="fa fa-clock-o"></i>
                                                    Internship
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane animated fadeInDown" id="tab2">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Looking for Bootstrap designer</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Pakistan</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Lahore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-remote-color"><i class="fa fa-clock-o"></i>
                                                    Remote
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/5.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Documentation Specialist</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Assistant Engineer (IT/Networks)</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Malaysia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Singapore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-intern-color"><i class="fa fa-clock-o"></i>
                                                    Internship
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/4.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. Australia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Melbourne
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-part-time-color"><i class="fa fa-clock-o"></i>
                                                    Part Time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active animated fadeInLeft" id="tab3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/5.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Looking for Bootstrap designer</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Pakistan</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Documentation Specialist</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-intern-color"><i class="fa fa-clock-o"></i>
                                                    Internship
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Assistant Engineer (IT/Networks)</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Malaysia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-part-time-color"><i class="fa fa-clock-o"></i>
                                                    Part Time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. Australia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-remote-color"><i class="fa fa-clock-o"></i>
                                                    Remote
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane animated fadeInRight" id="tab4">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/5.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Documentation Specialist</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. Australia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Melbourne
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Looking for Bootstrap designer</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Pakistan</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Lahore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/4.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Assistant Engineer (IT/Networks)</div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Malaysia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Singapore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane animated fadeInUp" id="tab5">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> New York
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-full-time-color"><i class="fa fa-clock-o"></i>
                                                    Full time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/3.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director
                                                            (IT/Networks)
                                                        </div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Malaysia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Singapore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-intern-color"><i class="fa fa-clock-o"></i>
                                                    Internship
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/5.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Looking for Technical Network Director
                                                        </div>
                                                    </a> <a href="#"><span
                                                                class="comp-name">conversi Pvt. Ltd. Pakistan</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Lahore
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-remote-color"><i class="fa fa-clock-o"></i>
                                                    Remote
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                        <div class="job-box">
                                            <div class="col-md-1 col-sm-1 col-xs-12 nopadding  hidden-xs hidden-sm">
                                                <div class="comp-logo"><img src="<?php echo ASSETS_ROOT; ?>images/company/1.png"
                                                                            class="img-responsive" alt="scriptsbundle">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="job-title-box"><a href="#">
                                                        <div class="job-title"> Technical Network Director</div>
                                                    </a> <a href="#"><span class="comp-name">conversi Pvt. Ltd. Australia</span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-location"><i class="fa fa-location-arrow"></i> Melbourne
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-6">
                                                <div class="job-type jt-part-time-color"><i class="fa fa-clock-o"></i>
                                                    Part Time
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <button class="btn btn-primary btn-custom">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <section class="pricing-section-1 pricing-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Resume Pricing</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero
                                eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ui_box">
                            <div class="ui_box__inner">
                                <h2> Basic Plan </h2>
                                <div class="features_left">
                                    <ul>
                                        <li> Posting</li>
                                        <li> Searching</li>
                                        <li> Documentation</li>
                                        <li class="cut"> Support</li>
                                        <li class="cut"> Access Resume</li>
                                        <li class="cut"> Contact Details</li>
                                        <li class="cut"> Interviews</li>
                                        <li class="cut"> Test Preprations</li>
                                    </ul>
                                </div>
                                <div class="price-rates"> Free
                                    <small>Always</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
                            </div>
                            <div class="drop">
                                <a href="">
                                    <p>Select Plan</p>
                                </a>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ui_box">
                            <div class="ui_box__inner">
                                <h2> Premium Plan </h2>
                                <div class="features_left">
                                    <ul>
                                        <li> Posting</li>
                                        <li> Searching</li>
                                        <li> Documentation</li>
                                        <li> Support</li>
                                        <li> Access Resume</li>
                                        <li class="cut"> Contact Details</li>
                                        <li class="cut"> Interviews</li>
                                        <li class="cut"> Test Preprations</li>
                                    </ul>
                                </div>
                                <div class="price-rates"> $29
                                    <small>per month</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
                            </div>
                            <div class="drop">
                                <a href="">
                                    <p>Select Plan</p>
                                </a>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ui_box">
                            <div class="ui_box__inner">
                                <h2> Standard Plan </h2>
                                <div class="features_left">
                                    <ul>
                                        <li> Posting</li>
                                        <li> Searching</li>
                                        <li> Documentation</li>
                                        <li> Support</li>
                                        <li> Access Resume</li>
                                        <li> Contact Details</li>
                                        <li> Interviews</li>
                                        <li> Test Preprations</li>
                                    </ul>
                                </div>
                                <div class="price-rates"> $59
                                    <small>per month</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
                            </div>
                            <div class="drop">
                                <a href="">
                                    <p>Select Plan</p>
                                </a>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 visible-sm">
                        <div class="ui_box">
                            <div class="ui_box__inner">
                                <h2> Basic Plan </h2>
                                <div class="features_left">
                                    <ul>
                                        <li> Posting</li>
                                        <li> Searching</li>
                                        <li> Documentation</li>
                                        <li class="cut"> Support</li>
                                        <li class="cut"> Access Resume</li>
                                        <li class="cut"> Contact Details</li>
                                        <li class="cut"> Interviews</li>
                                        <li class="cut"> Test Preprations</li>
                                    </ul>
                                </div>
                                <div class="price-rates"> Free
                                    <small>Always</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
                            </div>
                            <div class="drop">
                                <a href="">
                                    <p>Select Plan</p>
                                </a>
                                <div class="arrow"></div>
                            </div>
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
    <section class="blog-posts-section light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title black">
                            <h1>Featured Tips</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero
                                eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img"><a href="#"> <img src="<?php echo ASSETS_ROOT; ?>images/blog/1.jpg" alt=""
                                                                    class="img-responsive"> </a></div>
                            <div class="post-info"><a href="">Aug 30, 2016</a> <a href="#">23 comments</a></div>
                            <h3 class="post-title"><a href="#"> Sketch Designing Artists are beauty: A report </a></h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                                neque tempora odit
                                atque repellat est molestiae perferendis. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img"><a href="#"> <img src="<?php echo ASSETS_ROOT; ?>images/blog/2.jpg" alt=""
                                                                    class="img-responsive"> </a></div>
                            <div class="post-info"><a href="#">august 30, 2016</a> <a href="#">90 comments</a></div>
                            <h3 class="post-title"><a href="#"> A suitable timings for a graphic designers </a></h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                                neque tempora odit
                                atque repellat est molestiae perferendis. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img"><a href="#"> <img src="<?php echo ASSETS_ROOT; ?>images/blog/3.jpg" alt=""
                                                                    class="img-responsive"> </a></div>
                            <div class="post-info"><a href="#">august 02, 2016</a> <a href="#">10 comments</a></div>
                            <h3 class="post-title"><a href="#"> How to get a job on same time same place </a></h3>
                            <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                                neque tempora odit
                                atque repellat est molestiae perferendis. </p>
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

