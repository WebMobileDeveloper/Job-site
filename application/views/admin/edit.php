<div class="job-short-detail">
    <div class="heading-inner">
        <p class="title">Account Setting</p>
    </div>
</div>
<form id="email-form" class="setting-form" method="post" action="<?php echo site_url('admin/auth/change_email'); ?>" autocomplete="off">
    <div class="profile-edit row">
        <div class="col-md-10 col-sm-10">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Current Email </label>
                    <input type="text" class="form-control" readonly value="<?php echo $this->admin_user_email; ?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>New Email </label>
                    <input type="email" class="form-control" id="email" name="email" value="">
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <button class="btn btn-default" id="change-email">Change</button>
        </div>
    </div>
</form>
<form id="pass-form" class="setting-form" method="post" action="<?php echo site_url('admin/auth/change_pass'); ?>" autocomplete="off">
    <div class="clearfix"></div>
    <div class="profile-edit row">
        <div class="col-md-10 col-sm-10">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>New Password </label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Confirm Password </label>
                    <input type="password" class="form-control" name="confirmpassword">
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <button class="btn btn-default" id="change-password">Change</button>
        </div>

    </div>
</form>

<style>
    .error {
        font-weight: 400;
        font-size: 14px;
    }

    .profile-edit input.form-control {
        text-transform: none;
    }

</style>
<script>
    $(document).ready(function () {

        $('.setting-form').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
        $("#change-email").click(function () {
            $("#email-form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                }/*,
                 errorPlacement: function (error, element) {
                 }*/
            });
            if ($("#email-form").valid() == false) {
                $("#email-form").valid();
                return false;
            }

            if (!confirm("Are you sure change email?")) {
                return false;
            }
        });
        $("#change-password").click(function () {
            $("#pass-form").validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirmpassword: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    confirmpassword: {
                        required: "Please enter confirm Password",
                        equalTo: "Password is not match"
                    },
                    password: {
                        required: "Please enter Password",
                        minlength: "Length more 5 "
                    }
                }/*,
                 errorPlacement: function (error, element) {
                 }*/
            });
            if ($("#pass-form").valid() == false) {
                $("#pass-form").valid();
                return false;
            }
            if (!confirm("Are you sure change password?")) {
                return false;
            }
        });


    });
</script>


