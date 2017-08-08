

<?php
$typeColor = array("jt-full-time-color", "jt-part-time-color", "jt-remote-color", "jt-intern-color");
?>

<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3><?php echo $post_detail->title; ?></h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Education</a></li>
                        <li><a href="<?php echo site_url('post/dashboard/active_posts'); ?>">Active Educations</a></li>
                        <li class="active">Education Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-job-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="single-job-page">
                        <div class="job-short-detail">
                            <div class="heading-inner">
                                <p class="title">Education Details</p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <dl>
                                    <dt>Education Type:</dt>
                                    <dd><?php echo $this->job_types[$post_detail->type]; ?> </dd><div class="clearfix"></div>

                                    <dt>Education Experience:</dt>
                                    <dd> <?php echo $this->experiences[$post_detail->experience]; ?></dd><div class="clearfix"></div>

                                    <dt>Posted On:</dt>
                                    <dd><?php echo substr($post_detail->posted_date,0,16); ?></dd><div class="clearfix"></div>

                                    <dt>Last Date:</dt>
                                    <dd> <?php echo substr($post_detail->expire_date,0,10); ?></dd><div class="clearfix"></div>

                                    <dt>No. of Vacancies:</dt>
                                    <dd> <?php echo $post_detail->vacancies; ?></dd><div class="clearfix"></div>

                                    <dt>Location(s):</dt>
                                    <dd> <?php echo $client_info->city; ?>, <?php echo $this->countries[$client_info->country]; ?></dd><div class="clearfix"></div>

                                    <dt>Expected Salary:</dt>
                                    <dd>$<?php echo $post_detail->price; ?> / Month</dd><div class="clearfix"></div>
                                </dl>
                            </div>
                        </div>

                        <div class="heading-inner">
                            <p class="title">Education Description</p>
                        </div>
                        <div>
                            <?php echo $post_detail->description; ?>
                        </div>

                        <div class="heading-inner">
                            <p class="title">Education Specification:</p>
                        </div>
                        <div>
                            <?php echo $post_detail->specification; ?>
                        </div>

                        <div class="heading-inner">
                            <p class="title">Technical Guidance:</p>
                        </div>
                        <div>
                            <?php echo $post_detail->technical_guidance; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <aside>
                        <div class="apply-job">
                            <a class="btn btn-default" href="<?php echo site_url('education/post/getAppliedUsers/'.$post_id); ?>"><i class="fa fa-star"></i>Applied Customers</a>
                        </div>
                        <div class="company-detail">
                            <div class="company-img">
                                <img  src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $this->login_user_id?>_education.jpg" alt="Image"
                                      onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company-logo/default.png'" class="img-responsive">
                            </div>
                            <div class="company-contact-detail">
                                <table>
                                    <tr>
                                        <th>Company Name:</th>
                                        <td> <?php echo $client_info->company_name; ?>, <?php echo $this->countries[$client_info->country]; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td> <?php echo $client_info->phone; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td> <?php echo $client_info->address; ?>, <?php echo $client_info->city; ?>, <?php echo $this->countries[$client_info->country]; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <div class="widget">
                        <div class="widget-heading"><span class="title">Featured Educations</span></div>
                        <ul class="related-post">
                            <?php
                            foreach ($featured_posts as $row){
                            ?>
                            <li class="categories-list-page">
                                <a href="<?php echo site_url('education/post/post_detail/'.$row->post_id.'/'.$row->user_id); ?>"><?php echo $row->title; ?> </a>

                                    <div class="job-type <?php echo $typeColor[$row->type]; ?>">
                                        <i class="fa fa-clock-o"></i> <?php echo $this->job_types[$row->type]; ?>
                                    </div>
                                    <?php echo $this->categories[$row->category]; ?>

                                <span><i class="fa fa-calendar"></i><?php echo substr($row->posted_date,0,10); ?>&emsp; ~ &emsp;<?php echo substr($row->expire_date,0,10); ?> </span>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

