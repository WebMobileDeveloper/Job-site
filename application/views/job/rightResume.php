<script>
    $(function () {
        $(".decline-user").click(function (e) {
            if(!confirm('Are you sure decline this customer?')){
                e.preventDefault();
            }
        });
    });

</script>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">Resumes on Network Engineer Job</p>
    </div>
    <div class="resume-list">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>Sr. #</th>
                    <th>Applicant Name</th>
                    <th>Download</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                foreach ($allResume as $resume) { ?>

                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td>
                            <h5><?php echo $resume->firstName; ?> <?php echo $resume->lastName; ?></h5></td>
                        <td><a class="btn btn-primary" href="<?php echo ASSETS_ROOT; ?>resume/<?php echo $resume->resume;?>"> Download </a></td>
                        <td><a class="btn btn-danger decline-user" href="<?php echo site_url('job/dashboard/decline/'.$resume->applied_id.'/'.$resume->applied_post_id); ?>"> Decline </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
