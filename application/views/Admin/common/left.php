
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel box-header" style="padding-bottom:45px">

            <div class="pull-left info">
                <p><?php echo $this->session->userdata('login_user_email'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="<?php echo site_url('admin/home') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo site_url('admin/user') ?>">
                    <i class="fa fa-user"></i> Users
                </a>
            </li>


    </section>
    <!-- /.sidebar -->
</aside>