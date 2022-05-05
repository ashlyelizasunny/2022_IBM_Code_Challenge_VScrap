
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
                  <h6 class="m-0 font-weight-bold text-primary">Create New Company</h6>
                </div>
                <div class="card-body">

                <form action="create_company_exe.php" method="post" autocomplete="off">
              <div class="form-group first">
                <label for="username">Company Name</label>
                <input type="text" class="form-control" required name="fullname"  pattern="[a-zA-Z\s]+" title="only alphabets and spaces allowed" placeholder="Full Name" id="fullname">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Address</label>
                <input type="text" class="form-control" required placeholder="Address" name="address" id="address">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mobile</label>
                <input type="number" class="form-control" required placeholder="Mobile" name="phone" id="phone" pattern="[9876][0-9]{9}" title="Enter a valid mobile number">
              </div>



              <div class="form-group last mb-3">
                <label for="password">State</label>
                <select class="form-control" required  name="state" id="state">
                  <option>Kerala</option>
                </select>
              </div>
              <div class="form-group last mb-3">
                <label for="password">District</label>
                <select class="form-control" required  name="district" id="district">
                  <option value="">Select</option>
				  <option>Alappuzha</option>
				  <option>Ernakulam</option>
				  <option>Idukki</option>
				  <option>Kannur</option>
				  <option>Kasaragod</option>
				  <option>Kollam</option>
				  <option>Kottayam</option>
				  <option>Kozhikode</option>
				  <option>Malappuram</option>
				  <option>Pathanamthitta</option>
				  <option>Thiruvananthapuram</option>
				  <option>Thrissur</option>
				  <option>Wayanad</option>

                </select>
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" required name="email" placeholder="Email" id="email">
              </div>
              <div class="form-group first">
                <label for="username">Password</label>
                <input type="password" class="form-control" minlength="8" title="8 characters minimum" required name="password"  id="password">
              </div>
              <input type="submit" value="Register Now" class="btn btn-block btn-primary">

            </form>





              </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <?php

 require_once("footer.php");

 ?>
