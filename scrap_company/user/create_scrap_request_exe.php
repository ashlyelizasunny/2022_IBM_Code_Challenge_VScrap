<?php 
require_once("../connectionclass.php");

 

$image=$_FILES['vehicle_image']['name'];

$imgpath="vehicle_image/";
$img_path=str_replace("\\","/",$imgpath);
$files=explode(".",$image);
$extension=end($files);
  $filename=time().".".$extension;
 
move_uploaded_file($_FILES['vehicle_image']['tmp_name'],$img_path.$filename);

$digits = 4;
$verification_code= rand(pow(10, $digits-1), pow(10, $digits)-1);
 
$registered_number=$_POST['registered_number'] ; 
$user_email=$_POST['email'] ;
echo $cmp_id=$_POST['cmp_id'] ; 
$schedule_date=date("Y-m-d",strtotime($_POST['schedule_date'])) ; 
 
$booking_date= date('Y-m-d');  
$remarks="";
$status="open";
$obj=new connectionclass() ; 
$qry="select * from scrap_request where reg_number='$registered_number'";
$row=$obj->getSingleRow($qry); 
if($row){
echo "<script type='text/javascript'> 
alert('Request already exist for this register number') 
 window.location.href='scan_qr_code.php';
</script>";
return;
}
 
$obj=new connectionclass() ;

;
$qry="INSERT INTO scrap_request ( user_email, reg_number, booking_date,schedule_date, cmp_id, remarks, image, status,code) VALUES ('$user_email', '$registered_number', '$booking_date', '$schedule_date', '$cmp_id', '$remarks', '$filename', '$status','$verification_code') "; 
$data=$obj->Manipulation($qry); 
if($data["Status"]=="true"){
 
   echo $obj->alert("You are successfully registered","customer_show_scrap_request.php");
}else{
    echo $obj->alert("Registration Failed","scan_qr_code.php");
}
//header("location:../index.php");
?>