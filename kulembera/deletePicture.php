<?php

             //$f=fopen($path);
			//unlink($f);
require_once("connector.php");
$con=connect();

if(isset($_POST["delete"])){
$delete=mysql_query("DELETE FROM pictorials WHERE Image_Name='".$_POST["pictureName"]."' ");	
if(!$delete) echo mysql_error();

else{
	
	unlink("../".$_POST["pictureName"]);
	header("location:deletePictures.php");
}


mysql_close($con);
}




?>