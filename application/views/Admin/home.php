<?php
$this->load->view('admin/common/header');
$this->load->view('admin/common/left');
?>
<!-- Left side column. contains the logo and sidebar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <script>
        $(function () {
            $(".new_orders").click(function () {
                $(".new_orders_section").css("display", "block");
                $(".low_stock_section").css("display", "none");
                $(".profit_section").css("display", "none");
            });
            $(".low_stock").click(function () {
                $(".low_stock_section").css("display", "block");
                $(".new_orders_section").css("display", "none");
                $(".profit_section").css("display", "none");
            });
            $(".profit").click(function () {
                $(".profit_section").css("display", "block");
                $(".low_stock_section").css("display", "none");
                $(".new_orders_section").css("display", "none");
            });

        });
    </script>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">


            <?php
            $this->db->select("billing.*,product.product_name,sum(billing.price) as price");


            $this->db->join("product", "product.id=billing.product_name", "left");

            if ($this->session->userdata("login_user_id") != 1)
                $this->db->where("billing.user_id", $this->session->userdata("login_user_id"));
            $this->db->order_by("create_date", "desc");
            $this->db->group_by("billing.p_id");
            $new_orders = $this->db->get("billing")->result();
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo count($new_orders) ?></h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="new_orders small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <?php
            $this->db->select("*");
            if ($this->session->userdata("login_user_id") != 1)
                $this->db->where("user_id", $this->session->userdata("login_user_id"));
            $total = $this->db->get("product")->result();

            $this->db->select("*");
            if ($this->session->userdata("login_user_id") != 1)
                $this->db->where("user_id", $this->session->userdata("login_user_id"));
            $this->db->where("stock<", 20);
            $low = $this->db->get("product")->result();

            $rate = count($low) / count($total) * 100;
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $rate; ?><sup style="font-size: 20px">%</sup></h3>

                        <p>Low stock Products</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="low_stock small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <?php
            $this->db->select("*");
            $this->db->order_by("create_date", "desc");
            $this->db->where("(price - credit)>", 0);
            if ($this->session->userdata("login_user_id") != 1)
                $this->db->where("user_id", $this->session->userdata("login_user_id"));

            $profit = $this->db->get("product")->result();
            $total_profit = 0;
            foreach ($profit as $data) {
                $total_profit = $total_profit + ($data->price - $data->credit);
            }
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo "$" . $total_profit . "[" . count($profit) . "]" ?></h3>

                        <p>Profit Revenue</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="profit small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <?php
            $this->db->select("*");
            $this->db->order_by("logined_date");
