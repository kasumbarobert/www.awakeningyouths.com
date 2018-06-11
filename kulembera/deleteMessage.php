<?php

             //$f=fopen($path);
			//unlink($f);
require_once("connector.php");
$con=connect();

if(isset($_POST["delete"])){
$delete=mysql_query("DELETE FROM messages WHERE id=".$_POST["messageId"]." ");	
if(!$delete) echo mysql_error();

else{
	
	header("location:index.php");
}


mysql_close($con);
}




?>