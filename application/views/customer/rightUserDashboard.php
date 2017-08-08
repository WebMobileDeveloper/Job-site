
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Profile detail</p>
        </div>
        <dl>
            <dt>First Name:</dt>
            <dd> <?php echo $client_info->firstName;?></dd>

            <dt>Last Name:</dt>
            <dd> <?php echo $client_info->lastName;?></dd>

            <dt>My Title:</dt>
            <dd> <?php echo $client_info->company_name;?></dd>

            <dt>Date Of Birth:</dt>
            <dd> <?php echo $client_info->established_date; ?></dd><div class="clearfix"></div>

            <dt>Phone:</dt>
            <dd><?php echo $client_info->phone; ?></dd>

            <dt>Email:</dt>
            <dd><?php echo $client_info->email_address; ?></dd>

            <dt>Last Education:</dt>
            <dd><?php echo $client_info->bussiness_type; ?></dd><div class="clearfix"></div>

            <dt>Country:</dt>
            <dd><?php echo $this->countries[$client_info->country]; ?></dd>

            <dt>City:</dt>
            <dd><?php echo $client_info->city; ?></dd>

            <dt>Address:</dt>
            <dd><?php echo $client_info->address; ?></dd>

            <dt>Approve Status:</dt>
            <dd><?php echo $client_info->company_permit; ?></dd>
        </dl>
    </div>
    <div class="heading-inner">
        <p class="title">Some Line About Me</p>
    </div>
    <?php echo $client_info->about_company; ?>
</div>


