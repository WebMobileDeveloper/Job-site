<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Edit Profile</p>
    </div>
    <div class="profile-edit row">
        <form id="profile_form" action="<?php echo site_url('customer/customerDashboard/save_profile'); ?>" method="post" enctype="multipart/form-data">

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>First Name <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="firstName" value="<?php echo $client_info->firstName; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Last Name <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="lastName" value="<?php echo $client_info->lastName; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Your Title <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="company_name" value="<?php echo $client_info->company_name; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Date Of Birth <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="established_date" value="<?php echo $client_info->established_date; ?>">
                </div>
            </div>


            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Phone <span class="required">*</span></label>
                    <input type="text" placeholder="+99 333 1234567" class="form-control" name="phone" value="<?php echo $client_info->phone; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Your Country <span class="required">*</span></label>
                    <!--<input type="text" placeholder="" class="form-control"  name="country" value="<?php /*echo $client_info->country; */ ?>">-->
                    <select name="country" class="questions-location form-control">
                        <?php
                        $i = 0;
                        foreach ($this->countries as $country) { ?>
                            <option <?php echo ($i == $client_info->country) ? 'selected' : ''; ?> value="<?php echo $i++; ?>"><?php echo $country; ?></option>
                        <?php } ?>
                    </select>
                </div>

            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Your City <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="city" value="<?php echo $client_info->city; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Address <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="address" value="<?php echo $client_info->address; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Last Education <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="bussiness_type" value="<?php echo $client_info->bussiness_type; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>Required Skill Tags</label>
                    <input type="text" id="skills" name="skills" value="<?php echo $client_info->skills; ?>"" class="form-control" data-role="tagsinput">
                </div>
            </div>

            <!--<div class="col-md-12 col-sm-12">
                <div class="input-group image-preview form-group">
                    <label>Profile Image</label>
                    <input type="text" placeholder="Upload Profile Image" class="form-control image-preview-filename profile_image" disabled="disabled">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default image-preview-clear profile_image" target="profile_image" style="display:none;">
                            <span class="glyphicon glyphicon-remove"></span> Clear
                        </button>
                        <div class="btn btn-default image-preview-input profile_image">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="image-preview-input-title">Browse</span>
                            <input type="file" accept="file_extension" name="profile_image"/>
                        </div>
                    </span>
                </div>
            </div>-->

            <div class="col-md-12 col-sm-12">
                <div class="input-group image-preview form-group">
                    <label>My Photo:</label>
                    <input type="text" placeholder="Upload Logo Image" class="form-control image-preview-filename logo_image" disabled="disabled">
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




            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>About Me <span class="required">*</span></label>
                    <textarea name="about_company" id="about_company"><?php echo $client_info->about_company; ?></textarea>
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
        $('#skills').tagsInput({
            width: 'auto'
        });

        $("#save_profile").click(function () {
            $("#profile_form").validate({
                rules: {
                    firstName: "required",
                    lastName: "required",
                    company_name: "required",   //title
                    established_date: "required",  //birthday
                    phone: "required",
                    city: "required",
                    address: "required",
                    bussiness_type: "required", //last education
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
<script src="http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo ASSETS_ROOT;?>css/jquery.tagsinput.min.css">

<!-- FOR THIS PAGE ONLY -->
<script type="text/javascript" src="<?php echo ASSETS_ROOT;?>js/jquery.tagsinput.min.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('about_company');
</script>