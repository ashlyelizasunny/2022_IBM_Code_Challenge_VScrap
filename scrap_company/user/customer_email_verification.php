 
                  <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();

 $reg_id= $_GET["uid"];

$qry1="SELECT * FROM registration where    reg_id='$reg_id'";

$c= $obj->GetSingleRow($qry1);
 
$i=0;
if(is_array($c)){
 
        
            $qry="update registration  set user_status='active' where reg_id='$reg_id'";
            $data=$obj->Manipulation($qry); 
             $obj->alert("Verfication Successfully completed.....","index.php");
          
      }else{
        $obj->alert("No Account Found","index.php");
          
        
      }
 
?>
 