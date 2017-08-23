


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
            <dd>Malaysia</dd>

            <dt>City:</dt>
            <dd><?php echo $client_info->accountCity; ?></dd>

            <dt>Address:</dt>
            <dd><?php echo $client_info->accountAddress; ?></dd>

            <dt>Charged Count:</dt>
            <dd><?php echo $paymentData->charged_counts; ?> times</dd>

            <dt>Total Paid:</dt>
            <dd>$ <?php echo $paymentData->paid_amount; ?></dd>

            <dt>Charged Posts:</dt>
            <dd><?php echo $paymentData->charged_posts; ?> P</dd>

            <dt>Total Posts:</dt>
            <dd><?php echo $paymentData->posts; ?> P</dd>
            <?php $available=$paymentData->charged_posts-$paymentData->posts; ?>
            <dt>Available Posts:</dt>
            <dd style="font-weight: bold; color: <?php
                        if($available<5){
                            echo 'red';
                        }elseif($available<10){
                            echo 'blue';
                        }else{
                            echo '#01c801';
                        }

                        ?>"><?php echo $available; ?> P &emsp;
                <?php
                if($available<5){
                    echo 'Bad!';
                }elseif($available<10){
                    echo 'Good!';
                }else{
                    echo 'Very good!';
                }

                ?>
            </dd>

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


