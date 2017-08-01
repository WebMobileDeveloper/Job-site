<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Account | Registration Page</title>
        <?php
        define('WEB_ROOT', base_url());
        define('ASSETS_ROOT', WEB_ROOT . 'assets/admin/');
        ?>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo ASSETS_ROOT ?>plugins/iCheck/square/blue.css">
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo ASSETS_ROOT ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo ASSETS_ROOT ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo ASSETS_ROOT ?>plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {

                $(".signup_btn").click(function () {
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
                            '<?php echo site_url('admin/auth/logincheck') ?>', {email: email},
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="#"><b>Account system</b></a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="<?php echo site_url("admin/auth/signup") ?>" id="signupform" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name = "fullname" class="form-control" placeholder="Full name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="confirmpassword" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="button" class="btn btn-primary btn-block btn-flat signup_btn">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                        Google+</a>
                </div>

                <a href="<?php echo site_url("admin/auth") ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->


        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
