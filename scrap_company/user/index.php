 
<?php

require_once("header.php");
 if($usertype=="Admin"){
  require_once("admin_index.php");
 }
 else if($usertype=="Customer"){
  require_once("customer_index.php");
 }
 else if($usertype=="Company"){
  require_once("company_index.php");
 }
 
require_once("footer.php");

?>