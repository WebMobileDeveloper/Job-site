<div class="col-md-10 col-sm-10 col-xs-12">
    <div class="job-short-detail">
        <div class="heading-inner">
            <p class="title">All Featured Posts</p>
        </div>

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Post Category</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Post Type</th>
                <th>Post Date</th>
                <th>Expire Date</th>
                <th>Featured</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($posts as $post) {
                //$acc=$customer['account'];
                //$cus=$customer['customer'];
                ?>
                <tr>
                    <td><?php echo $post->title; ?></td>
                    <td><?php echo $post->company_type; ?></td>
                    <td><?php echo $post->company_name; ?></td>
                    <td><?php echo $this->countries[$post->country]; ?></td>
                    <td><?php echo $post->phone; ?></td>
                    <td><?php echo $this->job_types[$post->type]; ?></td>
                    <td><?php echo substr($post->posted_date, 0, 16); ?></td>
                    <td><?php echo substr($post->expire_date, 0, 10); ?></td>
                    <td><input type="checkbox" class="approve" <?php echo ($post->featured == '1') ? 'checked' : '' ?> post_id="<?php echo $post->post_id; ?>"></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".approve").click(function () {
            var featured = ($(this).prop('checked')) ? 1 : 0;
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "<?php echo site_url('admin/home/feature')?>",
                data: {post_id: $(this).attr("post_id"), value: featured},
                success: function (response) {

                }
            });
        });
        $('#example').DataTable();

    });
</script>
