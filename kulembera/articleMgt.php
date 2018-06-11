
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
			<form action="articleMgt.php" method="post" enctype="multipart/form-data">
			<label for="name">Article Title <span style="color:red;">*</span></label>
			<textarea type="text" class="form-control" name="articleTitle" style="max-height:50px; max-width:750px; height:40px;" required></textarea>
			</br>
			<label for="name">Attach Image</label>
			<input type="file" name="articleImage"  />
			</br>
			<label for="name">Article Content <span style="color:red;">*</span></label>
			<textarea class="form-control" style="height:250px;" name="articleContent" id='articleContent' onChange='check();'></textarea>
			</br>
			<button type="submit" name="postArticle" class="btn btn-default pull-right" style="background:#428bca; color:white; height:40px; "><span class="glyphicon glyphicon-send pull-right"> POST</button>
			</form><!--form that will be geting data for creating an article-->
			</div>
			
			<script>
			function check()
			{
				var content=document.getElementById("articleContent").value;
				
				if(content.test("/[\\n]/"))
				{
					alert("Contains new line");
				}
			}
			</script>
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
		'".ereg_replace( "\n",'<p></p>', $_POST['articleContent'])."',
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