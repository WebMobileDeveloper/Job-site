<div class="fixed-footer">

    <footer class="footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 col-md-4 col-xs-12">

                    <div class="footer_block"><a href="index.html" class="f_logo"><img src="<?php echo ASSETS_ROOT; ?>images/logo.png" class="img-responsive" alt="logo"></a>

                        <p>Aoluptas sit aspernatur aut odit aut fugit, sed elits quias horisa hinoe magni magni dolores eos qui ratione volust luptatem sequised .</p>

                        <div class="social-bar">

                            <ul>

                                <li><a class="fa fa-twitter" href="#"></a></li>

                                <li><a class="fa fa-pinterest" href="#"></a></li>

                                <li><a class="fa fa-facebook" href="#"></a></li>

                                <li><a class="fa fa-behance" href="#"></a></li>

                                <li><a class="fa fa-instagram" href="#"></a></li>

                                <li><a class="fa fa-linkedin" href="#"></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-xs-12">

                    <div class="footer_block">

                        <h4>Hot Links</h4>

                        <ul class="footer-links">

                            <li><a href="#">Home</a></li>

                            <li><a href="#">About Us</a></li>

                            <li><a href="#">Privacy</a></li>

                            <li><a href="#">Contact Us</a></li>

                            <li><a href="#">Term & Conditions</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-xs-12">

                    <div class="footer_block">

                        <h4>Contact Information</h4>

                        <ul class="personal-info">

                            <li><i class="fa fa-map-marker"></i> 3rd Floor,Link Arcade Model Town, BBL, USA.</li>

                            <li><i class="fa fa-envelope"></i> Support@domain.com</li>

                            <li><i class="fa fa-phone"></i> (0092)+ 124 45 78 678</li>

                            <li><i class="fa fa-clock-o"></i> Mon - Sun: 8:00 - 16:00</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <section class="footer-bottom-section">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="footer-bottom">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm">

                                <ul class="footer-menu">

                                    <li><a href="#">Jobs in malaysia</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


<div class="modal fade apply-job-modal" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body contact-form-container">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                <div class="job-modal">
                    <h2>Want To Apply For this Post?</h2>
                </div>
                <form method="post" id="job-form" enctype="multipart/form-data">
                    <div class="row clearfix">
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="modalName" name="modalName" value="" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="modalEmail" name="modalEmail" value="" placeholder="Email" required>
                            </div>
                        </div>


                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="input-group image-preview form-group">
                                <input type="text" placeholder="Upload Resume" class="form-control image-preview-filename resume" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear resume" target="resume" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input resume">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title resume">Browse</span>
                                        <input type="file" accept="file_extension" name="resume" id="modalfile"/>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="column col-md-12 col-sm-12 col-xs-12">Select Resume
                            <div class="form-group">
                                <select name="copy_resume" id="copy_resume" class="form-control" placeholder="Select Resume">
                                    <option></option>
                                    <?php foreach ($allResume as $resume) { ?>
                                        <option value="<?php echo $resume->resume_file; ?>"><?php echo $resume->resume_title; ?></option>
                                    <?php } ?>
                                </select>

                            </div>

                        </div>
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea name="message" rows="6" class="form-control" placeholder="Cover Letter" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-default btn-block">Apply Now</button>
                            </div>
                        </div>

                        <input type="hidden" name="modalpost_id" id="modalpost_id" value="">
                        <input type="hidden" name="modalclient_id" id="modalclient_id" value="">
                        <input type="hidden" name="modaluser_id" id="modaluser_id" value="">
                        <input type="hidden" name="modalorigin_url" id="modalorigin_url" value="">
                        <input type="hidden" name="modalExt" id="modalExt" value="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade apply-job-modal" id="alertModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                <div class="">
                    <h2 id="alertTitle"></h2>
                </div>
            </div>
            <div class="modal-body contact-form-container">
                <div class="row clearfix">
                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <h4 class="form-group">
                            <div id="alertContent" style="padding:0px 60px;"></div>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!-- BOOTSTRAP CORE JS -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/bootstrap.min.js"></script>
<!-- JQUERY SELECT -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/select2.min.js"></script>

<!-- MEGA MENU -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/mega_menu.min.js"></script>

