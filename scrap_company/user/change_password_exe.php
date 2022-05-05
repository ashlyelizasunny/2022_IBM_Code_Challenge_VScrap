<?php 
session_start();
require_once("../connectionclass.php");
$obj=new connectionclass();
$cpwd=$_POST['pwd1'];
$npwd=$_POST['pwd2'];
$copwd=$_POST['pwd3'];

$uname=$_SESSION['username'];
$sql="select * from login where username='$uname'";
$exe=$obj->GetSingleRow($sql);
$pwd=$exe['password']; 
if($cpwd==$pwd)
{
	if($npwd==$copwd)
	{
	  $qry="update login set password='$npwd' where username='$uname'";	
	  $exe=$obj->Manipulation($qry);
	  echo $obj->alert("successfully changed","change_password.php");
	}
	else
	{
		echo $obj->alert("new & confirm password is not same","change_password.php");
	}
	
}
else
{
echo $obj->alert("current password is incorrect","change_password.php");
}


?>