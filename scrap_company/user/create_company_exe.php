<?php
require_once("../connectionclass.php");

$fullname=$_POST['fullname'] ;
$phone=$_POST['phone'] ;
$email=$_POST['email'] ;
$address=$_POST['address'] ;
$state=$_POST['state'] ;
$password=$_POST['password'] ;
$district=$_POST['district'] ;
$obj=new connectionclass() ;
$qry="select username from login where username='$email'";
$row=$obj->getSingleRow($qry);
if($row){
echo "<script type='text/javascript'>
alert('Email already Exists.')
window.location.href='admin_new_company.php';
</script>";
return;
}

$obj=new connectionclass() ;
$checkusername="select count(*) from login where username='$email'";
$resultcount=$obj->GetSingleData($checkusername);
if($resultcount>0)
{
    echo $obj->alert("Email ID Already exists","register.php");
}
else
{
$qry="insert into login(username,password,usertype)values('$email','$password','Company')";
$data=$obj->Manipulation($qry);
if($data["Status"]=="true"){

$obj=new connectionclass() ;
    $qry="INSERT INTO company (full_name, address, phone, email, state,district) VALUES ( '$fullname', '$address', '$phone', '$email', '$state','$district')";
    $data1=$obj->Manipulation($qry);
    echo $obj->alert("Successfully added the company","admin_companies.php");
}else{
    echo $obj->alert("Registration Failed","admin_new_company.php");
}
}
//header("location:../index.php");
?>
