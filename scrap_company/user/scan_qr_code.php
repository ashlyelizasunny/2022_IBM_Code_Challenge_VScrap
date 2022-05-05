 
<?php

require_once("header.php");
 

?> 
<script type="text/javascript" src="js/adapter.min.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/instascan.min.js"></script>
<style>
#preview{
  border:1px solid #ccc;
  margin:10px;
}


</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Scan QR Code</h1>
           </div>

          
        

          <!-- Content Row -->
          <div class="row">

           

            <div class="col-lg-12 mb-4">

            

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Scan your RC Book QR Code</h6>
                </div>
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <video class="thumbnail" id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <label>SCANED QR CODE</label>
                    <form method="get" action="create_scrap_request.php" >
                    <input type="text" name="rc_book_number" required id="rc_book_number" readonyy="" placeholder="Register Number"    class="form-control"> <br>
                    <input type="submit" value="Search" class="float-right btn btn-danger" />
                </div>
            </div>
 
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
               document.getElementById('rc_book_number').value=c;
           });

        </script>
<?php

 
 
require_once("footer.php");

?>