
<?php
session_start();
if(!isset($_SESSION['usertype'])){
 header("location:logout.php");
}
$usertype=$_SESSION['usertype'];
$username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VScrap </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>




</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-recycle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CareCycle </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php
if($usertype=="Admin"){
  ?>
 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Company</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="admin_companies.php">List Company</a>
            <a class="collapse-item" href="admin_new_company.php">Create Company</a>
          </div>
        </div>
      </li>
        
  
      <li class="nav-item">
        <a class="nav-link" href="admin_customers.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Customers</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admin_show_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Customer Requests</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_show_completed_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Scrapped Vehicles</span></a>
      </li>
  <?php
 }
 else if($usertype=="Customer"){
  ?>
<li class="nav-item">
        <a class="nav-link" href="customer_show_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Scrap Request</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer_show_completed_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Your Scrapped Vehicles</span></a>
      </li>
  <?php
 }
 else if($usertype=="Company"){
  ?>

<li class="nav-item">
        <a class="nav-link" href="company_show_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Customer Requests</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="company_show_completed_scrap_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Scrapped Vehicles</span></a>
      </li>
<?php
 }
      ?>

     
 

   
   
 

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
 
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $username ?></span>
                <img class="img-profile rounded-circle" src="img/avatar.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="change_password.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"  >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       
