<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>Awakening the Youth Uganda</title>

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
		<script src="mystyles/js/transition.js"></script>
		<div class='row' >
			<div class='col-lg-8 '>
			<div class='thumbnail row' style='margin-left:0.5%;' >
				<div id='myCarousel' class='carousel slide col-lg-12'>
				   
				    <div class="carousel-inner">
				       
				     <?php
					 //php code to retrieve and display pictures for display
					 require_once("connector.php");
					 // Image_Name 
					 connect();
					 $get_pics=mysql_query("SELECT * FROM pictorials ORDER BY Date_Uploaded DESC");
					 if($get_pics)
					 {
						 $count=0;
						 while($pic=mysql_fetch_array($get_pics))
						 {
							 if($count==0){//to display the first picture with class active
							 echo
							 "<div class='item active'>
							<img src=\"".$pic['Image_Name'] ."\" alt='Tents Models'  class=\"img-responsive\" style='height:400px;'/>            
							<div class=\"carousel-caption\" style='background-color:black; position:absolute; left:0px; bottom:0px; opacity:0.6; width:100%; margin-left:0px
							!important;'> <a href='pictures.php?$^CRGRBN*HBNYYN=".$pic['Image_Name']." & 5672ghjathblkksjbsysjvsghaja=".htmlentities($pic['Caption'])."' style='opacity:1; color:white;'><h4>".substr($pic['Caption'],0,200)."...</h4></a></div>
							</div>
							 ";
							 }
							 else if($count==5)
							 {
								 break;
							 }
							 else{//to display the remaining pics with no class active
								 echo
							 "<div class='item'>
							<img src=\"".$pic['Image_Name'] ."\" alt='Tents Models'  class=\"img-responsive\" width='100%' style='height:400px;'/>            
							<div class=\"carousel-caption\" style='background-color:black; position:absolute; left:0px; bottom:0px; opacity:0.5; width:100%; margin-left:0px
							!important;'> <a href='pictures.php?$^CRGRBN*HBNYYN=".$pic['Image_Name']." & 5672ghjathblkksjbsysjvsghaja=".htmlentities($pic['Caption'])."' style='opacity:1; color:white;'><h4>".substr($pic['Caption'],0,200)."...</h4></a></div>
							</div>
							 ";
							 }
							 $count++;
						 }
					 }
					 ?>
					 <!--<div class='item'>
					 <embed src='images/videos/1) Robert Kasumba.mp4'></embed>
					 </div>-->
				    </div>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev" style=" height:40%;margin-left:2%;">
		<i class='fa fa-chevron-circle-left fa-2x' style="padding-top:50%; "></i>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="prev" style="height:40%;margin-right:2%;">
		<i class='fa fa-chevron-circle-right fa-2x' style="padding-top:50%; "></i>
		</a>
 </div>
					
		
    
	<script>
$("#myCarousel").carousel('cycle');
</script>
<script src="mystyles/js/vendor/jquery.min.js"></script>
<script src="mystyles/js/transition.js"></script>
<script src="mystyles/js/carousel.js"></script>
</div>

<div class='panel panel-default' style='padding-left:0%; '>
					<div class='panel-body'>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p> Through a number of continued engagments we will be able to motivate the future drivers of the world to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of theestablished to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p> Through a number of continued engagments we will be able to motivate the future drivers of the world to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					<p>Awakening the youth Uganda is a non-profit organization established to help and inspire the youths in Africa. Through a number of continued engagments we will be able to motivate the future drivers of the world</p>
					</div>
					</div>
			</div>
			
			<div class='col-lg-4'>
			<?php require_once("sidebar.php");//contains the side bar that has the events and recent articles?>
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