<style>
    table tr td {
        valign: bottom !important;
    }
</style>

<div class="job-short-detail">
    <div class="heading-inner">
        <p class="title">Payment</p>
    </div>

    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Apply Date</th>
            <th>Job<br>Approved</th>
            <th>Education<br>Approved</th>
            <th>Porperty<br>Approved</th>
            <th>Payment<br>Method</th>
            <th>Bank Name</th>
            <th>Bank Slip</th>
            <th>Package</th>
            <th>Payment<br>Detail/Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sellers as $seller) {
            $acc = $seller['account'];
            $job = $seller['job'];
            $edu = $seller['education'];
            $pro = $seller['property'];
            ?>
            <tr id="<?php echo $acc->id; ?>">
                <td><?php echo $acc->fullname; ?></td>
                <td><?php echo $acc->email_address; ?></td>
                <td><?php echo substr($acc->registered_date, 0, 10); ?></td>
                <td>
                    <span><?php echo $job->approve_date; ?></span>
                </td>
                <td>
                    <span><?php echo $edu->approve_date; ?></span>
                </td>
                <td>
                    <span><?php echo $pro->approve_date; ?></span>
                </td>
                <td><?php echo $acc->payment_method; ?></td>
                <td><?php echo $acc->bank; ?></td>
                <td><?php
                    if($acc->slip_name!=''){?>
                        <a class="btn btn-danger" target="_blank" style="font-size: 12px;padding: 2px;" href="<?php echo ASSETS_ROOT; ?>bank_slip/<?php echo $acc->slip_name;?>"> Download </a>
                    <?php } ?></td>
                <td><?php echo $acc->package; ?> days</td>
                <td>
                    <a class="edit-payment" detail-data="<?php echo $acc->id; ?>"><i class="fa fa-edit"></i> </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<div class="modal fade apply-job-modal" id="payment-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body contact-form-container">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                <div class="job-modal">
                    <h2>Want To Edit Payment Sections?</h2>
                </div>
                <form method="post" id="job-form" enctype="multipart/form-data" action="<?php echo site_url("admin/home/savePayment"); ?>">
                    <div class="row clearfix">

                        <div class=" col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Name:<input type="text" class="form-control" id="name" value="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Email:<input type="text" class="form-control" id="email" value="" readonly>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Payment Method:
                                <select name="payment_method" class="form-control" id="payment_method">
                                    <option value="Cash">Cash</option>
                                    <option value="Bank">Bank</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Bank Name:
                                <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Input Bank name">
                            </div>
                        </div>
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            Bank Slip:
                            <div class="input-group image-preview form-group">
                                <input type="text" placeholder="Upload Bank Slip" class="form-control image-preview-filename slip" disabled="disabled" id="bankslip_txt">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear slip" target="slip" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input slip">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title slip">Browse</span>
                                        <input type="file" accept="file_extension" name="slip" id="bankslip"/>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Package:
                                <select name="package" id="package" class="form-control">
                                    <option value="10">10 Days</option>
                                    <option value="30">30 Days</option>
                                    <option value="60">60 Days</option>
                                    <option value="special">Special</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                Special Days:
                                <input type="number" class="form-control" name="special" id="special" placeholder="input special package days">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                Note:
                                <textarea class="form-control" name="note" id="note" placeholder="input note"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-12">
                            <div class="text-center">
                                <button id="save" class="btn btn-default ">&emsp;Save&emsp;</button>
                            </div>
                        </div>

                        <input type="hidden" id="user_id" value="" name="id">
                        <input type="hidden" name="modalExt" id="modalExt" value="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var bankName = $("#bank_name");
        var package = $("#package");
        var special = $("#special");
        var bankslip=$("#bankslip");

        $("#payment-form").submit(function (e) {
            e.preventDefault();
        });
        var table = $('#example').DataTable();

        table.on('draw', function () {
            var body = $(table.table().body());

            body.unhighlight();
            body.highlight(table.search());
        });
        $("#payment_method").change(function () {
            bankName.attr("readonly", !bankName.attr("readonly"));
            bankName.val("");
        });
        package.change(function () {
            special.attr("readonly", !special.attr("readonly"));
            special.val("");
        });

        $(".edit-payment").click(function (e) {
            e.preventDefault();
            seller_id = $(this).attr("detail-data");
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '<?php echo site_url("admin/home/getSellerData"); ?>', // the url where we want to POST
                data: {id: seller_id}, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true
            }).done(function (data) {
                if (data) {
                    $("#name").val(data.fullname);
                    $("#email").val(data.email_address);
                    $("#payment_method").val(data.payment_method);

                    if (data.payment_method === 'Bank') {
                        bankName.val(data.bank);
                        bankName.attr("readonly", false);
                    } else {
                        bankName.attr("readonly", true);
                        bankName.val("");
                    }
                    if (data.package == 10 || data.package == 30 || data.package == 60) {
                        package.val(data.package);
                        special.attr("readonly", true);
                        special.val('');
                    } else {
                        package.val('special');
                        special.attr("readonly", false);
                        special.val(data.package);
                    }

                    $("#user_id").val(data.id);
                    if(data.slip_name!=''){
                        console.log(data.slip_name);
                        $("#bankslip_txt").val('Already exist uploaded bank slip.');
                    }else{
                        $("#bankslip_txt").val('');
                    }
                    $("#note").val(data.note);
                    $("#payment-modal").modal();
                }
            });
        });

        $("#save").click(function (e) {
            e.preventDefault();
            var ext = getFileExtension2(bankslip.val());
            if ($("#payment_method").val() == 'Bank' && bankName.val() == '') {
                alert("Select bank name, please.");
                return false;
            }
            if ($("#payment_method").val() == 'Bank' && bankslip.val() != '') {
                if (ext == 'pdf' || ext == 'doc' || ext == 'docx') {
                    $("#modalExt").val(ext);
                } else {
                    alert("You must upload word or pdf file for bank slip!\n\n Select again please.");
                    return false;
                }
            }
            if ($("#package").val() == 'special' && special.val() == '') {
                alert("Select special days, please.");
                return false;
            }
            if (!confirm("Are you sure change payment items?")) {
                return false;
            }
            var package_data = package.val();
            if (package_data === 'special') {
                package_data = special.val();
            }
            /*$.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '< ?php echo site_url("admin/home/savePayment"); ?>', // the url where we want to POST
                //data: {id: $("#user_id").val(), payment_method: $("#payment_method").val(), bank: bankName.val(), package: package_data}, // our data object
                data: $("#job-form").serialize(), // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true
            }).done(function (data) {
                var tr = $("#" + $("#user_id").val());
                tr.find("td:nth-child(7)").html($("#payment_method").val());
                tr.find("td:nth-child(8)").html(bankName.val());
                tr.find("td:nth-child(9)").html(package_data + " days");
                $("#payment-modal").modal('hide');
            });*/
            $("#job-form").submit();
        });

    });

    function getFileExtension2(filename) {
        return filename.split('.').pop();
    }
</script>
