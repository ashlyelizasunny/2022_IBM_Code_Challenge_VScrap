<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register Now</title>
    <script>
function verifyPassword() {
  var pw = document.getElementById("password").value;
  var cpw = document.getElementById("cpassword").value;
  //check empty password field
  if(pw == "") {
    alert("**Fill the password please!");

     return false;
  }

//maximum length of password validation
 else if(pw != cpw  ) {
  alert(" Password mismatch");
     return false;
  } else {
     return true;
  }
}
</script>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/login.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Register to <strong>CareCycle</strong></h3>

            <form onsubmit ="return verifyPassword()" action="register_exe.php" method="post" autocomplete="off">
              <div class="form-group first">
                <label for="username">Full Name</label>
                <input type="text" class="form-control" required name="fullname"  pattern="[a-zA-Z\s]+" title="only alphabets and spaces allowed" placeholder="Full Name" id="fullname">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Address</label>
                <input type="text" class="form-control" required placeholder="Address" name="address" id="address">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mobile</label>
                <input type="text" class="form-control" required placeholder="Mobile" name="phone" id="phone" pattern="[9876][0-9]{9}" title="Enter a valid mobile number">
              </div>

              <div class="form-group last mb-3">
                <label for="password">Aadhar Card Number </label>
                <input type="text" class="form-control" required placeholder="Aadhar Number " pattern="[0-9]{12}" title="Please enter 12 digit aadhar number" name="aadhar" id="aadhar">
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

              <div class="form-group first">
                <label for="username">Confirm Password</label>
                <input type="password" class="form-control" required name="cpassword"  id="cpassword">
              </div>


              <input type="submit" value="Register Now" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
