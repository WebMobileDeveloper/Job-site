
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Company Profile detail</p>
        </div>
        <dl>
            <dt>Industry:</dt>
            <dd> <?php echo $client_info->industry;?></dd>

            <dt>Type of Business:</dt>
            <dd> <?php echo $client_info->bussiness_type;?></dd>

            <dt>Established In:</dt>
            <dd> <?php echo $client_info->established_date; ?></dd>

            <dt>Phone:</dt>
            <dd><?php echo $client_info->phone; ?></dd>

            <dt>Contact Email:</dt>
            <dd><?php echo $client_info->contact_email; ?></dd>

            <dt>No. of Employees:</dt>
            <dd><?php echo $client_info->employees; ?></dd>

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
        <p class="title">Some Line About Our Job Company</p>
    </div>
    <?php echo $client_info->about_company; ?>
</div>


