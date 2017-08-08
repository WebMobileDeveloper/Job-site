<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3>Post A Property</h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="">My Properties</a></li>
                        <li class="active"><a href="">Post Property</a></li>
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
                        <h3>Post A Property</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                    <form class="row" id="post_job" action="" method="post">
                        <div class="col-md-6 col-sm-6 ceol-xs-12">
                            <div class="form-group">
                                <label>Property Title<span style="color:red;">&emsp;*</span></label>
                                <input type="text" placeholder="Property Title" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6  col-sm-6 ceol-xs-12">
                            <div class="form-group">
                                <label>Expire Date<span style="color:red;">&emsp;*</span></label>
                                <div class="input-group date" id="datetimepicker1">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
                                    <input type="text" class="form-control" name="date" placeholder="Select Expire Date"/>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Property Category<span style="color:red;">&emsp;*</span></label>
                                <select class="questions-category form-control" name="category[]" multiple="multiple">
                                    <?php $i = 0;
                                    foreach ($this->categories as $category) { ?>
                                        <option value="<?php echo $i++; ?>"><?php echo $category; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Property Type</label>
                                <select name="job_type" class="questions-type form-control">
                                    <?php $i = 0;
                                    foreach ($this->job_types as $type) { ?>
                                        <option value="<?php echo $i++; ?>"><?php echo $type; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Property Experience</label>
                                <select name="experience" class="questions-experience form-control">
                                    <?php $i = 0;
                                    foreach ($this->experiences as $experience) { ?>
                                        <option value="<?php echo $i++; ?>"><?php echo $experience; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Expected Price<span style="color:red;">&emsp;*</span></label>
                                <input type="number" placeholder="Expected Price($/month)" name="price" class="form-control" value="1000" step="10">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 ceol-xs-12">
                            <div class="form-group">
                                <label>No. of Vacancies:</label>
                                <input type="text" placeholder="No. of Vacancies" name="vacancies" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Required Skill Tags</label>
                                <input type="text" id="tags" name="tags" value="" class="form-control" data-role="tagsinput">
                            </div>
                        </div>
                        <!--Property Description-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Property Description</label>
                                <textarea name="description" id="description"></textarea>
                            </div>
                        </div>
                        <!--Property Specification-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Property Specification</label>
                                <textarea name="specification" id="specification"></textarea>
                            </div>
                        </div>
                        <!--Technical Guidance-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Technical Guidance</label>
                                <textarea name="technical_guidance" id="technical_guidance"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span id="error-span" style="color:red;font-size: 1.2em; display: none;" class="pull-right">Please input all items.</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-default pull-right" id="publish_job">Publish Property <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



