<?php
require_once("connector.php");
connect();
if(isset($_POST["name"])){ //user_id name email password
	$insert=mysql_query("INSERT INTO other_users (name,email,password)
	values (
	'".$_POST["name"]."',
	'".$_POST["email"]."',
	'".sha1($_POST["password"])."'
	
	)");
	
	
}

?>
