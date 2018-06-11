
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>Article Management</title>
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
connect();
session_start();
$logedUser=$_SESSION["loged_user"];
if($logedUser==null){
	header("location:login.php");
}

?>
	<div class="container" ><!--represent the whole section of the site i.e header and body-->
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#054550; opacity:3;" role="navigation">
					
					<div>
						<ul class="nav navbar-nav">
							<li ><a href="index.php"  style="color:white;" >users</a></li>
							<li class="active"><a href="articleMgt.php" style="color:white;" >Manage Articles</a></li>
							<li><a href="#" style="color:white;" class="navbar-right"></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div><!--end of navigation of page-->
		<div class="row" style="margin-top:5%;">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%;">
			<form action="articleMgt.php" method="post" enctype="multipart/form-data">
			<label for="name">Article Title <span style="color:red;">*</span></label>
			<textarea type="text" class="form-control" name="articleTitle" style="max-height:50px; max-width:750px; height:50px;"></textarea>
			</br>
			<label for="name">Attach Image</label>
			<input type="file" name="articleImage"  />
			</br>
			<label for="name">Article Content <span style="color:red;">*</span></label>
			<textarea class="form-control" style="max-height:300px; max-width:750px; height:300px;" name="articleContent"></textarea>
			</br>
			<button type="submit" name="postArticle" class="btn btn-default pull-right" style="background:#428bca; color:white; height:40px; "><span class="glyphicon glyphicon-send pull-right"> POST</button>
			</form><!--form that will be geting data for creating an article-->
			</div>
			
			
		</div>
		
	</div><!--end of container div-->

	

		
	<?php
	if(isset($_POST["postArticle"])){
		
		$date=date("Y/m/d");
		$time=date("H:i");
		$folder="images/";
		$path=$folder.basename($_FILES["articleImage"]["name"]);
		
		if(basename($_FILES["articleImage"]["name"])!=null){
		move_uploaded_file($_FILES["articleImage"]["tmp_name"],$path);
		}
		else{
		$path="";	
		}
		//article_id article_title image_path article_content post_date post_time posted_by status		
		$insert=mysql_query("INSERT INTO articles (article_title,image_path,article_content,post_date,post_time,
		posted_by,status) 
		values (
		'".$_POST["articleTitle"]."',
		'".$path."',
		'".$_POST["articleContent"]."',
		'".$date."',
		'".$time."',
		'".$logedUser."',
		'open'
		)
		
		");
		if(!$insert) echo mysql_error();
		else{
			
			echo "<script>alert('article Posted');</script>";
		}
	}
		
	
	
	?>

</body>
</html>