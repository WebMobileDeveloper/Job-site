<div class="col-md-10 col-sm-10 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Customers</p>
        </div>

        <table id="example" class="table table-striped table-bordered display" cellspacing="0" width="100%"  >
            <thead>
            <tr >
                <th>Name</th>
                <th>Email</th>
                <th>Mobile(Phone)</th>
                <th>States</th>
                <th>City</th>
                <th>Address</th>
                <th>Register Date</th>
                <th>Approved</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $customer) {
                $acc=$customer['account'];
                $cus=$customer['customer'];
                ?>
                <tr >
                    <td><?php echo $acc->fullname ?></td>
                    <td><?php echo $acc->email_address ;?></td>
                    <td><?php echo $acc->accountPhone ;?></td>
                    <td>Malaysia</td>
                    <td><?php echo $acc->accountCity ;?></td>
                    <td><?php echo $acc->accountAddress ?></td>
                    <td><?php echo substr($acc->registered_date,0,10); ?></td>
                    <td><input type="checkbox" class="approve" <?php echo ($cus->company_permit=='Approved')?'checked':'' ?> user_data_id="<?php echo $cus->user_data_id; ?>" ></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".approve").click(function () {
            var approved=($(this).prop('checked'))?'Approved':'Non Approved';

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo site_url('admin/home/approve')?>",
                data:{ user_data_id: $(this).attr("user_data_id"), value:approved},
                success:function(response){

                }
            });
        });
        var table=$('#example').DataTable();

        table.on( 'draw', function () {
            var body = $( table.table().body() );

            body.unhighlight();
            body.highlight( table.search() );
        } );
    });





</script>