<!-- JQUERY COUNTERUP -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/counterup.js"></script>

<!-- JQUERY WAYPOINT -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/waypoints.min.js"></script>

<!-- JQUERY REVEAL -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/footer-reveal.min.js"></script>

<!-- Owl Carousel -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/owl-carousel.js"></script>

<!-- DATE AND TIME PICKER -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/moment.min.js"></script>

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/en-gb.js"></script>

<!-- CORE JS -->

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/custom.js"></script>


<script>
    var permit = {};

    permit['job'] = '<?php echo $this->login_user_job_permit; ?>';
    permit['education'] = '<?php echo $this->login_user_education_permit; ?>';
    permit['property'] = '<?php echo $this->login_user_property_permit; ?>';
    permit['customer'] = '<?php echo $this->login_user_customer_permit; ?>';

    var afterHiddenModal = '';
    var login_user_id = "<?php echo $this->login_user_id; ?>";
    var login_user_type = "<?php echo $this->login_user_type; ?>";
    var login_user_fullname = "<?php echo $this->login_user_fullname; ?>";
    var login_user_email = "<?php echo $this->login_user_email; ?>";
    var action = " <?php echo (isset($post_detail)) ? site_url($post_detail->post_type . '/post/apply_post') : ''; ?>";

    $(function () {
        $("a.post").click(function (e) {
            if (permit[$(this).attr('type')] == 'Non Approved') {
                $("#alertTitle").html("Do you want to post a " + $(this).attr('type') + "?");
                $("#alertContent").html("<br><br> Sorry, You haven't got permission for the " + $(this).attr('type') + " post yet." +
                    "<br><br>   Please contact administrator for permission.<br><br>");

                $("#alertModal").modal();
                e.preventDefault();
            }
        });
        $("#alertModal").on("hidden.bs.modal", function () {
            if (afterHiddenModal != '') {
                location.href = afterHiddenModal;
            }
        });

        $(".show-modal").click(function () {
            if (login_user_id != '') {
                if (login_user_type != 'customer') {
                    alert("Sorry, you can apply after login by customer. \n \n At first login by customer account, please.");
                    return false;
                }
            } else {
                location.href="<?php echo site_url('auth'); ?>";
                return false;
            }
            $("#modalName").val(login_user_fullname);
            $("#modalEmail").val(login_user_email);
            $("#modalpost_id").val($(this).attr("post_id"));
            $("#modalclient_id").val($(this).attr("client_id"));
            $("#modaluser_id").val(login_user_id);
            $("#modalorigin_url").val(location.href);

            //var action="< ?php echo site_url('job/post/apply_post'); ?>";

            $("#job-form").attr("action", action);
            $("#myModal").modal();
        });

        $("#job-form").submit(function (e) {
                var ext = getFileExtension2($("#modalfile").val());

                if ($("#modalfile").val() != '') {
                    if ($("#copy_resume").val() != '') {
                        alert("You can upload only one resume!");
                        e.preventDefault();
                        return false;
                    }
                    if (ext == 'pdf' || ext == 'doc' || ext == 'docx') {
                        if (confirm("Are you sure apply to this job?")) {
                            $("#modalExt").val(ext);
                            return true;
                        } else {
                            e.preventDefault();
                            return false;
                        }
                    } else {
                        alert("You must upload word or pdf file!\n\n Select again please.");
                        e.preventDefault();
                        return false;
                    }
                } else {
                    if ($("#copy_resume").val() == '') {
                        alert("You must upload one resume!");
                        e.preventDefault();
                        return false;
                    }
                    ext = getFileExtension2($("#copy_resume").val());
                    $("#modalExt").val(ext);
                    return true;
                }

            }
        );

        $("#resume-form").submit(function (e) {
            var ext = getFileExtension2($("#modalfile1").val());

            if (ext == 'pdf' || ext == 'doc' || ext == 'docx') {
                if (confirm("Are you sure upload this resume?")) {
                    $("#modalExt1").val(ext);
                    return true;
                } else {
                    e.preventDefault();
                }
            } else {
                alert("You must upload word or pdf file!\n\n Select again please.");
                e.preventDefault();
            }
        });
    });
    function getFileExtension2(filename) {
        return filename.split('.').pop();
    }
</script>


</div>

</body>

</html>