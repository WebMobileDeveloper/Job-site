<section class="job-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                <h3>Registration Step 2</h3>
            </div>
            <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Registeration step 2</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="login-page-2 parallex register-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="<?php echo site_url("auth/signup"); ?>" id="signupform" method="post">
                    <div class="login">
                        <div class="login_title">
                            <img src="<?php echo ASSETS_ROOT; ?>images/logo.png" alt="logo" class="img-responsive center-block">
                        </div>
                        <div class="login_fields">
                            <div class="login_fields_user">
                                <div class="icon">
                                    <i class="icon-profile-male"></i>
                                </div>
                                <input placeholder="Username" name="fullname" type="text">
                            </div>
                            <div class="login_fields_user">
                                <div class="icon">
                                    <i class="icon-envelope"></i>
                                </div>
                                <input placeholder="Email" name="email" type="text">
                            </div>
                            <div class="login_fields_password">
                                <div class="icon">
                                    <i class="icon-lock"></i>
                                </div>
                                <input placeholder="Password" name="password" id="password" type="password">
                            </div>
                            <div class="login_fields_password">
                                <div class="icon">
                                    <i class="icon-lock"></i>
                                </div>
                                <input placeholder="Confirm Password" name="confirmpassword" type="password">
                            </div>
                            <input type="hidden" name="user_type" value="<?php echo $type; ?>">

                            <div class="login_fields_submit" style="text-align: center">
                                <a  id="signup_btn" class="btn btn-default login-header-btn"><i class="fa fa-user-plus"></i>Register </a>
                            </div>
                            <div class="login_fields_submit " style="text-align: right; color: gray;">
                                Already have account&nbsp;&nbsp;<a href="<?php echo site_url("auth") ?>"><span style="font-size: large; color:white;">Sign in</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


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
                '<?php echo site_url('auth/checkEmail') ?>', {email: email},
                function (result) {
                    if (result.status == "duplicate") {
                        alert("Duplicated User Email!");
                        return false;
                    } else {
                        $("#signupform").submit();
                    }
                }, 'json'
            );

        });


    });

</script>

</div>
</body>

</html>