
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>dashboard</title>
<link rel="icon" href="images/Briefcase.png" type="image/png">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 

<style>
body{
	margin-top:1%;

	background-image:url(images/bgimage1.jpg);
}

.leftMenu{
	margin-top:1%;
	background-color:transparent;
	color:white !important;
	font-family:Adobe Garamond Pro Bold;
    font-size:1.2em;
}
.leftMenu:hover{
	
	color:purple !important;
	
}


</style>

</head>

<body>
<?php

require_once("connector.php");
session_start();
//$logedUser=$_SESSION["loged_user"];


?>

	<div class="container" style="background-color:transparent; margin-left:1%;" ><!--represent the whole section of the site i.e header and body-->
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:2%;">
			<img src="images/logo.png" />
			</div>
		</div>
		
		<div class="row" style="margin-top:2%;">
		
			<div class="col-lg-2 col-sm-2 col-md-2 list-group">
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-file-text-o"></i> Post Event</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-file-text-o"></i> Post Article</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-file-image-o"></i> Post Pictures</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-user-plus"></i> Add User</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-cogs"></i> Settings</a>
				
				<button class="list-group-item " id="lowerMenuToggle" style="border:hidden; color:white; background-color:transparent; margin-top:1%;">More <i class='fa fa-reorder (alias)'></i> </button>
				<div id="lowerMenu" style="display:none;">
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-edit (alias) " style="color:red;"></i> Manage Events</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-edit (alias) " style="color:red;"></i> Manage Articles</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-edit (alias)" style="color:red;"></i> Manage comment</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-trash-o " style="color:red;"></i> Delete User(s)</a>
				<a class="list-group-item text-center leftMenu" href="#"><i class="fa fa-trash-o " style="color:red;"></i> Delete Picture(s)</a>
				</div>
			</div>
		</div><!--end of navigation of page-->
		
		
			
			
		
		
	</div><!--end of container div-->

	<script>
	$("#lowerMenuToggle").click(function(){
		$("#lowerMenu").slideToggle("slow");
	});
	
	</script>


</body>
</html>