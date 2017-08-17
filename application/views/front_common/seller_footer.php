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

<script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/sidebar-menu.js"></script>
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

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>

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
    //console.log('action=', action);
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
                alert("Sorry, you can apply after login. \n\n  At first login please.");
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
</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>
</div>

</body>

</html>