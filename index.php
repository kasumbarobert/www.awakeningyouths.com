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


<style>
    body{
        
    }
    </style>
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
		<div class='row' style=''>
			<div class='col-lg-8'>
			<div class='thumbnail row'>
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
							<div class=\"carousel-caption\" style='background-color:black; position:absolute; left:0px; bottom:0px; opacity:0.6; width:100%; margin-left:0px
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
					<div class='panel panel-default'>
					<div class='panel-body'>
					<p>
					Tick. Tock. Tick. Tock.<br />
					Can you hear that sound? That is the sound of a bomb ticking away, and that bomb is Uganda’s population. Over fifty percent of Uganda’s population is aged below thirty. That means that in fifty years, over fifty percent of Uganda’s population will be aged between fifty and eighty. That, right there, could either be a recipe for disaster or a huge opportunity we as a nation cannot afford to miss. In fifty years, Uganda’s young population could either take advantage of the statistics to catapult the country into prosperity, or could allow the best most productive years of their lives to go to waste and keep the country in a stagnant state of underdevelopment. The former option is the more desirable one, of course, but unfortunately, most of Uganda’s youths are waiting for change to happen to them instead of making the change they want to see happen. We spend our entire lives waiting to get to the next level in school, waiting to get accepted at that job we were interviewed for, waiting for the government to uplift the average Ugandan’s living standards… 
					</p>
					<p>
					What would happen if the youths of Uganda took up the tool that is our youth and used it to create opportunities for ourselves? What would happen if, instead of waiting to get a call from that office that interviewed us, we all went out and started up something that would not only garner us a salary at the end of the month, but also improve the country as a whole? Uganda is blessed with a plethora of natural resources. A decade ago, it would have been okay for Uganda to take her time with development. We would be at the stage where all we would have to worry about development-wise would be the physical building of our nation. Now, however, as we move deeper into the computer age, it has become imperative that Uganda develops not only physically, but technologically and, for the people, mentally. For every road we need built, we need ten times as many internet cables. It’s no longer just about the engineers who can follow already written manuals and build the same old things, or the doctors who read the same old books and learn only to parrot what the books say, or the mechanics who just fix cars and add nothing to them. No, the world has evolved, and with it, the idea of development has changed as well. As a country, we need engineers who will look at these already made manuals and make something new; doctors who will discover new ways to combat old and new diseases; mechanics who will not only fix cars but also build cars, or ships, or planes… We need computer wizards to chart our path in the ever growing cyber world. We need leaders to guide the nation in the right direction. We need writers and artistes to tell the world more about our country; to stand out and say, “Look! We’re a beautiful country of diverse talents and abilities!”
					</p>
					<p>
					We need teachers to pass on education to the younger generation; to teach them to be the pillars of this nation… And who better to do all these wonderful things than you and I, the youth of Uganda? We’re at a stage in our lives where we have been blessed with vitality and endless capability. If we stand up together to champion this noble cause, we can build a much better Uganda.
					</p>
					<p>
					This organisation is dedicated to enlightening and empowering the youth of Uganda to rise up to the challenge and transform our country into a true pearl of the current times. Together, we can be the change we want to see. Together, we can.
					</p>
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