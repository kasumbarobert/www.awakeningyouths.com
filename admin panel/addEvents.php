<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>Create new Events</title>
</head>
<body>
	<div class='container'>
		
		<div class='row'>
			<div class='col-lg-9 panel panel-default'>
				<form role="form" method='post' action='create_event.php' enctype="multipart/form-data">
					<caption>
					 <h2 class='text-primary'>Fill in the fields below to create an event</h2>
					</caption>
					<div class="form-group ">       
						<label for="name">Event Title</label>       
						<textarea type="text" class="form-control" id="event_title" name="event_title"></textarea>
					</div> 
					<div class="form-group">       
						<label for="name">Upload Event Photo</label>       
						<input type="file" class="" id="event_title" name="event_photo" />
						<label for="name"> Photo Description (Brief info about the uploaded image)</label> 
						<textarea type="text" class="form-control" id="event_photo_description" name="event_photo_description"></textarea>
					</div> 
					<div class="form-group">       
						<label for="name">Event Due Date</label>       
						<div class='form-group'>
							<input type='date' class="form-control"  name='due_date' />
							<label for="name">Event Due Time</label> 
							<input type='time' class="form-control"  name='due_time' />
						</div>   
					</div>
					<div class="form-group">       
						<label for="name">Event Description (<i>this should not exceed 500 words</i>)</label>       
						<textarea type="text" class="form-control" id="description" name="description" rows='20'></textarea>
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
</body>
</html>