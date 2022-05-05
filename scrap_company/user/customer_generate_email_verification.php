
<?php
session_start();
if(!isset($_SESSION['usertype'])){
 header("location:logout.php");
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

require_once("../email_helper.php");


$usertype=$_SESSION['usertype'];
$username=$_SESSION['username'];

require_once("../connectionclass.php");
$obj=new ConnectionClass();
$qry="SELECT * FROM registration where email='$username'";

$user= $obj->GetSingleRow($qry);
 if(is_array($user)){

     if($user["user_status"]=="inactive"){

      $link= "http://localhost/scrap_company/user/customer_email_verification.php?uid=".$user["reg_id"];
      $email_to = $username;
      $subject="Email Verification";
       $body = get_verifiaction_html_link($link);

       send_mail($subject,$body,$email_to);



      echo $obj->alert("Check your email ID for the verification link","index.php");

}



 }


  function get_verifiaction_html_link($link){

    $content ='<!DOCTYPE html>
    <html lang="en">

    <head>

      <!-- Vendor CSS Files -->
      <link href="http://localhost/scrap_company/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="http://localhost/scrap_company/assets/css/style.css" rel="stylesheet">

    </head>

    <body>
      <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
              <div>
                <h1>Welcome to  CareCycle Scrappers</h1>
                <p>   Please click on the link below to verify your email address. This is required to confirm ownership of the email address.</p>
                <a href="'.$link.'" class="btn btn-danger"><i class="bx bxl-play-store"></i> Verify Now</a>
               </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
              <img src="http://localhost/scrap_company/assets/img/hero-img1.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->



      <!-- ======= Footer ======= -->
      <footer id="footer">




        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>CareCycle</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              Designed by <a href="#">:Parvathy A B Nair & Jiss Jose</a>
          </div>
        </div>
      </footer><!-- End Footer -->



    </body>'
    ;

return $content;
  }



?>
