

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<title>Article Management</title>
<link rel="icon" href="../images/Briefcase.png" type="image/png">
 
 

<style>
body{
	margin-top:1%;

}

</style>

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

   
   
   
   
	<div class="container" style="background:transparent; margin-left:2%;" ><!--represent the whole section of the site i.e header and body-->
		
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:1%;">
			<img src="../images/logo.png" />
			</div>
		</div>
		
		
		
		<div class="row" style="">
		
		
			<?php
			require_once("adminNav.php");
			?>
		
		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%; padding:2%; border-radius:5px 5px 5px 5px ; background-color:white; margin-left:3%;">
			
				<?php
		if(isset($_POST["edit"])){//if the person has submitted using the edit button then bring the update form
			$getEvent=mysql_query("SELECT * FROM events WHERE Event_ID='".$_POST["selEventId"]."' ");
			if(!$getEvent) echo mysql_error();
			IF(mysql_num_rows($getEvent)>0){
	
			while($row=mysql_fetch_row($getEvent,MYSQL_ASSOC)){
				  //Event_ID 	Event_title 	Created_By 	Event_Description 	Due_Date 	due_time
			echo '
			
			<form role="form" method="post" action="" enctype="multipart/form-data">
					<caption>
					 <h3 class="text-primary">Edit only the Fields you Want to change in the Event</h3>
					</caption>
					<div class="form-group  ">  
						<input type="hidden" value="'.$row["Event_ID"].'" name="editedEventId" />
						<label for="name">Event Title</label>    
						<textarea type="text" class="form-control" id="event_title" name="event_title" style="height:40px;">'.$row["Event_title"].'</textarea>
					</div> 
					 
					<div class="form-group form-inline">       
						<label for="name">Event Due Date</label>      
						<input type="date" class="form-control" value="'.$row["Due_Date"].'"  name="due_date" placeholder="YYYY-m-dd" />
							
						<label for="name">Event Due Time</label> 
						<input type="time" class="form-control" value="'.$row["due_time"].'"  name="due_time" placeholder="HH:mm"/>
						
						</div> 
                    <div class="form-group ">
					
						    <label for="name">Venue</label> 
							<input type="time" class="form-control" value="'.$row["venue"].'"  name="venue" />
					
					</div>					
					
					<div class="form-group">         
						<label for="name">Event Description (<i>this should not exceed 500 words</i>)</label>       
						<textarea type="text" class="form-control" id="description" name="description" style="height:200px;">'.$row["Event_Description"].'</textarea>
						<div id="message_state" class="text-right"></div>
						<script>
						function check(){
						if(document.getElementById("description").value)
						{
							
							var entries=document.getElementById("description").value;
							document.getElementById("message_state").innerHTML="<p class=" text-info">You have "+(2500-entries.length)+" characters left </p>";
						}
						else{
							document.getElementById("message_state").innerHTML="<p class=" text-info ">You have 2500 characters left</p>";
						}
						}
						
						setInterval("check()",0);
						</script>
					
					</div> 
					
					<div class="form-group pull-right form-inline">
					<button type="submit" name="updateEvent" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-warning"><i class="fa fa-remove"></i> Clear</button>
					</div>
				</form>	
			
			';
			
			}
			 }
		}
		
		//if the person has submitted using the delete button then delete the content
		else if(isset($_POST["delete"])){
			$delete=mysql_query("DELETE FROM events WHERE Event_ID='".$_POST["selEventId"]."' ");
			if(!$delete)echo mysql_error();
			else{
				echo "<script>alert('event deleted')</script>";
				header("location:manageEvents.php");
			}
			
		}
		
		
		?>
			
			<?php
			
			if(isset($_POST["updateEvent"])){ ////Event_ID 	Event_title 	Created_By 	Event_Description 	Due_Date 	due_time
				$update=mysql_query("UPDATE events set Event_title='".$_POST["event_title"]."',
				Event_Description='".$_POST["description"]."',
				Due_Date='".$_POST["due_date"]."',
				due_time='".$_POST["due_time"]."',
				venue='".$_POST["venue"]."'


				WHERE Event_ID='".$_POST["editedEventId"]."' ");
				//editedEventId    event_title due_date due_time  venue  description 
				IF(!$update) echo mysql_error();
				else{
					echo "<script>alert('Event  has been Updated')</script>";
				}
			}
			
			
			?>
			</div>
			</div>
			</div>
		