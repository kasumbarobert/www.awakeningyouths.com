<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>Article</title>
<link rel="icon" href="images/Briefcase.png" type="image/png">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<script>
	function submitForm(form){
		document.getElementById(form).submit();
	}
	

</script>

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

if(isset($_POST["articleId"])){
	$_SESSION["chosenArticle"]=$_POST["articleId"];
			}
else if(isset($_SESSION["chosenArticle"])){
	
	
	}
else{
	header("location:articles.php");
}
?>



<div class="container" ><!--represent the whole section of the site i.e header and body-->
		
			<?php require("header.php");?>
		
  
		
		
		
		<div class="row" style="">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 panel" style="" >
			<input type='hidden'  id='logedUserzMail' name='choosenArticle' />
				<div class='panel-body'>
				<?php
				
				if(isset($_SESSION["chosenArticle"])|| isset($_POST["chosenArticle"])){
					//$_SESSION["chosenArticle"]=$_POST["chosenArticle"];
				
							$getArticle=mysql_query("SELECT * FROM articles WHERE  article_id='".$_SESSION["chosenArticle"]."' ");
							
							IF(!$getArticle) ECHO MYSQL_ERROR();
							IF(mysql_num_rows($getArticle)>0){
								$i=1;
								
								
								while($row=mysql_fetch_row($getArticle,MYSQL_ASSOC)){
									if($row["image_path"]!=null){
										echo "<div id='articleBody' '>
										<div id='articleTitle'> <h2 class='text-center'>".$row["article_title"]."</h2>
										  </div>
										  <div id='articleImage' class='thumbnail'>"."<a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" ><img src='".$row["image_path"]."' class='img-responsive featuredImg'  /></a>
										  </div>
										  <div id='articleContent'> <p>".$row["article_content"]."</p>
										  </div>
										  
										  </div>";
									}
									else{
										echo "<div id='articleBody'>
										  
										  <input type='hidden' name='articleId' value='".$row["article_id"]."' />
										  <div id='articleTitle'><h2 class='text-center text-primary'>".$row["article_title"]."</h2>
										  </div>
										  <div id='articleContent'><p>".$row["article_content"]."</p>
										  </div>
										  
										  </div>";
										
									}
									
									$i++;
								}
								echo "<p><b>Comments</b></p>";
							}
							
				}//CHECK IF USER HAS CLICKED ON ANY ARTICLE
				?>
				
				<div id="commentsDivision">
				</div>
				</div><!--end comments division-->
				<?php
				
				
				//this data is obtained from ajax ie. submitformsdata.js
				
					if(isset($_SESSION["logedUserEmail"])){
						echo "<script>document.getElementById('logedUserzMail').value='".$_SESSION["logedUserEmail"]."'</script>";
					}
					else if(isset($_POST["logMeIn"]) ){ ////user_id name email password
					
						
						$check=mysql_query("SELECT * FROM other_users WHERE email='".$_POST["logEmail"]."'
						AND password='".sha1($_POST["logPassword"])."' ");
						if(!$check) echo mysql_error();
						if(mysql_num_rows($check)>0){
							while($row=mysql_fetch_row($check,MYSQL_ASSOC)){
								$_SESSION["logedUserEmail"]=$row["email"];
								$_SESSION["userType"]="otherUser";
					echo "<script>document.getElementById('logedUserzMail').value='".$_SESSION["logedUserEmail"]."'</script>";
							}
							}
							}
					
									
					?>
				
				
				<form action="" method="post" name="commentsForm"><!--form for entering Comment-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:2%;">
			<label for="name">Your Comment</label>
			<?php echo "<input type='hidden' value='".$_SESSION["chosenArticle"]."' name='articleId' /> "; ?>
			<textarea class="form-control" id="comment" name="comment" style="width:750px; max-width:750px; max-height:200px; height:200px; "></textarea>
			</div>
			
			
			
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:2%;">
			<b>Sign up or Log in</b></br></br>
			
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signModal" > <span class=""></span>Sign up using Email and Password</button>
			
			</br>

			</br>
			
			
			

			
			</div><!--end div for form to get iput form user-->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-top:2%;">
			
			</br>
			<?php echo "<input type='hidden' value='".$_SESSION["chosenArticle"]."' id='choosenArticle' name='choosenArticle' /> "; ?>
			</br>
			<button class="btn btn-primary" id="postComment" type="submit" style="background-color:#057750;" onclick="return false;"><span class="glyphicon glyphicon-send"></span> Post Your Comment</button>
			</div>
			</form>
		
			
			</div><!--end col-8 div-->
					<div class='col-lg-4'>
			<?php require_once("sidebar.php");?>
			</div>
			
			
		</div>

		
		
		
	</div><!--end of container div-->



  
  
  <?php
  
  require_once("userSignup.php");
  ?>

   <?php
   require_once("logform.php");
    require_once("footer.php");
   ?>
  
  

 

<script src="mystyles/js/refreshComments.js"></script>

</body>
</html>