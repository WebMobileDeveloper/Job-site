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
                        <li><a href="#">Home</a></li>
                        <li class="active"><span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span> Detail</li>
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
                                <p class="title"><span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span> Details</p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <dl>
                                    <dt><span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span> Type:</dt>
                                    <dd><?php echo $this->job_types[$post_detail->type]; ?></dd>

                                    <dt>Post Experience:</dt>
                                    <dd> <?php echo $this->experiences[$post_detail->experience]; ?></dd>

                                    <dt>Posted On:</dt>
                                    <dd><?php echo $post_detail->posted_date; ?></dd>

                                    <dt>Last Date:</dt>
                                    <dd> <?php echo $post_detail->expire_date; ?></dd>

                                    <dt>No. of Vacancies:</dt>
                                    <dd> <?php echo $post_detail->vacancies; ?></dd>

                                    <dt>Location(s):</dt>

                                    <dd> <?php echo $client_info->city; ?>, Malaysia</dd>

                                    <dt>Expected Salary:</dt>
                                    <dd>$<?php echo $post_detail->price; ?> / Month</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="heading-inner">
                            <p class="title"><span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span> Description</p>
                        </div>
                        <div>
                            <?php echo $post_detail->description; ?>
                        </div>

                        <div class="heading-inner">
                            <p class="title"><span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span> Specification:</p>
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
                            <a class="btn btn-default show-modal" post_id="<?php echo $post_detail->post_id; ?>" client_id="<?php echo $client_info->id; ?>">
                                <i class="fa fa-upload"></i>Apply For Position</a>
                        </div>
                        <div class="company-detail">
                            <div class="company-img">
                                <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $client_info->id; ?>_<?php echo $post_detail->post_type; ?>.jpg" alt="Image"
                                     onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/company-logo/default.png'" class="img-responsive">
                            </div>
                            <div class="company-contact-detail">
                                <table>
                                    <tr>
                                        <th>Company Name:</th>
                                        <td> <?php echo $client_info->company_name; ?>, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <th>Phone:</th>
                                        <td> <?php echo $client_info->phone; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td> <?php echo $client_info->address; ?>, <?php echo $client_info->city; ?>, Malaysia</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <div class="widget">
                        <div class="widget-heading"><span class="title">Featured <span style="text-transform: capitalize;"><?php echo $post_detail->post_type; ?></span>s</span></div>
                        <ul class="related-post">
                            <?php
                            foreach ($featured_posts as $row) {
                                ?>
                                <li class="categories-list-page">
                                    <a href="<?php echo site_url('home/user_post_detail/' . $row->post_id . '/' . $row->user_id); ?>">
                                        <?php echo $row->title; ?> </a>
                                    <a href="#">
                                        <div class="job-type <?php echo $typeColor[$row->type]; ?>">
                                            <i class="fa fa-clock-o"></i> <?php echo $this->job_types[$row->type]; ?>
                                        </div>
                                        <?php echo $this->categories[$row->category]; ?>
                                    </a>
                                    <span><i class="fa fa-calendar"></i><?php echo $row->posted_date; ?> - <?php echo $row->expire_date; ?> </span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


