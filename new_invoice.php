<?php include('include/DBclass.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Protidin Store Online Accounting Billing Inventory Management System - Purchase, Sales, Stock, Billing Software</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Protidin Store Online Accounting Billing Inventory Management System - Purchase, Sales, Stock, Billing Software." />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <link href="vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="build/css/custom.css?time=1599490066" rel="stylesheet" />
  <link href="build/css/style.css" rel="stylesheet" />
  <!-- start chosen  -->
  <link rel="stylesheet" href="vendors/chosen/chosen.css">
  <!-- end chosen -->
  <!-- datatables  -->
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css" />


  <!-- <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <script src="jquery-ui.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/client_address.js"></script>
  <script type="text/javascript" src="js/invoice_subtotal.js?id=1557063613"></script>
  <script type="text/javascript" src="js/invoice_item_total_calc.js?id=1557063613"></script>
  <script type="text/javascript" src="vendors/jQuery.print/jQuery.print.min.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Start chart.js -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>
  <!-- End chart.js -->
  <!-- start selectize -->

  <link rel="stylesheet" href="css/selectize.bootstrap3.css" type="text/css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
  <!-- End selectize -->
  <script type="text/javascript" src="vendors/moment/moment.js"></script>
  <script type="text/javascript" src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />


  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

</head>

<body style="color: black;" class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-sm-3 col-md-3 col-lg-3 left_col">
        <div class="left_col scroll-view">

          <div class="clearfix"></div>
          <div class="profile clearfix">
            <div class="profile_pic">

              <img style="height: 50px;" src="uploads/hub.png" alt="..." class="img-circle profile_img">



            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2 style="font-size: 18px;">demo</h2>
            </div>
          </div> <!-- menu profile quick info -->


          <!-- sidebar menu -->
          <div style="font-size: 15px;" id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <ul class="nav side-menu">
                <li><a href="dashboard2.php"><i class="fa fa-tachometer"></i> Dashboard </a>

                </li>

                <li><a title="কাস্টমার এবং সরবরাহকারী তৈরি এবং বিস্তারতি তথ্য দেখতে পারবেন"><i class="fa fa-edit"></i>CRM<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">



                    <li><a>Client</a>
                      <ul class="nav child_menu">


                        <li><a href="form.php">Add New Client</a></li>

                        <li><a href="contact_list.php">Client List</a></li>

                        <li><a href="group.php">Client Group</a></li>
                      </ul>
                    </li>


                    <li>
                      <a>Supplier</a>
                      <ul class="nav child_menu">

                        <li><a href="form1.php">Add Supplier</a></li>

                        <li><a href="contact_list1.php">Supplier List</a></li>

                        <li><a href="group1.php">Supplier Group</a></li>
                      </ul>
                    </li>





                  </ul>
                </li>
                <li><a title="হিসাব সংক্রান্ত যাবতীয় বিষয় "><i class="fa fa-desktop"></i> Accounts <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">

                    <li><a>Receive</a>
                      <ul class="nav child_menu">

                        <li><a href="new_diposit.php">Receive</a></li>

                        <li><a href="money_receipt.php">Money Receipt</a></li>


                      </ul>

                    </li>
                    <li><a>Expense</a>
                      <ul class="nav child_menu">

                        <li><a href="new_expense.php">Expense</a></li>

                        <li><a href="PurchPayment.php">Supplier Payment</a></li>
                      </ul>
                    </li>

                    <li> <a>Account</a>
                      <ul class="nav child_menu">

                        <li><a href="new_bank.php">Account Create</a></li>


                        <li><a href="bank_list.php">Account List</a></li>

                        <li><a href="account_bl.php">Account Balances</a></li>

                        <li><a href="trans_report.php">Account Statement</a></li>
                      </ul>
                    </li>

                    <li><a href="transfer.php">Transfer</a></li>

                    <li><a href="incom_expense.php">Profit</a></li>
                  </ul>
                </li>



                <li><a><i class="fa fa-table"></i> Bill/Invoice <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="new_invoice.php">New Invoices</a></li>

                    <li><a href="invoice_list.php">Invoices List</a></li>
                    <li><a href="invoice_return.php">Sales Return</a></li>
                    <li><a href="sales_return_report.php">Sales Return Report</a></li>

                    <!--
  <li><a href="sales_return_replace.php"></a></li>
-->


                    <!--
<li><a href="Itemslist.php"></a></li>
-->

                    <!--
  <li><a href="salesReturn.php"></a></li>
                        
                        <li><a href="Itemslist.php"></a></li>
-->


                  </ul>
                </li>

                <li><a><i class="fa fa-clone"></i>Products<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">

                    <li>
                      <a>Product</a>
                      <ul class="nav child_menu">


                        <li><a href="product.php">Products Entry</a></li>

                        <li><a href="product_list.php">Products List</a></li>


                        <li><a href="pgroup.php">Products Group</a></li>

                        <li><a href="barcodeImages.php">Products Barcode</a></li>
                      </ul>
                    </li>

                    <li><a>Purchases</a>
                      <ul class="nav child_menu">

                        <li><a href="pur_product.php">Purchases Product</a></li>

                        <li><a href="all_product1.php">Purchases Report</a></li>

                        <li><a href="all_proReturn.php">Purchases Return</a></li>

                        <li><a href="ReturnRproduct1.php">Returns Report</a></li>

                        <li><a href="all_product.php">Delete Purchases</a></li>
                      </ul>
                    </li>

                    <li>
                      <a>Stock</a>
                      <ul class="nav child_menu">


                        <li><a href="ProductStock.php">Stock Report</a></li>

                        <li><a href="ProductStock2.php?type=all">Smart Stock Report</a></li>
                      </ul>
                    </li>

                    <!--
<li><a href="productcsv_import.php"></a></li>
-->





                    <!--
 <li><a href="product1.php">Return Product</a></li>
-->
                    <!--

                      <li><a href="product_cat.php">Product Category</a></li>
-->




                    <!--
<li><a href="fixed_sidebar.php">Services</a></li>
                      <li><a href="fixed_footer.php">New Services</a></li>
-->
                  </ul>
                </li>

                <li><a><i class="fa fa-comment-alt"></i> SMS<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">


                    <li><a href="smsSentall.php">Sent All Client</a></li>

                    <li><a href="sms_group.php">Sent Group Client</a></li>

                    <li><a href="smsSentall22.php">Sent All Supplier</a></li>

                    <li><a href="sms_group1.php">Sent Group Supplier</a></li>

                    <li><a href="dueschedule.php">Add Due Schedule</a></li>

                    <li><a href="duescheList.php">Due Schedule Report</a></li>

                    <li><a href="http://sms.softhostit.com/login">SMS Balance Report</a></li>

                  </ul>
                </li>


                <li><a><i class="fa fa-user-tie"></i> Staff/Employee <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="create_staff.php">Staff add</a>
                    </li>

                    <li><a href="staff_list.php">Staff list</a>
                    </li>

                    <li><a href="staff_payment.php">Staff Payment</a>
                    </li>


                    <li><a href="staff_salary.php">Staff salary</a>
                    </li>

                    <li><a href="staff_salary_report.php">Staff salary report</a>
                    </li>

                    <li><a href="staff_attendance.php">Staff attendance</a>
                    </li>


                    <li><a href="staff_attendance_report.php">Staff attendance report</a>
                    </li>

                  </ul>
                </li>


                <li><a><i class="fa fa-shopping-basket"></i> Office Purchase <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">



                    <li><a href="PurchEntry.php">Purchase Entry</a></li>

                    <li><a href="PurchReport.php">Purchase Report</a></li>

                    <li><a href="PurchSupplier.php">Supplier Report</a></li>

                    <li><a href="PurchDuePayment.php">Due Report</a></li>
                  </ul>
                </li>
                <!--
                    <li><a><i class="fa fa-clone"></i>Services <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="service_view.php">View Services</a></li>  
                      <li><a href="service_new.php">Add New Service</a></li>
                     
                       
<li><a href="fixed_sidebar.php">Services</a></li>
                      <li><a href="fixed_footer.php">New Services</a></li>

                    </ul>
                  </li> -->

                <li><a><i class="fa fa-bug"></i> Due Reports<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="allduereport.php">All Due </a></li>

                    <li><a href="cusduereport.php">Customer Wise</a></li>
                    <li><a href="Groupuereport.php">Group Wise</a></li>
                  </ul>
                </li>



                <li><a><i class="fa fa-bug"></i>Sales Reports<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">


                    <li><a href="dailySalesR.php">Daily Sales</a></li>
                    <!--
 <li><a href="trans_report.php">Daily Collection Report</a></li>
-->


                    <li><a href="client_ripor.php">Customer Wise</a></li>

                    <li><a href="group_ripor.php">Group Wise</a></li>

                    <!--
   <li><a href="#">Income Reports </a></li>
                      <li><a href="#">Expense Reports</a></li>
-->
                    <!--

                      <li><a href="incom_expense.php">Income Vs Expense</a></li>
-->

                    <!--

                      <li><a href="all_expense.php">All Expense</a></li>
-->


                    <li><a href="product_riport.php">Product Wise</a></li>


                    <li><a href="pGroup_riport.php">Product Group Wise</a></li>



                  </ul>
                </li>

                <li><a><i class="fa fa-bug"></i>Deposit Reports<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">



                    <li><a href="all_income.php">All Deposit </a></li>


                    <li><a href="reciveBycat.php">Deposit By Categories</a></li>


                    <li><a href="allIncomeCus.php">Deposit By Clients</a></li>


                    <li><a href="deposit_by_group.php">Deposit By Group</a></li>

                    <li><a href="deposit_cat_all.php">All Categories</a></li>

                  </ul>
                </li>

                <li><a><i class="fa fa-bug"></i>Expense Report <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">



                    <li><a href="all_expense.php">All Expense</a></li>


                    <li><a href="expenseByCatagory.php">Expense By Categories</a></li>


                    <li><a href="ExpanceBySupplier.php">Supplier Payment </a></li>

                    <li><a href="expance_cat_all.php">All Expense Categories</a></li>


                    <li><a href="expense_sub_cat_all.php">All Expense Sub Categories</a></li>

                  </ul>
                </li>


                <li>
                  <a><i class="fa fa-wrench"></i>Setting <span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>
                  <ul class="nav child_menu">




                    <li><a href="income_cat.php">Income Categories</a></li>

                    <li><a href="income_subcat.php">Income SubCategories</a></li>

                    <li><a href="expen_cat.php">Expense Categories</a></li>

                    <li><a href="expense_subcat.php">Expense SubCategories</a></li>
                    <li><a href="shortcut_menu_manage.php">Manage Shortcut Menu</a></li>


                    <li><a href="payment_meth.php">Payment Method</a></li>


                    <li><a href="com_info.php">Company Information</a></li>


                    <li><a href="setting.php">User Permissions</a></li>

                    <!--

  <li><a href="setting1.php">Create Staff Account</a></li>
-->


                    <li><a href="BankName.php">Bank Name</a></li>

                  </ul>

                </li>


                <li><a href="backup_db.php"><i class="fa fa-database"></i>&nbsp;DB Backup<span style="font-size: 18px; color: white;" class="fa fa-plus-circle"></span></a>

                </li>
                <li><a href="server_info.php"><i class="fa fa-bug"></i>Server Info</a></li>

                <li style="background-color: #EF9234;"><a target="_blank" href="http://hubit.tech/"><i class="fa fa-headset"></i> HUB IT Support</a></li>

                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                </li>


              </ul>
            </div>

          </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>

        </div>
      </div>

      <div class="top_nav">
        <div class="nav_menu" style="">
          <nav>
            <div class="nav toggle">
              <a style="" id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <p style="display: inline-block; padding: 0px; margin: 0px;" class="company_name_navbar col-md-3">Protidin Store </p>


            <ul style=" z-index: 1;" class="nav navbar-nav navbar-right nav_bar_icons menu_right_li">
              <li class="new_invoice_top_menu_link_li">
                <a style="color: white;" href="new_invoice.php" class="new_bill_btn btn btn-success btn-sm btn-xs"><img src="icon/bill.png" width="20" /><span class="new_bill">&nbsp;New Invoice/Bill <i class="fa fa-plus-square"></i></span></a>


              </li>
              <li>
                <a style="color: white;" class="new_receive_btn btn btn-info btn-sm" data-toggle="modal" data-target="#new_deposit_modal"><img src="icon/income.png" width="20" /><span class="new_receive"> New Receive <i class="fa fa-plus-square"></i></span></a>

              </li>
              <li>
                <a style="color: white;" class="new_expense_btn btn btn-danger btn-sm" data-toggle="modal" data-target="#new_expense_modal_shortcut"><img src="icon/2budget.png" width="20" /><span class="new_expense"> New Expense <i class="fa fa-plus-square"></i></span></a>
              </li>

              <li class="dropdown language_dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i style="545454" class="fa fa-language"></i>&nbsp;<span style="545454" class="language_menu_nav_bar">বাংলায় দেখতে</span>&nbsp;<span style="545454" class=" fa fa-angle-down language_angle_down"></span>
                </a>
                <ul style="width: 150px;" class="dropdown-menu list-unstyled msg_list" role="menu">


                  <li><a href="bangla/new_invoice.php">বাংলা</a></li>

                </ul>
              </li>


              <li class="dropdown stock_warning_load">
                &nbsp;
              </li>
              <script type="text/javascript">
                $(function() {
                  $('.stock_warning_load').load('stock_warning_ajax.php');
                });
              </script>
              <li class="dropdown notification_dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <span class="badge bg-white">0</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list notification_dropdown_container" role="menu">


                  <li><a href="allOrder.php">See All Order List</a></li>

                </ul>
              </li>


              <li class="billing_li">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="uploads/hub.png" alt="" /><span class="billing_nav_topbar_span" style="545454">Billing</span>
                  <span class=" fa fa-angle-down billing_angle_down" style="545454"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right profile_settings_dropdown_meun">

                  <li><a href="com_info.php"><i class="fa fa-user"></i> Profile</a></li>



                  <li>
                    <a href="setting.php">
                      <!--
<span class="badge bg-red pull-right">50%</span>
-->
                      <span><i class="fa fa-cogs"></i> Settings</span>
                    </a>
                  </li>

                  <!--
 <li><a href="javascript:;">Help</a></li>
-->
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>

            </ul>

          </nav>
        </div>
      </div>

      <div class="right_col" role="main">

        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel ">
              <div class="x_title">
                <h2><i class="fa fa-file-invoice"></i> New Invoice</h2>
                <div class="clearfix"></div>
              </div>

              <div class="x_content" style="background-color: white;">

                <?php 
                $msg = "";
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                  $totals = $_REQUEST['payment']+$_REQUEST['invoice_due_total'];
                  $fields = "`client_id`, `invoice_number`, `product_id`, `discount`, `transport`, `account`, `in_cat`, `payment`, `invoice_due_total`, `vat`, `total`";
                  $values = "'".$_REQUEST['client_id']."', '".$_REQUEST['invoice_number']."', '".$_REQUEST['item_ids']."', '".$_REQUEST['discount']."',
                   '".$_REQUEST['transport']."', '".$_REQUEST['account']."', '".$_REQUEST['in_cat']."',
                    '".$_REQUEST['payment']."', '".$_REQUEST['invoice_due_total']."', '".$_REQUEST['vat']."', '".$totals."'";
                  $result = $db->DBtrinsert('invoices', $fields, $values);
                  if($result) {
                    $result2 = $db->DBtrupdate('clients', "`due` = ".$_REQUEST['invoice_due_total']."", "".$_REQUEST['client_id']."");
                    $msg = "Invoice created successfully";
                  }
                } ?>
                <p style="color: red;text-align: center;">
                  <?php if($msg) {echo $msg;} ?>
                </p>
                <form id="new_invoice_form_f" action="new_invoice.php" method="post">
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <table class="table table-hover">
                      <tr>
                        <td style="width: 20%;">
                          <a class="btn btn-success" data-toggle="modal" href="#myModal">
                            <i class="fa fa-plus-circle"></i> Add New Client </a>
                          <strong>Customer Name</strong></td>
                        <td class="client_name_dropdown">
                          <select required="" style="margin-top: 4px;" data-placeholder="Please Type Customer Name" name="client_id" class="invoice_client_name form-control " tabindex="2">
                            <option></option>
                            <?php
                            $records = $db->DBtview('clients');
                            if ($records) {
                              while ($arr = $records->fetch_assoc()) {
                            ?>
                                <option style="color: black; font-size: 16px;" value=<?php echo $arr['id']; ?>>
                                  <?php echo $arr['fname']; ?> (<?php echo $arr['mobile']; ?>)
                                </option>
                            <?php
                              }
                            } else {
                              exit('No data found');
                            }
                            ?>
                          </select>
                          <br /><br />
                        </td>
                      </tr>
                      <tr class="">
                        <td class="client_details_invoice"><strong>Details</strong></td>
                        <td class="client_address_load"></td>
                      </tr>
                    </table>
                  </div>

                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first-name">Invoice ID<span class="required">*</span>
                      </label>
                      <div class="col-md-8 col-sm-6 col-xs-12">
                      <?php
                        $result = $db->DBtview('invoices');
                        if ($result) {
                            while ($arr = $result->fetch_assoc()) {
                                $id = $arr['id']+1;
                            }
                        } else {
                            $id = 1;
                        }
                      ?>

                        <input type="hidden" name="invoice_number" value=<?php echo $id; ?> />
                        <input disabled="" name="invoice_number" value=<?php echo $id; ?> type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" />
                      </div>
                    </div>
                    <br /><br />
                    <div class="form-group">
                      <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Date </label>
                      <div class="col-md-8 col-sm-6 col-xs-12">
                        <input readonly="" placeholder="07/09/2020" type="text" id="datepicker_three" name="date_issue" required="required" class="form-control col-md-7 col-xs-12" value="07/09/2020" />
                      </div>
                    </div>
                    <br /><br />
                  </div>

                  <div class="item_container col-md-12">
                    <div class="item_line_one">
                      <div class="">
                        <table class="table table-bordered table-condensed">
                          <tr>
                            <td style="width: 10%;"><i style="font-size: 50px;" class="fa fa-barcode"></i></td>
                            <td style="width: 80%;" class="item_name_dropdownone_product_select">
                            <input type='hidden' value='' id="item_ids" name="item_ids" />
                              <select name="item_id" class="item_name_dropdownone select_product_drop form-control" style="margin-top: -5px;">
                                <option></option>
                                <?php
                                $records = $db->DBtview('products');
                                if ($records) {
                                  while ($arr = $records->fetch_assoc()) {
                                    if(!$arr['stock']) continue;
                                ?>
                                    <option style="color: black; font-size: 16px;" value=<?php echo $arr['id']; ?>>
                                      <?php echo $arr['sku']; ?> :
                                      <?php echo $arr['name']; ?> :
                                      <?php echo $arr['unit']; ?>
                                    </option>
                                <?php
                                  }
                                } else {
                                  exit('No data found');
                                }
                                ?>
                              </select>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <br />
                    <div class="table-responsive">
                      <table class="table  bulk_action table-bordered item_line_one_more_fields">
                        <tr style="font-size: 16px; font-weight: bold; text-align: center; background-color: #4682B4; height: 50px; color: white;" class="row">
                          <td class="col-md-2">Item</td>
                          <td class="col-md-3">
                            <span style="text-align: center;">Description</span>
                          </td>
                          <td class="col-md-1">
                            <span style="text-align: center;">Stock</span>
                          </td>

                          <td class="col-md-2">
                            <span>Unit</span>
                          </td>

                          <td class="col-md-1">
                            <span>Quantity </span>
                          </td>

                          <td class="col-md-1">
                            <span style="text-align: center;">Price </span>
                          </td>
                          <td class="col-md-1">
                            <span style="text-align: center;">Total</span></td>
                          <td class="col-md-1"><span style="text-align: center;">Remove</span></td>
                        </tr>

                      </table>
                    </div>
                    <br />
                    <br />

                    <script type="text/javascript">
                      $(function() {
                        for (i = 4; i <= 20; i++) {
                          $('.invRow' + i).hide();
                        }
                        for (j = 5; j <= 20; j++) {
                          $('tr.invRow' + j + 'Toggle').hide();
                        }
                        for (let k = 4; k <= 20; k++) {
                          let l = k + 1;
                          $('a#invRow' + k + 'Toggle').click(function() {
                            $('.invRow' + k).show();
                            $('tr.invRow' + k + 'Toggle').hide();
                            $('a#invRow' + k + 'Toggle').hide();
                            $('tr.invRow' + l + 'Toggle').show();
                            $('#invRow' + l + 'Toggle').show();
                          });
                        }
                      });
                    </script>


                  </div>
                  <div class="col-md-12">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Discount
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="text" name="discount" class="form-control col-md-7 col-xs-12 invoice_discount" />
                        </div>
                      </div><br /><br />
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Transport
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="text" name="transport" class="form-control col-md-7 col-xs-12 invoice_transport" />
                        </div>
                      </div><br /><br />

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Account
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">

                          <select required="" name="account" class="form-control">
                            <option value="">--Select--</option>
                            <?php
                                $records = $db->DBtview('accounts');
                                if ($records) {
                                  while ($arr = $records->fetch_assoc()) {
                                ?>
                                    <option style="color: black; font-size: 16px;" value=<?php echo $arr['id']; ?>>
                                      <?php echo $arr['name']; ?>
                                    </option>
                                <?php
                                  }
                                } else {
                                  echo 'No data found';
                                }
                                ?>

                          </select>
                        </div>
                      </div>
                      <br />
                      <br />
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Category
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">

                          <select required="" name="in_cat" class="form-control">
                            <option value="">--Select--</option>
                            <?php
                                $records = $db->DBtview('categories');
                                if ($records) {
                                  while ($arr = $records->fetch_assoc()) {
                                ?>
                                    <option style="color: black; font-size: 16px;" value=<?php echo $arr['id']; ?>>
                                      <?php echo $arr['name']; ?>
                                    </option>
                                <?php
                                  }
                                } else {
                                 echo 'No data found';
                                }
                                ?>

                          </select>
                        </div>
                      </div>
                      <br />
                      <br />
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">Payment</label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="text" required="" name="payment" class="form-control col-md-7 col-xs-12 invoice_payment" />
                        </div>
                      </div>

                      <br /><br />

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="last-name">VAT%
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <input type="text" required="" name="vat" class="form-control col-md-7 col-xs-12 vatcount" value="0" />
                        </div>
                      </div>
                    </div>
                    <div class="co-md-8">
                      <div style="float: right;">
                        <table style="font-size: 18px; color: black; font-weight: bold; width: 250px; text-align: right;" class="table table-bordered">
                          <tr>
                            <td>Line Total :</td>
                            <td><span>
                                <div class="grand_line_total" style="font-weight: bold; text-align: right;">0.00</div>
                              </span></td>
                          </tr>
                          <tr>
                            <td>Discount :</td>
                            <td><span style="color: black;" class="invoice_discount_s">0.00</span></td>
                          </tr>
                          <tr>
                            <td>Transport :</td>
                            <td><span style="color: black;" class="invoice_transport_s">0.00</span></td>
                          </tr>

                          <tr>
                            <td>Invoice Bill :</td>
                            <td><span class="invoice_bill">00.00</span></td>
                          </tr>

                          <tr>
                            <td>Previous due :</td>
                            <td><span style="color: black;" class="previus_due_total">0.00</span></td>
                          </tr>
                          <tr>
                            <td>Total Bill :</td>
                            <td><span style="color: black;" class="invoice_subtotal">0.00</span>
                              <input type="hidden" class="invoice_grandtotal" value="" />
                              <span style="color: black; display: none;" class="invoice_subtotalHidden">0.00</span></td>
                          </tr>
                          <tr>
                            <td>Payment :</td>
                            <td><span style="color: black;" class="invoice_payment_total">0.00</span></td>
                          </tr>
                          <tr>
                            <td>Total Due :</td>
                            <td><span style="color: black;" class="invoice_due_total">0.00</span>
                              <input type="hidden" name="invoice_due_total" value="" class="invoice_due_total_input" />
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <input style="float: right; margin-top: 20px;" type="submit" name="add_invoice" value="Save Invoice" class="btn btn-lg btn-success" />
                            </td>
                          </tr>
                        </table>


                      </div>



                    </div>


                  </div>
                </form>

              </div>



              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button style="color: red; font-size: 20px;" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add New Client Or Customer</h4>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post">

                        <table class="table table-bordered">
                          <tr>
                            <td><strong>Fullname</strong></td>
                            <td><input class="form-control client_fname" required type="text" name="fname" style="width: 300px;" /></td>
                          </tr>
                          <tr>
                            <td><strong>Mobile</strong></td>
                            <td><input class="form-control client_mobile" required type="text" name="mobile" style="width: 300px;" /></td>
                          </tr>

                          <tr>
                            <td colspan="2">
                              <span class="submitNewInvoice btn btn-success">Add new client</span>
                            </td>
                          </tr>

                      </form>
                      </table>


                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-warning modal_close" type="button">Closed </button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <span class="new_client_load_here">&nbsp;</span>


  <script src="js/new_invoice.js?time=1599643069"></script>
  <!-- new deposit modal -->
  <div id="new_deposit_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Receive</h4>
        </div>
        <div class="modal-body">
          <p>
            <div class="alert alert-success alert-dismissible new_receive_added_modal_success" style="display: none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> New Receive Added <a href="new_diposit.php" style="color: white; display: block;">View Receive History</a>
            </div>
            <form action="new_diposit.php" method="post" id="new_deposit_main_form_entry" data-parsley-validate class="form-horizontal form-label-left">


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Client </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select style="margin-top: 4px;" data-placeholder="Please Type Customer Name" name="client_id" class="invoice_client_name form-control" required>
                    <option></option>

                    <option style="color: black; font-size: 16px;" value="109">md jafor ()</option>



                    <option style="color: black; font-size: 16px;" value="110">md jafor ()</option>



                    <option style="color: black; font-size: 16px;" value="112">Jack ndblack ()</option>



                    <option style="color: black; font-size: 16px;" value="113">Sankar ()</option>



                    <option style="color: black; font-size: 16px;" value="114">MD AZIZUL HAKIM BIZOY ()</option>



                    <option style="color: black; font-size: 16px;" value="120">Sojib (Customer)</option>


                  </select>

                  <span style="color: red; font-weight: bold; font-size: 14px;" class="client_address_load"></span>
                </div>

              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input readonly="" value="07/09/2020" type="text" id="datepicker" name="date" required="required" class="form-control col-md-7 col-xs-12 datepicker" />
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Account </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="account" class="form-control account_list_select" data-placeholder="Select Account" required />
                  <option></option>
                  <option value="23">A.&.A Bricks Pabna</option>

                  <option value="22">Bkash</option>

                  <option value="19">Cash</option>

                  <option value="20">IBBL</option>

                  <option value="21">Mohasin Kabir</option>



                  </select>
                  <span class="account_balance_show"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="des" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amount
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="number" id="last-name" name="amount" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category </label>
                <div class="col-md-8 col-sm-6 col-xs-12 deposit_category_container">
                  <select name="in_cat" required="" class="form-control deposit_category" data-placeholder="Select Category">
                    <option></option>
                    <option value="10">Furniture sell</option>

                    <option value="12">Sallary</option>

                    <option value="13">Other</option>


                  </select>

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Income Sub Categories
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12 deposit_sub_data">

                </div>
              </div>

              <script type="text/javascript">
                $(function() {
                  $('.deposit_category').on('change', function() {
                    var deposit_category = $(this).val();
                    $.post('get_income_subcategory.php', {
                      deposit_category: deposit_category
                    }).always(function(deposit_sub_data) {
                      $('.deposit_sub_data').php(deposit_sub_data);
                      $('select').selectize();
                    });
                  });
                });
              </script>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Payment Methods
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select data-placeholder="Select Payment" name="pay_met" class="form-control">
                    <option></option>
                    <option value="6">Bkash</option>


                  </select>

                </div>

              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bank Name </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="BankName" data-placeholder="Select Bank" class="form-control">
                    <option></option>
                    <option value="4">জাহিদ</option>

                    <option value="5">প্রাইম ব্যাংক</option>

                    <option value="6">IOI</option>

                    <option value="7">Mybank</option>


                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cheque No
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="ref" class="form-control col-md-7 col-xs-12" /><br />

                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-2">



                  <button type="submit" name="submit" class="btn btn-success disposit_add_btn"><i class="fa fa-plus">Add Deposit</i></button>

                </div>
              </div>

            </form>
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- new expense modal -->
  <div id="new_expense_modal_shortcut" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Expense</h4>
        </div>
        <div class="modal-body">
          <p>
            <div class="alert alert-success alert-dismissible new_expense_added_modal_success" style="display: none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> New Expense Added <a href="new_expense.php" style="color: white; display: block;">View Expense History</a>
            </div>

            <form enctype="multipart/form-data" action="new_expense.php" method="post" id="new_expense_main_form_entry" data-parsley-validate class="form-horizontal form-label-left">



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Account
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="account" class="form-control account_list_select" data-placeholder="Select Account" required>
                    <option></option>
                    <option value="23">A.&.A Bricks Pabna</option>

                    <option value="22">Bikash</option>

                    <option value="19">Cash</option>

                    <option value="20">IBBL</option>

                    <option value="21">Mohasin Kabir</option>


                  </select>
                  <span class="account_balance_show"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input readonly="" value="07/09/2020" type="text" id="datepicker" name="date" required="required" class="form-control col-md-7 col-xs-12 datepicker" />
                </div>
              </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="des" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amount
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="number" id="last-name" name="amount" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="in_cat" class="form-control expense_category_select" data-placeholder="Category" required>
                    <option></option>
                    <option value="8">Expense</option>


                  </select>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Expense Sub Categories
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12 expense_sub_data">

                </div>
              </div>

              <script type="text/javascript">
                $(function() {
                  $('.expense_category_select').on('change', function() {
                    var expense_id = $(this).val();
                    $.post('get_expense_subcategory.php', {
                      expense_id: expense_id
                    }).always(function(expense_sub_data) {
                      $('.expense_sub_data').php(expense_sub_data);
                      $('select').selectize();
                    });
                  });
                });
              </script>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mode Of Payment
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="pay_met" class="form-control " data-placeholder="Mode Of Payment">
                    <option></option>
                    <option value="Bkash">Bkash</option>


                  </select>

                </div>

              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bank Name </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <select name="BankName" class="form-control " data-placeholder="Bank Name">
                    <option></option>
                    <option value="জাহিদ">জাহিদ</option>

                    <option value="প্রাইম ব্যাংক">প্রাইম ব্যাংক</option>

                    <option value="IOI">IOI</option>

                    <option value="Mybank">Mybank</option>


                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cheque No </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="ref" class="form-control col-md-7 col-xs-12" /><br />

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Expense Voucher
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <input type="file" name="pic_url" class="form-control col-md-7 col-xs-12" />
                </div>
              </div>


              <div class="form-group">

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                    <input type="submit" name="submit" class="btn btn-success" value="Add Expenses" />

                  </div>
                </div>

            </form>
          </p>
        </div>
      </div>

    </div>
  </div>



  <script src="js/jscolor.js"></script>
  <script>
    $("#btnExport").click(function(e) {
      let file = new Blob([$('.divclass').php()], {
        type: "application/vnd.ms-excel"
      });
      let url = URL.createObjectURL(file);
      let a = $("<a />", {
        href: url,
        download: "filename.xls"
      }).appendTo("body").get(0).click();
      e.preventDefault();
    });
  </script>

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      © 2017-2020 All Rights Reserved. : <a target="_blank" href="http://hubit.tech/">HUB IT</a> V 1.0


    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <!-- start chosen select plugin -->

  <!--
 <script src="vendors/chosen/docsupport/chosen.jquery.js" type="text/javascript"></script>
    <script src="vendors/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendors/chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
  
