
<?php
session_start();
if(!isset($_SESSION['usertype'])){
 header("location:logout.php");
}
$usertype=$_SESSION['usertype'];
$username=$_SESSION['username'];
$request_id=$_GET["r_id"];

require_once("../connectionclass.php");
$obj=new ConnectionClass();
$qry="SELECT * FROM scrap_request s join company c on(c.cmp_id = s.cmp_id) join rc_book r on(r.registered_number=s.reg_number) where  request_id=$request_id";

$scrap_request= $obj->GetSingleRow($qry);
if(is_array($scrap_request)){
?>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CareCycle </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <style>

    #wrapper{
              width:960px;
              min-height:800px;
              margin:100px auto;
              border:1px solid black;
              padding:100px
    }

  </style>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
 

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

            <table style="width:100%">
            <tr>
              <td><center><h2>Vehicle Scrapping Certificate</h2></center></td>
            </tr>
            
            <tr>
              <td> <p>This is to certify that the vehicle with following particulars has been scrapped by
this company (i.e. the vehicle scrapping company). The vehicle can no longer be
used on road or re-assembled into a vehicle.</p></td>
            </tr>
            <tr>
              <td><h4>Particulars of scrapped vehicle</h4></td>
            </tr>
            <tr>
              <td>
              
              <table>
              <tr>
                <td>Chassis number</td><td>:</td>
                <td><?php  echo $scrap_request["chessis_number"]  ?></td>
                </tr>
                <tr>
                <td>Engine number</td><td>:</td>
                <td><?php  echo $scrap_request["engine_number"]  ?></td>
                </tr>
                <tr>
                <td>Registration mark</td><td>:</td>
                <td><?php  echo $scrap_request["registered_number"]  ?></td>
                </tr>

                <tr>
                <td>Name of registered owner</td><td>:</td>
                <td><?php  echo $scrap_request["owner_name"]  ?></td>
                </tr>


              </table>

              </td>
            </tr>
            <tr>
              <td><h4>Date and location of vehicle scrapping </h4></td>
            </tr>

            <tr>
              <td>
              
              <table>
              <tr>
                <td>Date of vehicle scrapping</td><td>:</td>
                <td><?php  echo $scrap_request["schedule_date"]  ?></td>
                </tr>
                <tr>
                <td>Location  of vehicle scrapping</td><td>:</td>
                <td><?php  echo $scrap_request["district"]  ?> 
                
              </td>
                </tr>
                <tr>
                


              </table>

              </td>
            </tr>

          <tr>
<td>*The information provided above is true and correct. </td>

          </tr>


          <tr>
              <td>
              
              <table>
              <tr>
                <td>Name of vehicle scrapping company</td><td>:</td>
                <td><?php  echo $scrap_request["full_name"]  ?></td>
                </tr>
                <tr>
                <td>Registered address </td><td>:</td>
                <td><?php  echo $scrap_request["address"]  ?> 
                
              </td>
                </tr>
                <tr>
                <td>Telephone number  </td><td>:</td>
                <td><?php  echo $scrap_request["phone"]  ?> 
                
              </td>
                </tr>
                <tr>
                <td>Email </td><td>:</td>
                <td><?php  echo $scrap_request["email"]  ?> 
                
              </td>
                </tr>

              </table>

              </td>
            </tr>

            <table>
       
        </div>
      <!-- End of Main Content -->
 

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
 
  

 

</body>

</html>


<?php
      }
?>