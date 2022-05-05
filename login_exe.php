<?php
session_start();
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$username=$_POST['username'];
$password=$_POST['password']; 
$qry="select usertype from login where username='$username' and password='$password' ";
$exe=$obj->GetSingleData($qry);

$_SESSION['username']=$username;

if($exe=='Admin')
{
	$_SESSION['usertype']=$exe;
	header("location:../user/index.php");
}
elseif ($exe=='Customer') 
{
	$_SESSION['usertype']=$exe;
	header("location:../user/index.php");
}elseif ($exe=='Company') 
{
	$_SESSION['usertype']=$exe;
	header("location:../user/index.php");
}
 
else
{
	 echo $obj->alert("Invalid Username or password","login.php");
}
?>