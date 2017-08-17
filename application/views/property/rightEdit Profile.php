<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Edit Company Profile</p>
    </div>
    <div class="profile-edit row">
        <form id="profile_form" action="<?php echo site_url('property/dashboard/save_profile'); ?>" method="post" enctype="multipart/form-data">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Industry: <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="industry" value="<?php echo $client_info->industry; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Type of Business Entity <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="bussiness_type" value="<?php echo $client_info->bussiness_type; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Established In: <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="established_date" value="<?php echo $client_info->established_date; ?>">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>No. of Employees <span class="required">*</span></label>
                    <input type="number" step="1" placeholder="" class="form-control" name="employees" value="<?php echo $client_info->employees; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="input-group image-preview form-group">
                    <label>Profile Image: <span class="required">*</span></label>
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
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="input-group image-preview form-group">
                    <label>Company Logo Image: <span class="required">*</span></label>
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

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Contact Phone: <span class="required">*</span></label>
                    <input type="text" placeholder="+99 333 1234567" class="form-control" name="phone" value="<?php echo $client_info->phone; ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Contact Email: <span class="required">*</span></label>
                    <input placeholder="" class="form-control" type="email" name="contact_email" value="<?php echo $client_info->contact_email; ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Company Country: </label>
                    <input type="text" class="form-control" readonly value="Malaysia">
                </div>

            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Company City: <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="city" value="<?php echo $client_info->city; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Your Company Name: <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="company_name" value="<?php echo $client_info->company_name; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Company Address <span class="required">*</span></label>
                    <input type="text" placeholder="" class="form-control" name="address" value="<?php echo $client_info->address; ?>">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>About Company <span class="required">*</span></label>
                    <textarea name="about_company" id="about_company"><?php echo $client_info->about_company; ?></textarea>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <button class="btn btn-default pull-right" id="save_profile"> Save Profile <i class="fa fa-angle-right"></i></button>
            </div>

            <input type="hidden" name="user_id" value="<?php echo $client_info->user_data_id;?>">
        </form>
    </div>
</div>
<script>
    $(function () {
        $(".questions-location").select2();

        $("#save_profile").click(function () {
            $("#profile_form").validate({
                rules: {
                    industry: "required",
                    bussiness_type: "required",
                    established_date: "required",
                    employees: "required",
                    phone: "required",
                    city: "required",
                    company_name: "required",
                    address: "required",
                    contact_email: "required",
                },
                errorPlacement: function (error, element) {
                }
            });

        });


    });
</script>
<!-- CK-EDITOR -->
<script src="<?php echo ASSETS_ROOT; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('about_company');
</script>