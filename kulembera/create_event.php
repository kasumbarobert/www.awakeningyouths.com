<?php
require_once("connector.php");
require_once("required_files.php");
$con=connect();
session_start();
//$article=$_SESSION["chosenArticle"];

if(isset($_POST["event_title"]))
{
	foreach($_POST as $key=>$value) //to apply htmlentities on all submitted values
	{
		$_POST[$key]=mysql_fix_string(htmlentities($value));
	}
	
	$title=$_POST['event_title'];
	$time_due=$_POST['due_time'];
	$date_due=$_POST['due_date'];
	$description=$_POST['description'];
	
	//count the current available events
	$count_present_events=mysql_num_rows(mysql_query("SELECT event_id FROM events"));
	
	$event_id="event_".($count_present_events+1);//create the id of the new event
	
	$insert_event=mysql_query("INSERT INTO events(event_id,event_title,event_description,due_date,due_time) VALUES('$event_id','$title','$description','$date_due','$time_due')");
	//query to insert the event into the database
	
	if($insert_event)
	{
		if($_FILES)
		{
			$folder="images/";
		$path=$folder.basename($_FILES["event_photo"]["name"]);
		$caption=$_POST['event_photo_description'];
		if(basename($_FILES["event_photo"]["name"])!=null){
		move_uploaded_file($_FILES["event_photo"]["tmp_name"],$path);
		
		$insert_picture=mysql_query("INSERT INTO pictorials(Image_Name,event_id,date_uploaded, caption) VALUES('$path','$event_id','CURDATE()','$caption')") or die(mysql_error());
		
		
		}
		echo "no sense";
		}
		header("Location:about_ayu.php");
		mysql_close($con);
	}
	else{
		echo mysql_error();
	}
}
	
?>