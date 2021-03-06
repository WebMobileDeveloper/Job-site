<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <title>Opportunities A Mega Job Board Template</title>
    <link rel="icon" href="<?php echo ASSETS_ROOT; ?>images/favicon.ico" type="image/x-icon">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/bootstrap.min.css">

    <!-- JQUERY MENU -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/mega_menu.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/animate.min.css">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/owl.style.css">

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/style.css">

    <!-- FOR THIS PAGE ONLY -->
    <link href="<?php echo ASSETS_ROOT; ?>css/select2.min.css" rel="stylesheet"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_ROOT; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_ROOT; ?>css/et-line-fonts.css" type="text/css">

    <!-- Google Fonts -->
    <link href="<?php echo ASSETS_ROOT;?>css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ASSETS_ROOT;?>css/font2.css" rel="stylesheet" type="text/css">

    <!-- JavaScripts -->
    <script src="<?php echo ASSETS_ROOT; ?>js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo ASSETS_ROOT;?>js/html5shiv.min.js"></script>
    <script src="<?php echo ASSETS_ROOT;?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="page category-page">
    <div id="spinner">
        <div class="spinner-img"><img alt="Opportunities Preloader" src="<?php echo ASSETS_ROOT; ?>images/loader.gif"/>
            <h2>Please Wait.....</h2>
        </div>
    </div>


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
    <!--
    <section class="login-page light-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="" id="signupform" method="post">
                        <div class="login-container">
                            <div class="loginbox">
                                <div class="loginbox-title">Sign Up using social accounts</div>
                                <ul class="social-network social-circle onwhite">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <div class="loginbox-or">
                                    <div class="or-line"></div>
                                    <div class="or">OR</div>
                                </div>
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
                                    <label>Confirm Password: <span class="required">*</span></label>
                                    <input placeholder="" name="confirmpassword" class="form-control" type="password">
                                </div>
                                <div class="loginbox-forgot">
                                    <input type="checkbox"> I accept <a href="">Term and consitions?</a>
                                </div>
                                <div class="loginbox-submit">
                                    <input type="button" class="btn btn-default btn-block" id="signup_btn" value="Register">
                                </div>
                                <div class="loginbox-signup"> Already have account <a href="auth/auth">Sign in</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->


    <section class="login-page-2 parallex register-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="<?php echo site_url("auth/signup");?>" id="signupform" method="post">
                        <div class="login">
                            <div class="login_title">
                                <img src="<?php echo ASSETS_ROOT; ?>images/logo-footer.png" alt="logo" class="img-responsive center-block">
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
                                    <input placeholder="Email"  name="email" type="text">
                                </div>
                                <div class="login_fields_password">
                                    <div class="icon">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <input placeholder="Password"  name="password" id="password" type="password">
                                </div>
                                <div class="login_fields_password">
                                    <div class="icon">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <input placeholder="Confirm Password" name="confirmpassword" type="password">
                                </div>
                                <div class="login_fields_password">
                                    <div class="icon">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                    <select name="user_type">
                                        <option value="customer">Customer</option>
                                        <option value="seller">Seller</option>
                                    </select>
                                    <!--<input placeholder="Confirm Password" name="confirmpassword" type="password">-->
                                </div>
                                <div class="login_fields_submit">
                                    <input value="Register" class="btn btn-default" id="signup_btn" type="button">
                                    <div class="forgot">
                                        Already have account <a href="<?php echo site_url("auth")?>">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery-3.1.1.min.js"></script>

    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/jquery.validate.min.js"></script>
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

    <!-- CORE JS -->
    <script type="text/javascript" src="<?php echo ASSETS_ROOT; ?>js/custom.js"></script>

</div>
</body>

</html>


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
