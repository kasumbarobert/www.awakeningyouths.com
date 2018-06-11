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
			$getEvents=mysql_query("SELECT * FROM events");
			IF(mysql_num_rows($getEvents)>0){
				$i=1;
				echo "<table class='table table-hover table-responsive' height='70'>
				<caption><p class='text-primary text-center'>Select the Event you want to edit or delete it right Away</p></caption>
				";
			  while($row=mysql_fetch_row($getEvents,MYSQL_ASSOC)){
				  //get the image from the database
				  $pick_img=mysql_query("SELECT Image_Name FROM pictorials WHERE Event_ID='".$row["Event_ID"]."' ");
						if(!$pick_img) echo mysql_error();
						if(mysql_num_rows($pick_img)>0){
							$imgp=mysql_fetch_row($pick_img,MYSQL_ASSOC);
						$imgPath=$imgp["Image_Name"];}
				  
				  // Event_ID 	Event_title 	Created_By 	Event_Description 	Due_Date 	due_time
				  echo "
					<form name='form".$i."' action='EditEvents.php' method='post' >
					<input type='hidden' value='".$row["Event_ID"]."' name='selEventId'/>
					<tr>
					<td><img src='../".$imgPath."' width='70' height='70'  /></td>
					<td>".$row["Event_title"]."</td>
					<td><center><button type='submit' name='edit' style='background:transparent; border:hidden;' ><i class='fa fa-edit (alias) fa-2x' style='color:green;'></i></button><center></td>
					<td><center><button type='submit' name='delete' style='background:transparent; border:hidden;'><i class='fa fa-trash-o fa-2x' style='color:red;'></button></center></td>
					</tr>

					
					</form>
				  ";
				  
				  $i++;
				  
			  }	//end while
			  echo "</table>";
			}//end if 
			
			else{
				echo "<p class='text-primary'>No Events exist in the database</p>";
			}
			
			?>
			
			
			</div>
		</div>
		
		</div><!--end container-->
		
		
		
		
		
		
