<style>
    dd span{
        width:15%;
        display: inline-block;
        background-color: #00a7d0;
    }
</style>
<div class="col-md-10 col-sm-10 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">Dashboard</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <dl>
                <dt>Total users:</dt>
                <dd>&emsp;&emsp;Sellers&emsp; : &emsp;<?php echo $userCounts['seller']; ?>
                    &emsp;&emsp;Customers &emsp;:&emsp;<?php echo $userCounts['customer']; ?></dd>

                <dt>Total Posts:</dt>
                <dd>&emsp;&emsp;Jobs &emsp;:&emsp;<?php echo $postCounts['job']; ?>
                    &emsp;&emsp;Educations &emsp;:&emsp;<?php echo $postCounts['education']; ?>
                    &emsp;&emsp;Properties &emsp;:&emsp;<?php echo $postCounts['property']; ?></dd>

            </dl>
        </div>

    </div>
</div>


