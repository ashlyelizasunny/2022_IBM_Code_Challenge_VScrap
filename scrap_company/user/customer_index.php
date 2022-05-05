 

   
   <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php

 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$qry="SELECT * FROM registration where email='$username'";

$user= $obj->GetSingleRow($qry);
 if(is_array($user)){
   
    ?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <?php
if($user["user_status"]=="active"){
  ?>
    <a href="scan_qr_code.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Create Request</a>
       

<?php
}?>
           </div>

          
        

          <!-- Content Row -->
          <div class="row">  
            <div class="col-lg-12 mb-4">
            <?php
     if($user["user_status"]=="inactive"){
  ?>
   <div class="alert alert-danger">
     <big>Your email id is not validated.  <a href="customer_generate_email_verification.php" class="btn btn-danger" >Verify Now</a></big>
   </div>

<?php
}

?>
           

          

            

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
       
         <table class="table   table-striped">
         <tr>
             <td>Full Name</td><td>:</td><td><?php  echo $user["full_name"]   ?></td>
           </tr>
           <tr>
             <td>Address</td><td>:</td><td><?php  echo $user["address"]   ?></td>
           </tr>
           <tr>
             <td>Phone</td><td>:</td><td><?php  echo $user["phone"]   ?></td>
           </tr>
           <tr>
             <td>Email</td><td>:</td><td><?php  echo $user["email"]   ?></td>
           </tr>
           <tr>
             <td>Aadhar Number</td><td>:</td><td><?php  echo $user["aadhar"]   ?></td>
           </tr>
           
         </table>

              </div>
              </div>

            </div>
          </div>

          <?php
 }
?>
        </div>
        <!-- /.container-fluid -->

     