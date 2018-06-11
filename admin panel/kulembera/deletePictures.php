<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<title>Article Management</title>
<link rel="icon" href="../images/headlog1.png" type="image/png">
 
 

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
			<img src="../images/logo.jpg" width='100%'  class='thumbnail' style=' background-color:gold; border-radius:10px 10px 10px 10px;'/>

			</div>
		</div>
		
		
		
		<div class="row" style="">
		
		
			<?php
			require_once("adminNav.php");
			?>
		
		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%; padding:2%; border-radius:5px 5px 5px 5px ; background-color:white; margin-left:3%;">
			
			<?php
			//$f=fopen($path);
			//unlink($f);
			$getArticles=mysql_query("SELECT * FROM pictorials");
			IF(mysql_num_rows($getArticles)>0){
				
				echo "<table class='table table-hover table-responsive' height='70'>
				<caption><h3 class='text-primary text-center'>Click on the delete button to delete the image Completly from the System.
				
				</h3><span style='color:red;'>*the delete action is will completly delete the image form the system<span></caption>
				";
				$i=1;
			  while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
				  //Image_Name Event_ID Posted_By Date_Uploaded Caption
				  if($row["Event_ID"]==""){
					if($i%2==1){
						  echo "<tr>";
					  }
						  
				  echo "
				  	<form name='form".$i."' action='deletePicture.php' method='post' >
					<input type='hidden' value='".$row["Image_Name"]."' name='pictureName'/>
					
					<td><img src='../".$row["Image_Name"]."' width='150' height='150'  />
					
					<center><button type='submit' name='delete' style='background:transparent; border:hidden;'><i class='fa fa-trash-o fa-2x' style='color:red;'></button></center></td>
					

					
					</form>
				  ";
				   if($i%2==0){
						  echo "</tr>";
					  }
				  }
				  
				  $i++;
				  
			  }	//end while
			  echo "</table>";
			}//end if 
			
			else{
				echo "<p style='color:red;'>*No Gallary photos are there for removal. the remaining images in the gellary are attacked to some events or articles</p>";
			}
			
			?>
			
			
			</div>
		</div>
		
		</div><!--end container-->
		
		
		
		
		
		
