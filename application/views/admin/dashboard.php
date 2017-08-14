

<div class="job-short-detail"><!--
    <div class="heading-inner">
        <p class="title">Dashboard</p>
    </div>-->
    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
        <div class="heading-inner">
            <p class="title">total users</p>
        </div>
        <dl>
            <dt>Sellers:</dt>
            <dd><?php echo $userCounts['seller']; ?></dd>
            <dt>Customers:</dt>
            <dd><?php echo $userCounts['customer']; ?></dd>

        </dl>
    </div>

    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2" style="margin-top: 30px;">
        <div class="heading-inner">
            <p class="title">Total Posts</p>
        </div>
        <dl>
            <dt>Jobs</dt>
            <dd><?php echo $postCounts['job']; ?></dd>
            <dt>Educations</dt>
            <dd><?php echo $postCounts['education']; ?></dd>
            <dt>Properties</dt>
            <dd><?php echo $postCounts['property']; ?></dd>
        </dl>
    </div>
</div>

</div>



