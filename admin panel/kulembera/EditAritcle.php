

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
		if(isset($_POST["edit"])){//if the person has submitted using the edit button then bring the update form
			$getArticles=mysql_query("SELECT * FROM articles WHERE article_id=".$_POST["selArticleId"]." ");
			if(!$getArticles) echo mysql_error();
			IF(mysql_num_rows($getArticles)>0){
	
			while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
				  //article_id 	article_title 	image_path 	article_content post_date post_time posted_by 	status
			echo '<form action="" method="post" name="updatearticle">
			<input type="hidden" name="editedArticleId" value="'.$row["article_id"].'"/>
			<form action="articleMgt.php" method="post" enctype="multipart/form-data">
			<label for="name">Article Title <span style="color:red;">*</span></label>
			<textarea type="text" class="form-control"  name="articleTitle" style="max-height:55px; max-width:750px; height:50px;">'.$row["article_title"].'</textarea>
			</br>
			
			<label for="name">Article Content <span style="color:red;">*</span></label>
			<textarea class="form-control" style="height:250px;" name="articleContent">'.$row["article_content"].'</textarea>
			</br>
			<button type="submit" name="updateArticle" class="btn btn-primary pull-right" style=" color:white; height:35px; "><span class="glyphicon glyphicon-send pull-right"> Save </button>

			
			</form>
			';
			
			}
			 }
		}
		
		//if the person has submitted using the delete button then delete the content
		else if(isset($_POST["delete"])){
			$delete=mysql_query("DELETE FROM articles WHERE article_id=".$_POST["selArticleId"]." ");
			if(!$delete)echo mysql_error();
			else{
				echo "<script>alert('Article deleted')</script>";
				header("location:manageArticles.php");
			}
			
		}
		
		
		?>
			
			<?php
			
			if(isset($_POST["updateArticle"])){ //articleTitle articleContent  article_title 	image_path 	article_content
				$update=mysql_query("UPDATE articles set article_title='".$_POST["articleTitle"]."', article_content='".$_POST["articleContent"]."' WHERE article_id=".$_POST["editedArticleId"]."");
				
				IF(!$update) echo mysql_error();
				else{
					echo "<script>alert('Article  has been Updated')</script>";
				}
			}
			
			
			?>
			</div>
			</div>
			</div>
		