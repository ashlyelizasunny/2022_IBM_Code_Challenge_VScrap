 
<?php

require_once("header.php");
 

?> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script>

$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate()+1;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);
 
    $('#schedule_date').attr('min', maxDate);
});


</script>
<style>
#preview{
  border:1px solid #ccc;
  margin:10px;
}


</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

         

          <!-- Content Row -->
          <div class="row">

           

            <div class="col-lg-12 mb-4">

            

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Create New Request</h6>
                </div>
                <div class="card-body">
                  <?php
$rc_book_number = trim($_REQUEST["rc_book_number"]);
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$qry="SELECT * FROM rc_book where registered_number='$rc_book_number'";

$book= $obj->GetSingleRow($qry);
 if(is_array($book)){
      ?>
 <div class="row">
                <div class="col-md-6">

                <?php
$flag=false;
$nature_of_registration = $book["nature_of_registration"];
$year_of_manufacture= $book["year_of_manufacture"];
$current_year =date("Y");

$diff= $current_year - $year_of_manufacture;

if($nature_of_registration =="private" && $diff <20 ){
  $flag=true;
}
if($nature_of_registration =="commercial" && $diff <15 ){
  $flag=true;
}


if($flag==true){
?>
<div class="alert alert-danger">
  <h4>According to year of manufacture , this vehicle is not eligble for scrap.</h4>
</div>

<?php

}else{
  ?>


<form class="form-horizontal" method="post" action="create_scrap_request_exe.php" enctype= multipart/form-data>
   
   <div class="form-group">
<label class="control-label col-sm-6" for="email">Registered Number</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="registered_number" id="registered_number" readonly value="<?php echo $book["registered_number"] ?>" >
</div>
</div>


   <div class="form-group">
<label class="control-label col-sm-6" for="email">User Email:</label>
<div class="col-sm-6">
<input type="email" class="form-control" id="email"  readonly value="<?php echo $username  ?>" name="email">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6" for="pwd">Scrapping Company</label>
<div class="col-sm-6">  
<select name="cmp_id" class="form-control">     
<option value="">Select</option>   
<?php 
$obj=new ConnectionClass();
$qry="SELECT * FROM company";

$companies= $obj->GetTable($qry);

foreach($companies as $c){
?>
<option value="<?php  echo $c["cmp_id"]  ?>"><?php  echo $c["full_name"]  ?></option>
<?php
}
?>
</select>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-6" for="email">Schedule Date</label>
<div class="col-sm-6">
<input type="date" class="form-control" id="schedule_date"    name="schedule_date">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-6" for="email">Vehicle Image</label>
<div class="col-sm-6">
<input type="file" class="form-control" id="vehicle_image"    name="vehicle_image">
</div>
</div>


<div class="form-group">        
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</div>
</form>

<?php
}


?>




                </div>
                <div class="col-md-6">
                     <h4>RC BOOK INFORMATION</h4><hr>
                     <table class="table table-bordered table-striped">
                       <tr>
                         <td>Registration Number</td><td>:</td> <td><?php echo $book["registered_number"] ?></td>
                       </tr>
                       <tr>
                         <td>Dealer Name</td><td>:</td> <td><?php echo $book["dealer_name"] ?></td>
                       </tr>
                       <tr>
                         <td>Dealer Address</td><td>:</td> <td><?php echo $book["dealer_address"] ?></td>
                       </tr>
                       <tr>
                         <td>Maker Name</td><td>:</td> <td><?php echo $book["maker_name"] ?></td>
                       </tr>
                       <tr>
                         <td>Owner Name</td><td>:</td> <td><?php echo $book["owner_name"] ?></td>
                       </tr>
                       <tr>
                         <td>Owner Address</td><td>:</td> <td><?php echo $book["owner_address"] ?></td>
                       </tr>
                       <tr>
                         <td>Class of Vehicle</td><td>:</td> <td><?php echo $book["class_of_vehicle"] ?></td>
                       </tr>
                       <tr>
                         <td>Makers Classification</td><td>:</td> <td><?php echo $book["makers_classification"] ?></td>
                       </tr>
                       <tr>
                         <td>Type of Body</td><td>:</td> <td><?php echo $book["type_of_body"] ?></td>
                       </tr>
                       <tr>
                         <td>Chessis Number</td><td>:</td> <td><?php echo $book["chessis_number"] ?></td>
                       </tr>
    
                       <tr>
                         <td>Engine Number</td><td>:</td> <td><?php echo $book["engine_number"] ?></td>
                       </tr>
                       <tr>
                         <td>Fuel</td><td>:</td> <td><?php echo $book["fuel"] ?></td>
                       </tr>
                       <tr>
                         <td>Color</td><td>:</td> <td><?php echo $book["color"] ?></td>
                       </tr>
                       <tr>
                         <td>Month of manufacture</td><td>:</td> <td><?php echo $book["month_of_manufacture"] ?></td>
                       </tr>
                       <tr>
                         <td>Year of manufacture</td><td>:</td> <td><?php echo $book["year_of_manufacture"] ?></td>
                       </tr>
                       <tr>
                         <td>Hourse power</td><td>:</td> <td><?php echo $book["hourse_power"] ?></td>
                       </tr>
                       <tr>
                         <td>Cubic capacity</td><td>:</td> <td><?php echo $book["cubic_capacity"] ?></td>
                       </tr>
                       <tr>
                         <td>Weight</td><td>:</td> <td><?php echo $book["weight"] ?></td>
                       </tr>
                       <tr>
                         <td>no of cylinder</td><td>:</td> <td><?php echo $book["no_of_cylinder"] ?></td>
                       </tr>
                       <tr>
                         <td>Wheel base</td><td>:</td> <td><?php echo $book["wheel_base"] ?></td>
                       </tr>
                       <tr>
                         <td>Seating capacityr</td><td>:</td> <td><?php echo $book["seating_capacity"] ?></td>
                       </tr>

                     </table>
                </div>
            </div>

<?php
 }else{
   ?>

   <h3 class="text-danger">Sorry No information found on this register Number</h3>

<?php
 }
?>
 
              </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               alert("Scanning Successfully Completed....");
               document.getElementById('text').value=c;
           });

        </script>
<?php

 
 
require_once("footer.php");

?>