//                    if($this->session->userdata("login_user_id")!=1)   $this->db->where("user_id",$this->session->userdata("login_user_id"));

            $total_customer = $this->db->get("users")->result();
            ?>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo count($total_customer) ?></h3>

                        <p>Total customer</p>
                    </div>
                    <div class="icon">

                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="total_customer small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <div class="box box-info new_orders_section">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Orders</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($new_orders as $data): ?>
                                        <tr>
                                            <td><a ><?php echo $data->invoice_id ?></a></td>
                                            <td><?php echo $data->product_name ?></td>
                                            <td><span class="label label-success">Shipped</span></td>
                                            <td>
                                                $<?php echo $data->price ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <!--                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--low_stock_section-->
                <div class="box box-info low_stock_section" style="display: none">
                    <div class="box-header with-border">
                        <h3 class="box-title">Low Stock Product</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($low as $data): ?>
                                        <tr>
                                            <td><a ><?php echo $data->product_name ?></a></td>
                                            <td><?php echo $data->stock ?></td>
                                            <td>
                                                $<?php echo $data->price ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--profit section-->
                <div class="box box-info profit_section "  style="display: none">
                    <div class="box-header with-border">
                        <h3 class="box-title">Profit Revenue</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Credit</th>
                                        <th>Price</th>
                                        <th>Profit Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($profit as $data):
                                        ?>
                                        <tr>
                                            <td><a ><?php echo $data->product_name ?></a></td>
                                            <td>$<?php echo $data->credit ?></td>
                                            <td>  $<?php echo $data->price ?></td>
                                            <td>  $<?php echo $data->price - $data->credit ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">

                        <label style="float:right">Total :  $<?php echo $total_profit ?></label>
                    </div>
                    <!-- /.box-footer -->
                </div>

                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>

                        <h3 class="box-title">Quick Email</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div>
                                <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                            <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>

            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Products</h3>
                        <?php
                        $this->db->select("*");
                        $this->db->order_by("create_date", "desc");
                        $this->db->limit(5);
                        if ($this->session->userdata("login_user_id") != 1)
                            $this->db->where("user_id", $this->session->userdata("login_user_id"));
                        $new_product = $this->db->get("product")->result();
                        ?>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <?php foreach ($new_product as $data): ?>
                                <li class="item">
                                    <div class="product-img">
                                        <!--<img src="<?php echo ASSETS_ROOT ?>dist/img/default-50x50.gif" alt="Product Image">-->
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title"><?php echo $data->product_name ?>
                                            <span class="label label-warning pull-right">$<?php echo $data->credit ?></span></a>
                                        <span class="product-description">
                                            <?php echo $data->description ?>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <!-- /.item -->

                            <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <!--<a href="javascript:void(0)" class="uppercase">View All Products</a>-->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Add new event</a></li>
                                    <li><a href="#">Clear events</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">View calendar</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Progress bars -->
                                <div class="clearfix">
                                    <span class="pull-left">Task #1</span>
                                    <small class="pull-right">90%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Task #2</span>
                                    <small class="pull-right">70%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="clearfix">
                                    <span class="pull-left">Task #3</span>
                                    <small class="pull-right">60%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Task #4</span>
                                    <small class="pull-right">40%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->


    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <?php
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id', $this->session->userdata('login_user_id'));
            $query = $this->db->get();
            $user_data = $query->result();
            $company_id = $user_data[0]->company_permit;
            $com_arr = explode(",", $company_id);

            $companies_data = array();
            for ($i = 0; $i < count($com_arr); $i++) {
                $this->db->select("*");
                $this->db->where('id', $com_arr[$i]);
                $this->db->from('companies');
                $query = $this->db->get();
                $result = $query->result();
                $companies_data[$i] = array
                    (
                    'id' => $result[0]->id,
                    'company_name' => $result[0]->company_name,
                    'business_type' => $result[0]->business_type,
                    'city' => $result[0]->city,
                    'phone' => $result[0]->phone,
                    'email' => $result[0]->email,
                    'description' => $result[0]->description,
                    'currency' => $result[0]->currency,
                );
            }

            for ($i = 0; $i < count($companies_data); $i++) :

                $this->db->select('accounts.*,account_types.account_type,account_natures.account_nature');

                $this->db->join('account_types', 'account_types.id = accounts.ac_type_id', 'left');
                $this->db->join('account_natures', 'account_natures.id=accounts.ac_nature_id', 'left');
                $this->db->where('accounts.company_id', $companies_data[$i]['id']);
                $this->db->from('accounts');

//            $this->db->where('accounts.id', $id);
                $query = $this->db->get();
                $result = $query->result();
                $account_data = Array();
                foreach ($result as $ledger) {
                    $ac_id = $ledger->id;
                    //credit and debit sum get
                    $this->db->select("SUM(credit) as credit,SUM(debit) as debit");
                    $this->db->where('ac_id', $ac_id);
                    $this->db->where('entity.company_id', $companies_data[$i]['id']);
                    $this->db->from('entity');
                    $query = $this->db->get();
                    $entity_data = $query->result();

                    $account_data[] = array(
                        'id' => $ledger->id,
                        'ac_number' => $ledger->ac_number,
                        'ac_title' => $ledger->ac_title,
                        'account_type' => $ledger->account_type,
                        'account_nature' => $ledger->account_nature,
                        'credit' => $entity_data[0]->credit,
                        'debit' => $entity_data[0]->debit,
                        'balance' => $entity_data[0]->credit + $entity_data[0]->debit
                    );
                }
                $account_all_data = $account_data;
                ?>

                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo $companies_data[$i]['company_name'] ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <!--<th>Id</th>-->
                                        <!--<th>Account Number</th>-->
                                        <th>Account Name</th>
                                        <th>Type</th>
                                        <th>Nature</th>
                                        <th>Credit</th>
                                        <th>Debit</th>
                                        <th>Balance</th>
                                    </tr>
                                    <?php
                                    $total_credit = 0;
                                    $total_debit = 0;
                                    $total_balance = 0;
                                    for ($j = 0; $j < count($account_all_data); $j++):
                                        $total_credit = $total_credit + $account_all_data[$j]['credit'];
                                        $total_debit = $total_debit + $account_all_data[$j]['debit'];
                                        $total_balance = $total_balance + $account_all_data[$j]['balance'];
                                        ?>
                                        <tr>

                                            <td><?php echo $account_all_data[$j]['ac_title'] ?></td>
                                            <td><?php echo $account_all_data[$j]['account_type'] ?></td>
                                            <td><?php echo $account_all_data[$j]['account_nature'] ?></td>
                                            <td><?php echo $account_all_data[$j]['credit'] ?></td>
                                            <td><?php echo $account_all_data[$j]['debit'] ?></td>
                                            <td><?php echo $account_all_data[$j]['balance'] ?></td>

                                        </tr>
                                    <?php endfor; ?>
                                </tbody></table>
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
            <?php endfor; ?>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('common/footer');
?>