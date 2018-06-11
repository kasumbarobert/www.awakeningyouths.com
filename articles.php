
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>Stories</title>
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<link rel="icon" href="images/Briefcase.png" type="image/png">

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

<body id="body">
<?php
require_once("connector.php");
connect();
session_start();
//$logedUser=$_SESSION["loged_user"];


?>
	<div class="container" ><!--represent the whole section of the site i.e header and body-->
		
	
			<?php require("header.php");?>
	
		<div class="row" style="">
			<div class="col-lg-8 list-group" style="padding-left:2%;">
			<span style=""><h3>Recent Articles</h3></span>
			
			<?php
			//article_id article_title image_path article_content post_date post_time posted_by status	
			$getArticles=mysql_query("SELECT * FROM articles ORDER BY post_date DESC ");
			IF(mysql_num_rows($getArticles)>0){
				$i=1;
				while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
					if($row["image_path"]!=null){
						echo "<div id='articleBody' class='list-group-item panel panel-primary'><form action='articlesHandler.php' method='post' id='articleForm".$i."'>
						  <div id='articleTitle'><a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > <h3>".$row["article_title"]."</h3></a>
						  <div id='articleImage' class='thumbnail'>"."<a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" ><img src='".$row["image_path"]."' class='img-responsive featuredImg'  /></a>
						  </div>
						  <input type='hidden' name='articleId' value='".$row["article_id"]."' />
						  
						  </div>
						  <div id='articleContent'>".substr($row["article_content"],0,300)." ...<a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > <b>Read More...</b></a>
						  
						  </div>
						  </form>
						  </div>";
					}
					else{
						echo "<div id='articleBody' class='list-group-item panel panel-primary'><form action='articlesHandler.php' method='post' id='articleForm".$i."'>
						  <div id='articleTitle'><a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > <h3>".$row["article_title"]."</h3></a>
						  <input type='hidden' name='articleId' value='".$row["article_id"]."' />
						  
						  </div>
						  <div id='articleContent'>".substr($row["article_content"],0,300)." ...<a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > <b>Read More...</b></a>
						  
						  </div>
						  </form>
						  </div>";
					}
					
					$i++;
				}
			}
			
			?>
			
			
			
			</div>
		<div class='col-lg-4' >
			
			<?php require_once("sidebar.php");?>
			
			
		</div>
		
	</div><!--end of container div-->
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