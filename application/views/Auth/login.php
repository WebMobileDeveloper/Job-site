<script>    $(document).ready(function () {        $("#signin_btn").click(function () {            $("#signinform").validate({                rules: {                    email: {                        required: true,                        email: true                    },                    password: {                        required: true,                        minlength: 5                    }                },                messages: {                    password: {                        required: "Please enter Password",                        minlength: "Length more 5 "                    },                    email: {                        required: "Please enter email address",                        email: "Format Email address"                    }                }            });            if ($("#signinform").valid() == false) {                $("#signinform").valid();                return false;            }            var email = $("input[name=email]").val();            var password = $("input[name=password]").val();            $.post(                '<?php echo site_url('auth/login/'.$user_type) ?>', {email: email, password: password},                function (result) {                    if (result.status == "ok") {                        location.href = "<?php echo site_url('home')?>";                    }else{                        alert("email or password fail!");return false;                    }                },'json'            );        });    });</script><section class="login-page light-blue">    <div class="container">        <div class="row">            <div class="col-md-12 col-sm-12 col-xs-12">                <div class="login-container">                    <div class="loginbox">                        <form action="<?php echo site_url("auth/login/".$user_type); ?>" id="signinform" method="post">                            <!--<div class="loginbox-title">sign in using social accounts</div>                            <ul class="social-network social-circle onwhite">                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>                                <li><a href="#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>                            </ul>                            <div class="loginbox-or">                                <div class="or-line"></div>                                <div class="or">OR</div>                            </div>-->                            <div class="form-group">                                <label>Email: <span class="required">*</span></label>                                <input placeholder="" name="email" class="form-control" type="email">                            </div>                            <div class="form-group">                                <label>Password: <span class="required">*</span></label>                                <input placeholder="" name="password" class="form-control" type="password">                            </div>                            <!--<div class="loginbox-forgot">                                <a href="">Forgot Password?</a>                            </div>-->                            <div class="loginbox-submit">                                <input type="button" id="signin_btn" class="btn btn-default btn-block" value="Login">                            </div>                            <div class="loginbox-signup">                                <a href="#register.html">Sign Up With Email</a>                            </div>                        </form>                    </div>                </div>            </div>        </div>    </div></section>