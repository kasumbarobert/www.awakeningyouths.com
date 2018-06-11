<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>Create new Events</title>
</head>
<body>

<?php
require_once("connector.php");
connect();
session_start();
$logedUser=$_SESSION["loged_user"];
if($logedUser==null){
	header("location:login.php");
}

?>
	<div class='container' style="background:transparent; margin-left:2%;">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:1%;">
						<img src="../images/logo.jpg" width='100%'  class='thumbnail' style=' background-color:gold; border-radius:10px 10px 10px 10px;'/>

			</div>
		</div>
		
		<div class='row'>
		
		<?php
		require_once("adminNav.php")
		
		?>
			<div class='col-lg-9 panel panel-default' style="background-color:white; border-radius:5px 5px 5px 5px; padding:2%; margin-left:2%;">
				<form role="form" method='post' action='' enctype="multipart/form-data">
					<caption>
					 <h3 class='text-primary'>Fill in the fields below to create an event</h3>
					</caption>
					<div class="form-group  ">       
						<label for="name">Event Title</label>       
						<textarea type="text" class="form-control" id="event_title" name="event_title" style="height:40px;"></textarea>
					</div> 
					<div class="form-group">       
						<label for="name">Upload Event Photo</label>       
						<input type="file" class="" id="event_title" name="event_photo" />
						<label for="name"> Photo Description (Brief info about the uploaded image)</label> 
						<textarea type="text" class="form-control" id="event_photo_description" name="event_photo_description" style="height:60px;"></textarea>
					</div> 
					<div class="form-group form-inline">       
						<label for="name">Event Due Date</label>      
						<input type='date' class="form-control"  name='due_date' placeholder="YYYY-m-dd" />
							
						<label for="name">Event Due Time</label> 
						<input type='time' class="form-control"  name='due_time' placeholder="HH:mm"/>
						
						</div>
                    <div class="form-group ">
					
						    <label for="name">Venue</label> 
							<input type='time' class="form-control"  name='venue' />
					
					</div>					
					
					<div class="form-group">       
						<label for="name">Event Description (<i>this should not exceed 500 words</i>)</label>       
						<textarea type="text" class="form-control" id="description" name="description" style="height:200px;"></textarea>
						<div id='message_state' class='text-right'></div>
						<script>
						function check(){
						if(document.getElementById("description").value)
						{
							
							var entries=document.getElementById("description").value;
							document.getElementById("message_state").innerHTML="<p class=' text-info'>You have "+(2500-entries.length)+" characters left </p>";
						}
						else{
							document.getElementById("message_state").innerHTML="<p class=' text-info '>You have 2500 characters left</p>";
						}
						}
						
						setInterval("check()",0);
						</script>
					
					</div> 
					
					<div class="form-group pull-right form-inline">
					<button type='submit' class='btn btn-primary'>Create Event</button>
					<button type='reset' class='btn btn-warning'><i class="fa fa-remove"></i>Clear</button>
					</div>
				</form>
			
			</div>
			<div class='col-lg-3'>
		
		
			</div>
		</div>
			
			
	</div>
	<?php
require_once("connector.php");
require_once("required_files.php");
$con=connect();

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
		
		}

		mysql_close($con);
	}
	else{
		echo mysql_error();
	}
}
	
?>
	
</body>
</html>