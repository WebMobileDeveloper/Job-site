<?php
$this->load->view('admin/common/header');
$this->load->view('admin/common/left');
?>

    <script>
        $(document).ready(function () {


            $("#submit_form").validate({
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


        });

    </script>
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User List
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Acount user list</h3>
                        </div>
                        <form class="form-horizontal" action="<?php echo site_url('admin/user/save_user') ?>"
                              id="submit_form" method="POST" novalidate="novalidate">
                            <input type="hidden" name="user_id"
                                   value="<?php echo(isset($user_data) ? $user_data[0]->id : "") ?>"
                            <div class="form-wizard">
                                <div class="form-body">


                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Provide your account details</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Username
                                                    <span class="required" aria-required="true"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="fullname"
                                                           value="<?php echo (isset($user_data)) ? $user_data[0]->fullname : "" ?>">
                                                    <span class="help-block"> Provide your username </span>
                                                </div>
                                            </div>
                                            <?php if (!isset($user_data)): ?>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password
                                                        <span class="required" aria-required="true"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="password"
                                                               id="password">
                                                        <span class="help-block"> Provide your password. </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Confirm Password
                                                        <span class="required" aria-required="true"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control"
                                                               name="confirmpassword">
                                                        <span class="help-block"> Confirm your password </span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Email
                                                    <span class="required" aria-required="true"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="email_address"
                                                           value="<?php echo (isset($user_data)) ? $user_data[0]->email_address : "" ?>">
                                                    <span class="help-block"> Provide your email address </span>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="<?php echo site_url('admin/user') ?>" class=" btn btn-info ">
                                                <i class="fa fa-angle-left"></i> Back </a>

                                            <button type="submit" class="btn btn-info"> Submit
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
$this->load->view('admin/common/footer');
?>