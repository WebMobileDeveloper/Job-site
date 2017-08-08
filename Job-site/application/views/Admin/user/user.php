<?php
$this->load->view('admin/common/header');
$this->load->view('admin/common/left');
?>

<script >
    function edit(obj) {
        var id = obj.parent().parent().attr("item_id");
        location.href = "<?php echo site_url('admin/user/edit/') ?>" + id;
    }
    function del(obj) {
        var id = obj.parent().parent().attr("item_id");
        location.href = "<?php echo site_url('admin/user/delete/') ?>" + id;
    }
</script>
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User List
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Acount user list</h3>
                    </div>

                  
                    <div class="box-body">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" style="width: 80px;">No</th>
                                            <th class="sorting" style="width: 200px;">Name</th>
                                            <th class="sorting" >Email</th>
                                            <th class="sorting" style="width: 200px;">Register Date</th>
                                            <th class="sorting" style="width: 200px;">Recent Login Date</th>
                                            <th class="sorting" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $k = 0;
                                        foreach ($login_users as $tr) {
                                            $k++;
                                            ?>
                                            <tr class="gradeA odd" item_id = "<?php echo $tr->id ?>" >
                                                <td class="sorting_1"><?php echo $k ?></td>
                                                <td class=" "><?php echo $tr->fullname ?></td>
                                                <td class=" "><?php echo $tr->email_address ?></td>
                                                <td class=" "><?php echo $tr->registered_date ?></td>
                                                <td class=" "><?php echo $tr->logined_date ?></td>
                                                <td class=" ">
                                                    <a onclick="edit($(this))" class="btn btn-primary btn-xs edit"><i class="fa fa-edit "></i> Edit</a>
                                                    <a onclick="del($(this))" class="btn btn-danger btn-xs delete"><i class="fa fa-pencil "></i> Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
$this->load->view('admin/common/footer');
?>