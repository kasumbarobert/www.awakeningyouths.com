<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>AYU Events</title>

<script>
	function submitForm(form){
		document.getElementById(form).submit();
	}
	</script>

</head>
<body>

	<?php
	require_once("connector.php");
	connect();
	session_start();
	?>
	<div class='container'>
	<?php require("header.php");?>
		<div class='row' style=''>
				<div class='col-lg-8' class='panel panel-primary'>
				<?php
				if(isset($_GET['id']))
				{
					
					$eventid=$_GET['id'];//this get array variable is got whenever a user chooses to view a certain even
					
					$pick_event_info=mysql_fetch_array(mysql_query("SELECT * FROM events WHERE event_id='$eventid'"));
					// Full texts 	Event_ID 	Event_title 	Created_By 	Event_Description 	Due_Date 	due_time 	venue 	event_status
					$description=$pick_event_info['Event_Description'];
					$pic=$pick_event_info['Event_Description'];
					$event_title=$pick_event_info['Event_title'];
					
					if(date("Y-m-d")<$pick_event_info['Due_Date'])
					{
						$event_date="<span class='text-primary'>".$pick_event_info['Due_Date'] ."</span>";
						$event_time="<i class='fa fa-clock-o'></i> Event Time: <span class='text-primary'>".$pick_event_info['due_time'] ."</span>";
						
						//event date ,time formatted before being displayed
					}
					else{
						$event_date="<span class='text-success'>Event Completed</span>";
						$event_time='';
					}
					$venue=$pick_event_info['venue'];
					$get_image=mysql_query("SELECT Image_Name FROM pictorials WHERE event_id='$eventid'");
					
					if(mysql_num_rows($get_image)>0)
					{
						$picture=mysql_fetch_array($get_image);
						
						$featured_img=$picture['Image_Name'];
						echo
						"
						<h2>$event_title</h2>
						<div class='panel-body'>		
						<p><i class='fa fa-calendar'></i> Scheduled Date : $event_date</p>
						<p>$event_time</p>
						<p>Venue: <span>$venue<span></p>
						<div class='thumbnail'><img src='$featured_img' class='img-responsive featuredImg'/></div>
						<p>$description</p>
						</div>
						";
						
					}		
				}
				?>
				</div>
				<div class='col-lg-4'>
				<h3 class="text-center">Events</h3>
				<?php
				//php code to retrieve and display the recently uploaded events
				
				require_once("connector.php");
				$con=connect();
				//session_start();
				
				
				$pick_event=mysql_query("SELECT * FROM events ORDER BY due_date ASC");
				
				if($pick_event)
				{
					$i=1;
					while($event=mysql_fetch_array($pick_event))
					{
						$title=$event['Event_title'];
						$id=$event['Event_ID'];
						
						$string_to_display=substr($event['Event_Description'],0,70);
						$pick_img=mysql_query("SELECT Image_Name FROM pictorials WHERE Event_ID='".$id."' ");
						if(!$pick_img) echo mysql_error();
						if(mysql_num_rows($pick_img)>0){
							$imgp=mysql_fetch_row($pick_img,MYSQL_ASSOC);
							$imgPath=$imgp["Image_Name"];
							echo "						
						<div class='list-group-item' >

						 <a href='events.php?id=$id'> 
						 <img src='".$imgPath."' class='img-circle' height='80' width='80' style='padding-right:1%; padding-bottom:2%; border:solid silver 2px;'  />

						  <b style='color:navy; font-size:0.9em;'>".$title."</b>
						  <span class='help-block text-right'><small>Scheduled for ".($event['Due_Date'])." at ".$event['due_time']."</small></span>
						 </a>
						 
						 
						</div>
						
						
						
							";
						}
						
						else{
						echo "
						
							
						<div class='list-group-item' >
						<form action='viewevents.php' method='post' id='eventForm".$i."'>
						
						 <a href='javascript:{}' onclick=\"submitForm('eventForm".$i."');\" > 
						 

						
						  <input type='hidden' name='eventId' value='".$id."' />
						
						 
						 
						  <b style='color:purple;'>".$title."</b>
						 </a>
						 
						 </form>
						</div>
						";
					}
					$i++;
					}
				}
				else{
		echo mysql_error();
		}
				
			?>
				</div>
		</div>
	</div>
	<?php
   require_once("logform.php");
   require_once("footer.php");
   
   ?>
</body>
</html>
