<?php
require_once("header.php");
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

       
          <!-- Content Row -->
          <div class="row">

           

            <div class="col-lg-6 mb-4">

            

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                </div>
                <div class="card-body">

		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 	 
 		<form method="post" action="change_password_exe.php">
 <div class="form-group">
    <label for="exampleInputPassword1">Current Password</label>
    <input type="password" class="form-control" required name="pwd1" placeholder="Current Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" required name="pwd2" placeholder="New Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" required name="pwd3" placeholder="Confirm Password">
  </div>
  
  <!--<div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>-->
  <button class="btn-primary btn">Submit</button>
				<button class="btn-default btn">Cancel</button>
				<!--<button class="btn-inverse btn">Reset</button>-->
</form>
</div>

 	</div>

   </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <?php
 
 require_once("footer.php");
 
 ?> 
     