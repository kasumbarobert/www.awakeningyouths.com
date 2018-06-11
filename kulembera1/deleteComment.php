<?php
require_once("connector.php");
$con=connect();

if(isset($_POST["delete"])){
$delete=mysql_query("DELETE FROM comments WHERE comment_id=".$_POST["selArticleId"]." ");	
if(!$delete) echo mysql_error();

else{
	header("location:ReadComments.php");
}


mysql_close($con);
}
?>