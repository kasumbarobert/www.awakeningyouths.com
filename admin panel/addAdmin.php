
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>Add User</title>
<link rel="icon" href="images/Briefcase.png" type="image/png">
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet"> 
 
 


<script src="bootstrap/js/tests/vendor/jquery.min.js"></script>
<script src="bootstrap/js/dropdown.js"></script>


<script src="display.js"> </script> 
<script src="jquery1.js"> </script> 

<style>
body{
	margin-top:1%;

}

</style>

</head>

<body>
<?php
require_once("connector.php");

?>
	<div class="container" ><!--represent the whole section of the site i.e header and body-->
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#054550; opacity:3;" role="navigation">
					
					<div>
						<ul class="nav navbar-nav">
							<li ><a href="index.php"  style="color:white;" >Home</a></li>
							<li class="active"><a href="articleMgt.php" style="color:white;" >Articles</a></li>
							<li><a href="#" style="color:white;" class="navbar-right">blog</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div><!--end of navigation of page-->
		<div class="row" style="margin-top:5%;">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%;">
			<form action="addAdmin.php" method="post" enctype="multipart/form-data">
			<label for="name">First Name<span style="color:red;">*</span></label>
			<label for="name">Last Name<span style="color:red;">*</span></label>
			<label for="name">Email<span style="color:red;">*</span></label>
			</br>
			<label for="name">Attach Image</label>
			<input type="file" name="articleImage" />
			</br>
			<label for="name">Article Content <span style="color:red;">*</span></label>
			</br>
			<button type="submit" name="postArticle" class="btn btn-default pull-right" style="background:#428bca; color:white; margin-top:10px;"><span class="glyphicon glyphicon-send pull-right"> POST</button>
			</form><!--form that will be geting data for creating an article-->
			</div>
			
			
		</div>
		
	</div><!--end of container div-->

	
	<?php
	if(isset($_POST["postArticle"])){
		
		echo "yes";
		
		
		
		if(basename($_FILES["articleImage"]["name"])!=null){
			echo "best";
		}
		
	}
	
	
	?>

</body>
</html>