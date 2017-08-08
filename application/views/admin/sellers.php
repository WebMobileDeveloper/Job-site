<div class="col-md-10 col-sm-10 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Sellers</p>
        </div>

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
                <th>Register Date</th>
                <th>Job Approved</th>
                <th>Education Approved</th>
                <th>Porperty Approved</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sellers as $seller) {
                $acc=$seller['account'];
                $job=$seller['job'];
                $edu=$seller['education'];
                $pro=$seller['property'];
                ?>
                <tr>
                    <td><?php echo $acc->fullname ?></td>
                    <td><?php echo $acc->email_address ;?></td>
                    <td><?php echo $acc->accountPhone ;?></td>
                    <td><?php echo $this->countries[$acc->accountCountry]; ?></td>
                    <td><?php echo $acc->accountCity ;?></td>
                    <td><?php echo $acc->accountAddress ?></td>
                    <td><?php echo substr($acc->registered_date,0,10); ?></td>
                    <td><input type="checkbox" class="approve" <?php echo ($job->company_permit=='Approved')?'checked':'' ?> user_data_id="<?php echo $job->user_data_id; ?>" ></td>
                    <td><input type="checkbox" class="approve" <?php echo ($edu->company_permit=='Approved')?'checked':'' ?> user_data_id="<?php echo $edu->user_data_id; ?>" ></td>
                    <td><input type="checkbox" class="approve" <?php echo ($pro->company_permit=='Approved')?'checked':'' ?> user_data_id="<?php echo $pro->user_data_id; ?>" ></td>
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
        $('#example').DataTable();

    });
</script>
