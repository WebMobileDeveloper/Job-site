

<div class="job-short-detail"><!--
    <div class="heading-inner">
        <p class="title">Dashboard</p>
    </div>-->
    <div class="col-md-6 col-sm-6 col-xs-12">
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

    <div class="col-md-6 col-sm-6 col-xs-12">
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



