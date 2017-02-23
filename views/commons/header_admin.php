<?php if (ha=="Administrator") { ?>
<!DOCTYPE html>
<!-- admin page -->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Waylimo Karya PT | <?php echo USER_NAME ; ?> </title>
   <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <link href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url();?>assets/css/entol.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/<?php echo favicon ;?>">
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>

  </head>
  
   <body class="<?php echo layout_option;?><?php echo " ";?><?php echo skins;?>">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url();?>" class="logo hidden-xs"><span class="pull-left"><h4><b>WAYLIMO.PT</b></h4></span></a> 
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="<?php echo base_url();?>profile" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>uploads/<?php echo foto;?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo USER_NAME;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>uploads/<?php echo foto;?>" class="img-circle" alt="User Image" />
                    <p>
                     <?php echo USER_NAME;?> -<?php echo email;?>
                      <small>Member since <?php echo aktif_sejak;?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>setting">Setting</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>profile">Profile</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo base_url();?>kpdc">Log</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                    <a href="<?php echo base_url();?>auth/change_password" class="btn btn-default btn-flat"> <i class="glyphicon glyphicon-edit"> </i>  Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>auth/logout" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"> </i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </header>
      

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>uploads/<?php echo foto;?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p> <a href="<?php echo base_url();?>profile"><?php echo USER_NAME;?></a></p>

              <a href="<?php echo base_url();?>profile"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo ($activeMenu == "dashboard") ? "active  treeview" : ""; ?>">
              <a href="<?php echo base_url();?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
           
                <!--li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li-->
                <li class="<?php echo ($activeTab == "master" || $activeTab == "iso"  || $activeTab == "users" || $activeTab == "scp" ||  $activeTab == "material_pick" || $activeTab == "vendor" || $activeTab == "project"|| $activeTab == "material") ? "active" : ""; ?>">
                  <a href="#"><i class="fa fa-square text-<?php echo color;?> "></i> Document/Revision Control<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu" ">
                    <li class="<?php echo ($activeTab == "users") ? "active" : ""; ?>"><a href="<?php echo base_url();?>users"><i class="fa fa-circle <?php echo ($activeTab == "users") ? "text-" : ""; ?><?php echo color;?>"></i> Users Management</a></li>
                     <li class="<?php echo ($activeTab == "project") ? "active" : ""; ?>"><a href="<?php echo base_url();?>project"><i class="fa fa-circle <?php echo ($activeTab == "project") ? "text-" : ""; ?><?php echo color;?>"></i> Project</a></li>
                    <li class="<?php echo ($activeTab == "vendor") ? "active" : ""; ?>"><a href="<?php echo base_url();?>vendor"><i class="fa fa-circle <?php echo ($activeTab == "vendor") ? "text-" : ""; ?><?php echo color;?>"></i> Vendor</a></li>
                    <li class="<?php echo ($activeTab == "iso") ? "active" : ""; ?>"><a href="<?php echo base_url();?>iso"><i class="fa fa-circle <?php echo ($activeTab == "iso") ? "text-" : ""; ?><?php echo color;?>"></i> Isometric List</a></li>
                     <li class="<?php echo ($activeTab == "iso") ? "active" : ""; ?>"><a href="<?php echo base_url();?>iso"><i class="fa fa-circle <?php echo ($activeTab == "iso") ? "text-" : ""; ?><?php echo color;?>"></i> Isometric Transmital</a></li>
                   
                    <li>
                   </ul>
                </li>
                <li class="<?php echo ($activeTab == "report" || $activeTab == "kpdc" ||$activeTab == "create_report" || $activeTab == "office" || $activeTab == "jmr" || $activeTab == "kas_masuk") ? "active" : ""; ?>"><!-- active -->
                  <a href="#"><i class="fa fa-square  text-orange"></i> Delivery Report<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li class="<?php echo ($activeTab == "kpdc") ? "active" : ""; ?>"><a href="<?php echo base_url();?>kpdc"><i class="fa fa-circle <?php echo ($activeTab == "kpdc") ? "text-orange" : ""; ?>"></i> History Log</a></li>
                    <li class="<?php echo ($activeTab == "office") ? "active" : ""; ?>"><a href="<?php echo base_url();?>office"><i class="fa fa-circle <?php echo ($activeTab == "office") ? "text-orange" : ""; ?>"></i> Backup Db</a></li>
                     <li class="<?php echo ($activeTab == "create_report") ? "active" : ""; ?>"><a href="<?php echo base_url();?>create_report"><i class="fa fa-circle <?php echo ($activeTab == "create_report") ? "text-orange" : ""; ?>"></i> Custom Report</a></li>
                   
                   
                    <li>
                   </ul>
                </li>
            <li class="<?php echo ($activeTab == "setting") ? "active  treeview" : ""; ?>">
              <a href="<?php echo base_url();?>setting">
                <i class="glyphicon glyphicon-wrench"></i> Settings</a></li>
              </a>
            </li>
			<li class="header">MEMO</li>
            
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      
<!-- end adminpage --> 


<?php } ?>  
