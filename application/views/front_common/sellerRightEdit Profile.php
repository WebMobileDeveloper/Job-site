<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Edit Profile</p>
    </div>
    <div class="profile-edit row">
        <form id="profile_form" action="<?php echo site_url('sellerhome/save_seller_profile'); ?>" method="post" enctype="multipart/form-data">

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Name: <span class="required">*</span></label>
                    <input type="text" placeholder="+99 333 1234567" class="form-control" name="fullname" value="<?php echo $client_info->fullname; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Phone: <span class="required">*</span></label>
                    <input type="text" placeholder="+99 333 1234567" class="form-control" name="phone" value="<?php echo $client_info->accountPhone; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="input-group image-preview form-group">
                    <label>Photo: <span class="required">*</span></label>
                    <input type="text" placeholder="Upload Photo Image(128 × 128)" class="form-control image-preview-filename logo_image" disabled="disabled">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default image-preview-clear logo_image" target="logo_image" style="display:none;">
                            <span class="glyphicon glyphicon-remove"></span> Clear
                        </button>
                        <div class="btn btn-default image-preview-input logo_image">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="image-preview-input-title logo_image">Browse</span>
                            <input type="file" accept="file_extension" name="logo_image" />
                        </div>
                    </span>
                </div>
            </div>


            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Your Country: </label>
                    <input type="text" class="form-control" value="Malaysia" readonly>
                </div>

            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Your City: <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="city" value="<?php echo $client_info->accountCity; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Address <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="address" value="<?php echo $client_info->accountAddress; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <button class="btn btn-default pull-right" id="save_profile"> Save Profile <i class="fa fa-angle-right"></i></button>
            </div>

            <input type="hidden" name="user_id" value="<?php echo $this->login_user_id;?>">
        </form>
    </div>
</div>
<script>
    $(function () {
        $(".questions-location").select2();

        $("#save_profile").click(function () {
            $("#profile_form").validate({
                rules: {
                    fullname: "required",
                    phone: "required",
                    city: "required",
                    company_name: "required",
                    address: "required"
                },
                errorPlacement: function (error, element) {
                }

            });

            if ($("#post_job").valid() == false) {
                $("#error-span").fadeIn(1000).fadeOut(2000);
                return false;
            }
        });
    });
</script>
<!-- CK-EDITOR -->
<!--<script src="<?php echo ASSETS_ROOT; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('about_company');
</script>-->