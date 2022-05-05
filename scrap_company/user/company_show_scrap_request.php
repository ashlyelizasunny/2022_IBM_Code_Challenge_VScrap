 
<?php

require_once("header.php");
 
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

         

          <!-- Content Row -->
          <div class="row">

           

            <div class="col-lg-12 mb-4">

            

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Scrap Request</h6>
                </div>
                <div class="card-body">
                
                <div class="table-responsive">
                  <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();

 $cmp_id= $obj->GetSingleData("select cmp_id from company where email='$username'");

$qry="SELECT * FROM scrap_request s join company c on(c.cmp_id = s.cmp_id) where c.cmp_id='$cmp_id' and  status in('open','verified')";

$requests= $obj->GetTable($qry);
 

?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Image</th>
                    <th>Register Number</th>
                      <th>Email</th>
                      <th>Booking Date</th>
                      <th>Scheduled Date</th>
                      <th>Company</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
$i=0;
foreach($requests as $c){
  $i++;
?>
  <tr>
  <td><img src="vehicle_image/<?php echo $c["image"]  ?>" width="200" /></td>
  <td><?php echo $c["reg_number"]  ?></td>
  <td><?php echo $c["user_email"]  ?></td>
                      <td><?php echo $c["booking_date"]  ?></td>
                      <td><?php echo $c["schedule_date"]  ?></td>
                      <td><?php echo $c["full_name"]  ?></td>
                      <td><?php echo $c["status"]  ?></td>
                      <td><?php if($c["status"]=="open"){
                        ?>
 <a href="company_scrap_verify.php?request_id=<?php echo $c["request_id"]  ?>" class="btn btn-sm btn-danger">Verify Now</a>

<?php


                      }else if($c["status"]=="verified"){
                        ?>
 <a href="comapny_move2scrap.php?request_id=<?php echo $c["request_id"]  ?>" class="btn btn-sm btn-danger">Move to Scrap</a>

<?php


                      }
                      
                      
                      
                      
                      ?></td>
                   
                    </tr>
<?php
}

?>

                   
                  </tbody>
                </table>
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
     