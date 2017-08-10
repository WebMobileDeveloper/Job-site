<div class="row">
    <div class="col-md-12">

        <div class="portlet light bordered" id="form_wizard_1">

            <div class="portlet-body form">
                <form class="form-horizontal" action="#" id="submit_form" method="POST" novalidate="novalidate">
                    <div class="form-wizard">
                        <div class="form-body">


                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Provide your account details</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Username
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="username">
                                            <span class="help-block"> Provide your username </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Password
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="password" id="submit_form_password">
                                            <span class="help-block"> Provide your password. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Confirm Password
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="rpassword">
                                            <span class="help-block"> Confirm your password </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="email">
                                            <span class="help-block"> Provide your email address </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Provide your profile details</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Fullname
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="fullname">
                                            <span class="help-block"> Provide your fullname </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phone Number
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="phone">
                                            <span class="help-block"> Provide your phone number </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="radio-list">
                                                <label>
                                                    <div class="radio"><span><input type="radio" name="gender" value="M" data-title="Male"></span></div> Male </label>
                                                <label>
                                                    <div class="radio"><span><input type="radio" name="gender" value="F" data-title="Female"></span></div> Female </label>
                                            </div>
                                            <div id="form_gender_error"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Address
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="address">
                                            <span class="help-block"> Provide your street address </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City/Town
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="city">
                                            <span class="help-block"> Provide your city or town </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Remarks</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="3" name="remarks"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="block">Provide your billing and credit card details</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Holder Name
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="card_name">
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Number
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="card_number">
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CVC
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="" class="form-control" name="card_cvc">
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Expiration(MM/YYYY)
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date">
                                            <span class="help-block"> e.g 11/2020 </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payment Options
                                            <span class="required" aria-required="true"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="checkbox-list">
                                                <label>
                                                    <div class="checker"><span><input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."></span></div> Auto-Pay with this Credit Card </label>
                                                <label>
                                                    <div class="checker"><span><input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."></span></div> Email me monthly billing </label>
                                            </div>
                                            <div id="form_payment_error"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm your account</h3>
                                    <h4 class="form-section">Account</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Username:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="username"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="email"> </p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Profile</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Fullname:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="fullname"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="gender"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phone:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="phone"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Address:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="address"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City/Town:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="city"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Country:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="country"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Remarks:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="remarks"> </p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Billing</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Holder Name:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_name"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Number:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_number"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CVC:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_cvc"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Expiration:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_expiry_date"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payment Options:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="payment[]"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                        <i class="fa fa-angle-left"></i> Back </a>
                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:;" class="btn green button-submit" style="display: none;"> Submit
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>