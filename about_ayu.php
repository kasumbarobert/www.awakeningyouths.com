<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>About Awakening the Youth Uganda</title>
<link rel="icon" href="images/headlog1.png" type="image/png" />
</head>
<body>


<?php
require_once("connector.php");
connect();
session_start();

?>
	<div class='container'>
		
			
	     <?php require("header.php");?>
		<div class='row'>
			<div class='col-lg-8 panel panel-info' style="border:hidden;">
				<div class='panel-heading' style='background-color:gold; opacity:0.8; color:white;'>
					<h2><b>Awakening the Youth Uganda(<abbr title='Awakening Youth Uganda'>ayu</abbr>)</b></h2>
				</div>
				<h4 class='text-info'><b>MISSION</b></h4>
				<p >
					To empower the Ugandan youth in order to exploit this demographic dividend in the social, economical, and political development of this nation. With the rates of drug abuse and morbidity in Uganda getting threateningly high, poverty levels and unemployment getting alarming, our major aim is  turning them into tomorrow &quot;s educators and innovators, entrepreneurs and investors, health professionals and scientists, politicians and peace makers.

				</p>
				<h4 class='text-info'><b>VISION</b></h4>
				<p class=>
				 To become one of the most influential youth organisations in the world by changing and impacting scores of lives, keeping national peace, greatly influencing national economic, social and political development.
				</p>
				<h4 class='text-info'><b>OBJECTIVE</b></h4>
				<p >
				
To use this demographic dividend (the youth) in improving the country’s political, social and economic welfare mainly through;
 <ol>
 <li>Improving the capacities and enabling the aspirations of youth so that they can contribute to and benefit from a more stable, democratic, and prosperous community and nation.</li>
   <li>By strengthening youth programming, participation and partnership.</li>
           <li>By doubling efforts in fighting the rate of spread of HIV/AIDS and TB through organizing movements and campaigns.</li>
           <li>By fighting unemployment and creating an alternative to formal education</li>
</ol>					
				</p>
				
				<h3><a href='files/abstract.pdf'><i class='fa fa-book'></i> Click to read full description</a></h3>
			</div>
			
			
			<!--here -->
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