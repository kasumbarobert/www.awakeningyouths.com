<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>AYU Gallery</title>
</head>
<body>
	<div class='container'>
	<?php require("header.php");?>
	<div class='row'>
	<div class='col-lg-9'>
	<?php
		//$^CRG&RBN*HBNYYN is the file paths for the pictures to display
		//5672ghjathblkksjbsysjvsghaja is a get name for all pictures that can be displayed by this page
		if(isset($_GET['$^CRGRBN*HBNYYN']))
		{
			echo
			"
			<div class='thumbnail' style='background-color:grey;'>";
			echo "<center class='text-info' style='background-color:white; color:blue;'><h4>".$_GET['5672ghjathblkksjbsysjvsghaja']."</h4></center>
			<img src='".$_GET['$^CRGRBN*HBNYYN']."' class=\"img-responsive thumbnail\" width='600px' height='500px'/>";
			
			echo "</div>";
		}
		else
		{
			//display all the recent pictures
			require_once("connector.php");
					 // Image_Name 
					 connect();
					 $get_pics=mysql_query("SELECT * FROM pictorials ORDER BY Date_Uploaded DESC");
					 if($get_pics)
					 {
						 $count=1;
						 echo "
							<h3>Showing all recent pictures</h3>
						 <div class='row' style='padding-left:2%;'>";
						 while($pic=mysql_fetch_array($get_pics))
						 {
							 
							 echo
							 "<div class='col-lg-4 thumbnail' style='height:350px;'>
							 <a href='pictures.php?$^CRGRBN*HBNYYN=".$pic['Image_Name']." & 5672ghjathblkksjbsysjvsghaja=".htmlentities($pic['Caption'])."'>
							<img src=\"".$pic['Image_Name'] ."\" alt='Tents Models'  class=\"img-responsive\" style='height:310px;'/>            
							 <h5>View picture</h5></a>
							</div>
							 ";
							 if($count%3==0){
								 echo"</div><div class='row' style='padding-left:2%;'>";
							 }
							$count++; 						 
						 }
					echo "</div>";
					 }
		}
	?>
	</div>
	<div class='col-lg-3'>
	<h3><a href='#' style='color:grey;'>Follow us on <i class='fa fa-youtube  fa-2x'></i></a></h3> 
	<iframe class='media' style='width:100%;' src="https://www.youtube.com/embed?v=TYvvMLIR1pI&feature=youtu.be">
	</iframe>
	</div>
	</div>
	</div>
</div>

<?php
  
  require_once("userSignup.php");
  ?>

   <?php
   require_once("logform.php");
   require_once("footer.php");
   
   ?>
  
</body>
</html>
