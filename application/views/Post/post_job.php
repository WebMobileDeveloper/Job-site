<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3>Post A Job</h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Post Job</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="post-job">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box-panel">
                    <div class="Heading-title black">
                        <h3>Post A job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                    <form class="row" id="post_job" action="" method="post">
                        <div class="col-md-6 col-sm-6 ceol-xs-12">
                            <div class="form-group">
                                <label>Job Title<span style="color:red;">&emsp;(*)</span></label>
                                <input type="text" placeholder="Job Title" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Location</label>
                                <select name="location" class="questions-location form-control">
                                    <?php
                                    $i=0;
                                    foreach ($countries as $country){ ?>
                                        <option value="<?php echo $i++;?>"><?php echo $country;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Job Category<span style="color:red;">&emsp;(*)</span></label>
                                <select class="questions-category form-control" name="category[]" multiple="multiple">
                                    <?php
                                    $i=0;
                                    foreach ($categories as $category){ ?>
                                        <option value="<?php echo $i++;?>"><?php echo $category;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select name="job_type" class="questions-type form-control" >
                                    <option value="0">Full Time</option>
                                    <option value="1">Part Time</option>
                                    <option value="2">Remote</option>
                                    <option value="3">Freelancer</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Job Experience</label>
                                <select name="experience" class="questions-experience form-control">
                                    <option value="0">Fresher</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="1">4 Years</option>
                                    <option value="2">5 Years</option>
                                    <option value="3">6+ Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Expected Salary</label>
                                <select name="Salary" class="questions-salary form-control">
                                    <option value="0">Less than 10,000</option>
                                    <option value="1">10,000 +</option>
                                    <option value="2">20,000 +</option>
                                    <option value="3">30,000 +</option>
                                    <option value="1">40,000 +</option>
                                    <option value="2">50,000 +</option>
                                    <option value="3">100,000 +</option>
                                    <option value="3">Negotiable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" id="tags" name="tags" value="" class="form-control" data-role="tagsinput">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Job Detials</label>
                                <textarea name="ckeditor" id="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span id="error-span" style="color:red;font-size: 1.2em; display: none;" class="pull-right">Please input all items.</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-default pull-right" id="publish_job">Publish Job <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

