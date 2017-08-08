<script>
    $(function () {
        $(".delete-resume").click(function (e) {
            if (!confirm('Are you sure delete this resume?')) {
                e.preventDefault();
            }
        });
    });
</script>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="heading-inner first-heading">
        <p class="title">My Resumes</p>
        <a href="javascript:void(0)"><span class="pull-right add-button btn-default" data-toggle="modal" data-target=".add-resume-modal"> Add New Resume</span></a>
    </div>
    <div class="resume-list">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>Sr. #</th>
                    <th>Resume Title</th>
                    <th>Download</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;
                foreach ($allResume as $resume) { ?>

                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td>
                            <h5><?php echo $resume->resume_title; ?></h5></td>
                        <td><a class="btn btn-primary" href="<?php echo ASSETS_ROOT; ?>user_resume/<?php echo $resume->resume_file; ?>"> Download </a></td>
                        <td><a class="btn btn-danger delete-resume" href="<?php echo site_url('customer/customerDashboard/delete_resume/' . $this->login_user_id .
                                '/' . $resume->resume_id.'/'.$resume->resume_file); ?>"> Delete </a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="modal add-resume-modal" tabindex="-1" role="dialog" aria-labelledby="" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <form method="post" id="resume-form" enctype="multipart/form-data" action="<?php echo site_url('customer/customerDashboard/save_resume'); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Resume</h4>
                </div>

                <div class="modal-body">
                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Resume Title" required >
                        </div>
                    </div>

                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group image-preview form-group">
                            <input type="text" placeholder="Upload Resume" class="form-control image-preview-filename resume1" disabled="disabled">
                            <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear resume1" target="resume1" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input resume1">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title resume1">Browse</span>
                                        <input type="file" accept="file_extension" name="resume1" id="modalfile1"/>
                                        <input type="hidden" name="modalExt1" id="modalExt1" value="">
                                    </div>
                                </span>
                        </div>
                    </div>

                    <p>Only pdf and doc files are accepted</p>
                </div>

                <input type="hidden" name="user_id" value="<?php echo $this->login_user_id; ?>">
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-default btn-block">Save Resume</button>
                </div>
            </div>
        </form>
    </div>
</div>