-->
  <!-- end chosen select plugin -->


  <!-- jQuery -->


  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>


  <!-- DateJS -->
  <script src="vendors/DateJS/build/date.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="js/moment/moment.min.js"></script>
  <script src="js/datepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>
  <!-- add new line in add new service -->

  <!-- bootstrap-daterangepicker -->
  <script>
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').php(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      };

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').php(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <!-- /bootstrap-daterangepicker -->





  <script>
    $("#accordion").accordion();



    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $("#autocomplete").autocomplete({
      source: availableTags
    });



    $("#button").button();
    $("#button-icon").button({
      icon: "ui-icon-gear",
      showLabel: false
    });



    $("#radioset").buttonset();







    $("#tabs").tabs();



    $("#dialog").dialog({
      autoOpen: false,
      width: 400,
      buttons: [{
          text: "Ok",
          click: function() {
            $(this).dialog("close");
          }
        },
        {
          text: "Cancel",
          click: function() {
            $(this).dialog("close");
          }
        }
      ]
    });

    // Link to open the dialog
    $("#dialog-link").click(function(event) {
      $("#dialog").dialog("open");
      event.preventDefault();
    });



    $("#datepicker").datepicker({
      inline: true,
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true

    });
    $(".datepicker").datepicker({
      inline: true,
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_two").datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_three").datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_normal_one").datepicker({
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_normal_two").datepicker({
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_normal_three").datepicker({
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_normal_four").datepicker({
      changeMonth: true,
      changeYear: true
    });
    $("#datepicker_normal_five").datepicker({
      changeMonth: true,
      changeYear: true
    });



    $(".datepickerMinDate").datepicker({
      inline: true,
      minDate: +1
    });
    $(".datepickerMaxDate").datepicker({
      inline: true,
      maxDate: 0
    });

    $("#slider").slider({
      range: true,
      values: [17, 67]
    });



    $("#progressbar").progressbar({
      value: 20
    });



    $("#spinner").spinner();



    $("#menu").menu();



    $("#tooltip").tooltip();



    $("#selectmenu").selectmenu();


    // Hover states on the static widgets
    $("#dialog-link, #icons li").hover(
      function() {
        $(this).addClass("ui-state-hover");
      },
      function() {
        $(this).removeClass("ui-state-hover");
      }
    );
  </script>

  <script>
    var eventHandleree = function(name) {
      return function() {
        //console.log(name, arguments);
        var control = $select_item_name_dropdownone[0].selectize;
        //control.open();
        control.focus();
        //control.close();
      };
    };
    Selectize.define('clear_on_type', function(options) {
      var self = this;
      var IS_MAC = /Mac/.test(navigator.userAgent);
      var KEY_BACKSPACE = 8;

      this.onKeyDown = (function() {
        var original = self.onKeyDown;
        return function(e) {
          var originalCode = e.keyCode;
          if ((self.isFull() || self.isInputHidden) && !(IS_MAC ? e.metaKey : e.ctrlKey)) {
            if (self.isOpen && self.$activeOption) {
              e.keyCode = KEY_BACKSPACE;
              self.deleteSelection(e);
              e.keyCode = originalCode;
            }
          }
          return original.apply(this, arguments);
        };
      })();
    });
    var $select_item_name_dropdownone = $(".item_name_dropdownone").selectize({
      create: true,
      onChange: eventHandleree('onChange'),
      //onItemAdd       : eventHandleree('onItemAdd'),
      //onItemRemove    : eventHandleree('onItemRemove'),
      //onOptionAdd     : eventHandleree('onOptionAdd'),
      //onOptionRemove  : eventHandleree('onOptionRemove'),
      //onDropdownOpen  : eventHandleree('onDropdownOpen'),
      //onDropdownClose : eventHandleree('onDropdownClose'),
      //onFocus         : eventHandleree('onFocus'),
      //onBlur          : eventHandleree('onBlur'),
      //onInitialize    : eventHandleree('onInitialize'),
      plugins: ['clear_on_type'],
      allowEmptyOption: true

    });

    $('.invoice_client_name').selectize({});

    $('#datatable').DataTable({
      dom: 'Blfrtip',
      "lengthMenu": [
        [10, 25, 50, 100, 150, 200, -1],
        [10, 25, 50, 100, 150, 200, "All"]
      ],
      buttons: [{
          extend: 'print',
          text: '<i class="fa fa-print"> Print</i>'
        },
        {
          extend: 'excel',
          text: '<i class="fa fa-file-excel-o" aria-hidden="true"> Download Excel</i>'
        },
        {
          extend: 'copy',
          text: '<i class="fa fa-file-pdf-o" aria-hidden="true"> Download PDF</i>'
        },
        {
          extend: 'copy',
          text: '<i class="fa fa-file" aria-hidden="true"> Download CSV</i>'
        },
        {
          extend: 'copy',
          text: '<i class="fa fa-clone" aria-hidden="true"> Copy to clipboard</i>'
        }
      ],
      fixedHeader: true
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('.account_list_select').on('change', function() {
        var id = $(this).val();
        $.post('account_bl_ajax.php', {
          id: id
        }).always(function(data) {
          $('.account_balance_show').php(data);
        });
      });
    });
  </script>

  <div class="shortcut_menu_items">
    <div style="text-align: right; cursor: pointer;">
      <a href="shortcut_menu_manage.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
      <i class="fa fa-window-close close_shortcut_menu_items" aria-hidden="true"></i>
    </div>
    <div class="shortcut_menu_item">
      <a href="product.php">Add Product</a>
    </div>
    <div class="shortcut_menu_item">
      <a href="new_diposit.php">New Diposite</a>
    </div>
    <div class="shortcut_menu_item">
      <a href="new_expense.php">New Expense</a>
    </div>

  </div>
  <div class="shortcut_menu_button">
    <i class="fa fa-plus"></i>
  </div>
  <script type="text/javascript">
    $(function() {
      $('.shortcut_menu_items').hide();
      $('.shortcut_menu_button').on('click', function() {
        $('.shortcut_menu_items').toggle();
      });
      $('.close_shortcut_menu_items').on('click', function() {
        $('.shortcut_menu_items').toggle();
      });
    });
  </script>




  <script>
    $(document).ready(function() {

      //new expense start

      $('#new_expense_main_form_entry').ajaxForm(function() {
        $('.new_expense_added_modal_success').show(500);
        $('#new_expense_main_form_entry').trigger("reset");
      });

      //new expense end


      //new deposit start 
      $('#new_deposit_main_form_entry').ajaxForm(function() {
        $('.disposit_add_btn').hide();
        $('.new_receive_added_modal_success').show(500);
        $('#new_deposit_main_form_entry').trigger("reset");
        $('.disposit_add_btn').show();

      });

      //new diposit client due auto load
      $('select.invoice_client_name').change(function() {
        var user_checkout = $('select.invoice_client_name').val();
        $('.client_address_load').load('PreviesDue.php?payer=' + user_checkout + '');
      });

    });
    //new deposit end
  </script>


</body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71783610-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-71783610-5');
</script>
<script src="js/main.js"></script>

</html>