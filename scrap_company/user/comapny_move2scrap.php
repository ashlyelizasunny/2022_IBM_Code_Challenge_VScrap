 
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
                
                <div class="table-responsive1">
                  <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();

 $request_id= $_GET["request_id"];

$qry1="SELECT * FROM scrap_request s join company c on(c.cmp_id = s.cmp_id) where s.request_id='$request_id'";

$c= $obj->GetSingleRow($qry1);
 
$i=0;
if(is_array($c)){


  if(isset($_POST["submit"])){
        $remarks= $_POST["remarks"];
        
            $qry="update scrap_request  set status='completed', remarks='$remarks' where request_id='$request_id'";
            $data=$obj->Manipulation($qry); 
            
$c= $obj->GetSingleRow($qry1);
echo "<h4 class='text-success'>Successfully completed.....</h4>";     
    
  }


 
?>

<form method="post" action="comapny_move2scrap.php?request_id=<?php echo $request_id; ?>"  >
               

      <table class="table table-bordered" id="dataTable"   cellspacing="0">
                   
                   <tbody>           
  <th>Register Number</th> <td><?php echo $c["reg_number"]  ?></td>
  </tr><tr>
  <th>Email</th><td><?php echo $c["user_email"]  ?></td>
  </tr><tr>
  
  <th>Booking Date</th><td><?php echo $c["booking_date"]  ?></td>
                     
  </tr><tr>
  <th>Scheduled Date</th><td><?php echo $c["schedule_date"]  ?></td>
  </tr><tr>                
                     
                      <th>Company</th>  <td><?php echo $c["full_name"]  ?></td>
                    

</tr><tr>
                      <th>Status</th>  <td><?php echo $c["status"]  ?></td>       
                   
                    </tr>
                    <tr>
                      <th>Remarks</th>  <td><?php echo $c["remarks"]  ?></td>       
                   
                    </tr>
                    <?php
if($c["status"]=="verified"){
?>
<tr>
                      <th>Enter Remarks</th>  <td> <textarea type="text" required class="form-control" name="remarks" ></textarea> </td>       
                   
                    </tr>

                    <tr>
                      <th></th>  <td> <input type="submit" class="btn btn-danger" name="submit"  value="Set As Scrapping Completed"/> </td>       
                   
                    </tr>

<?php
}


?>

</tbody>
                </table>





                   
</form>
<?php
}

?>
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
     