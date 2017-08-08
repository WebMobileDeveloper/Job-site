
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Profile detail</p>
        </div>
        <dl>
            <dt>Your name:</dt>
            <dd><?php echo $client_info->fullname; ?></dd>

            <dt>Email:</dt>
            <dd><?php echo $client_info->email_address; ?></dd>

            <dt>Phone:</dt>
            <dd><?php echo $client_info->accountPhone; ?></dd>

            <dt>Country:</dt>
            <dd><?php echo $this->countries[$client_info->accountCountry]; ?></dd>

            <dt>City:</dt>
            <dd><?php echo $client_info->accountCity; ?></dd>

            <dt>Address:</dt>
            <dd><?php echo $client_info->accountAddress; ?></dd>

            <dt>Registered Date:</dt>
            <dd> <?php echo substr($client_info->registered_date,0,10); ?></dd>

            <dt>Post Approve Status:</dt>
            <dd>
                Job&emsp;:&emsp;<input type="checkbox" <?php echo ($client_info->job_permit=='Approved')?'checked':''; ?>  onclick="return false;">&emsp;&emsp;
                Education&emsp;:&emsp;<input type="checkbox" <?php echo ($client_info->education_permit=='Approved')?'checked':''; ?>  onclick="return false;">&emsp;&emsp;
                Property&emsp;:&emsp;<input type="checkbox" <?php echo ($client_info->property_permit=='Approved')?'checked':''; ?>  onclick="return false;">
                </dd>
        </dl>
    </div>
</div>


