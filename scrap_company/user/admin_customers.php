 
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
                  <h6 class="m-0 font-weight-bold text-primary">Cutomers List</h6>
                </div>
                <div class="card-body">
                
                <div class="table-responsive">
                  <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();
$qry="SELECT * FROM registration";

$customers= $obj->GetTable($qry);
 

?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>State</th>
                      <th>District</th>
                      <th>Aadhar</th>
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
$i=0;
foreach($customers as $c){
  $i++;
?>
  <tr>
  <td><?php echo $i  ?></td>
  <td><?php echo $c["full_name"]  ?></td>
                      <td><?php echo $c["address"]  ?></td>
                      <td><?php echo $c["phone"]  ?></td>
                      <td><?php echo $c["email"]  ?></td>
                      <td><?php echo $c["state"]  ?></td>
                      <td><?php echo $c["district"]  ?></td>
                      <td><?php echo $c["aadhar"]  ?></td>
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
     