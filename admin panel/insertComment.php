<?php
require_once("connector.php");
connect();
session_start();
//comment chosenArticle guestName guestEmail
//comment="+comment+"&logedUserzMail="+logedUserzMail;
$article=$_SESSION["chosenArticle"];
//comment_id article_id comment_details posted_by posted_date posted_time
	If(isset($_POST["comment"])){
		$date=date("Y/m/d");
		$time=date("H:i");
		$insert=mysql_query("INSERT INTO comments (article_id,comment_details,posted_by,posted_date,posted_time) VALUES 
		(
		'".$article."',
		'".$_POST["comment"]."',
		'".$_POST["logedUserzMail"]."',
		'".$date."',
		'".$time."'
		
		)
		");
	}
	
	


?>