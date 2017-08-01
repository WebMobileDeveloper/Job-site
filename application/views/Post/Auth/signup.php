<script>
    $(document).ready(function () {

        $("#signup_btn").click(function () {
            $("#signupform").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    fullname: "required",
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
                    fullname: "Please enter fullname",

                    confirmpassword: {
                        required: "confirm input",
                        equalTo: "Password is not match"
                    },
                    password: {
                        required: "Please enter Password",
                        minlength: "Length more 5 "
                    },
                    email: {
                        required: "Please enter email address",
                        email: "Format Email address"
                    }
                }
            });
            if ($("#signupform").valid() == false) {
                $("#signupform").valid();
                return false;
            }
            var email = $("input[name=email]").val();

            $.post(
                '<?php echo site_url('job/auth/logincheck') ?>', {email: email},
                function (result) {
                    if (result.status == "duplicate") {
                        alert("Duplicated User!");
                        return false;
                    } else {
                        $("#signupform").submit();
                    }
                }, 'json'
            );

        });


    });

</script>
<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3>Registration Page</h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Registeration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="login-page light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="<?php echo site_url("job/auth/signup") ?>" id="signupform" method="post">
                    <div class="login-container">
                        <div class="loginbox">
                            <!--<div class="loginbox-title">Sign Up using social accounts</div>
                            <ul class="social-network social-circle onwhite">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="loginbox-or">
                                <div class="or-line"></div>
                                <div class="or">OR</div>
                            </div>-->
                            <div class="form-group">
                                <label>Username: <span class="required">*</span></label>
                                <input placeholder="" name="fullname" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email: <span class="required">*</span></label>
                                <input placeholder="" name="email" class="form-control" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password: <span class="required">*</span></label>
                                <input placeholder="" name="password" id="password" class="form-control" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:  <span class="required">*</span></label>
                                <input placeholder="" name="confirmpassword"  class="form-control" type="password">
                            </div>
                            <div class="loginbox-forgot">
                                <input type="checkbox"> I accept <a href="">Term and consitions?</a>
                            </div>
                            <div class="loginbox-submit">
                                <input type="button" class="btn btn-default btn-block" id="signup_btn" value="Register">
                            </div>
                            <div class="loginbox-signup"> Already have account <a href="job/auth">Sign in</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
