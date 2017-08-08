
<script>
    $(function () {
        $(".hire-user").click(function (e) {
            if(!confirm('Are you sure hire this customer?')){
                e.preventDefault();
            }
        });
        $(".decline-user").click(function (e) {
            if(!confirm('Are you sure decline this customer?')){
                e.preventDefault();
            }
        });
    });
</script>
<section class="categories-list-page light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">

                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <h4>Count of applied customers : <?php echo count($appliedUserData); ?></h4>
                    <?php foreach ($appliedUserData as $user) { ?>
                        <div class="profile-content">
                            <div class="card">
                                <div class="firstinfo">
                                    <!--<img src="images/users/11.jpg" alt="" class="img-circle img-responsive"/>-->
                                    <img src="<?php echo ASSETS_ROOT; ?>profile image/client/logo_image/<?php echo $user->user_id; ?>.jpg"
                                         onerror="this.src = '<?php echo ASSETS_ROOT; ?>images/admin.jpg'" class="img-circle img-responsive">
                                    <div class="profileinfo">
                                        <h1>
                                            <?php if($user->hired == 1){?>
                                                <i class="fa fa-thumbs-up pull-right" style="color:green;" aria-hidden="true">&nbsp;Hired</i>
                                            <?php }?>
                                            <?php if($user->hired == 2){?>
                                                <i class="fa fa-thumbs-down pull-right" style="color:lightslategray;" aria-hidden="true">&nbsp;Declined</i>
                                            <?php }?>
                                            <a href="#"> <?php echo $user->firstName?>  <?php echo $user->lastName?></a>
                                        </h1>
                                        <h3><?php echo $user->company_name?></h3>
                                        <?php echo substr($user->about_company,0,200); ?>...
                                        <div class="profile-skills">
                                            <?php   $skills=explode(',',$user->skills);
                                            foreach ($skills as $skill){
                                                if($skill!=''){
                                                    ?>
                                                    <span> <?php echo $skill; ?> </span>
                                                <?php }}?>
                                        </div>
                                        <div class="hire-btn">
                                            <?php if($user->hired==0){?>
                                                <a href="<?php echo site_url('job/post/hire/'.$user->applied_id.'/'.$user->applied_post_id); ?>" class="btn-default hire-user">
                                                    <i class="fa fa-location-arrow"></i> Hire Me</a>
                                                <a href="<?php echo site_url('job/post/decline/'.$user->applied_id.'/'.$user->applied_post_id); ?>" class="btn-default decline-user">
                                                    <i class="fa fa-location-arrow"></i> Decline</a>
                                                <a href="<?php echo ASSETS_ROOT; ?>resume/<?php echo $user->resume;?>" class="btn-default"> <i class="fa fa-location-arrow"></i> Resume</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>

