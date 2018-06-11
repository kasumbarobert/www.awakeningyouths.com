<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 

<?php require_once("connector.php");
connect();
?>
<title>upload pictures</title>
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
	<div class='container' style="background:transparent; margin-left:2%;">
	
	
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:1%;">
			<img src="../images/logo.png" />
			</div>
		</div>
		
		
		
		<div class="row" style="">
		
		
			<?php
			require_once("adminNav.php");
			?>
		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " style="padding-top:2%; background-color:white; padding:2%; border-radius:5px 5px 5px 5px;">
			<form action="uploadPictures.php" method="post" enctype="multipart/form-data">
			<h3 class="text-primary">The Photos uploaded here will be shown in the gallery</h3>
			<label for="name">Attach Image</label>
			<input type="file" name="articleImage"  />
			</br>
			<label for="name">Brief description about the picture <span style="color:red;">*</span></label>
			<textarea type="text" class="form-control" name="articleTitle" style="max-height:50px; max-width:750px; height:50px;"></textarea>
			</br>
			<button type="submit" name="postArticle" class="btn btn-default pull-right" style="background:#428bca; color:white; height:40px; "><span class="glyphicon glyphicon-send pull-right"> POST</button>
			</form><!--form that will be geting data for creating an article-->
			</div>
		
			
		</div>
		
	</div><!--end of container div-->

	

		
	<?php
	if(isset($_POST["postArticle"])){
		
		$date=date("Y-m-d");
		
		$folder="images/";
		$path=$folder.basename($_FILES["articleImage"]["name"]);
		$path2="../".$folder.basename($_FILES["articleImage"]["name"]);
		if(basename($_FILES["articleImage"]["name"])!=null){
		move_uploaded_file($_FILES["articleImage"]["tmp_name"],$path2);
		
		
		}
		else{
		$path="";	
		}
		// Full texts 	Image_Name 	Event_ID 	Posted_By 	Date_Uploaded 	Caption 
//posted_by should be session varible of loged in person		
		$insert=mysql_query("INSERT INTO pictorials (Image_Name,Caption,Date_Uploaded) 
		values (
		'".$path."',
		'".$_POST["articleTitle"]."',
		
		'".$date."'
		
		
		)
		
		");
		if(!$insert) echo mysql_error();
		else{
			
			echo "<script>alert('picture has been succefully uploaded');</script>";
		}
	}
		
	
	
	?>

</body>
</html>