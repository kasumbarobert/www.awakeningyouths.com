<?php
require_once("connector.php");
$con=connect();



if(isset($_POST["MessageId"])){
$changeStatus=mysql_query("UPDATE messages SET status=1 WHERE id=".$_POST["MessageId"]." ");	
if(!$changeStatus) echo mysql_error();
}
mysql_close($con);




?>