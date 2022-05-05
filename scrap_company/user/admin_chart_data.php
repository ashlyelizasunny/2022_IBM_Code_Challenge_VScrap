        
        <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();
require_once("../connectionclass.php");
$obj=new ConnectionClass();
 
$result=array();

$months=array(1,2,3,4,5,6,7,8,9,10,11,12);
$year=date("Y");

foreach($months as $m){

  $qry="SELECT * FROM scrap_request s join company c on(c.cmp_id = s.cmp_id) where year(schedule_date)= $year and month(schedule_date)= $m and  status='completed'";

  $requests= $obj->GetTable($qry);

  $result[]=count($requests);

   
}





echo json_encode($result);

?>