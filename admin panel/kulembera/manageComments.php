<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<title>Management Comments</title>

 
 

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
			$getArticles=mysql_query("SELECT * FROM articles");
			IF(mysql_num_rows($getArticles)>0){
				$i=1;
				echo "<table class='table table-hover table-responsive' height='70'>
				<caption><h3 class='text-primary text-center'>Select the Article whose comments you want to read or Delete</h3></caption>
				";
			  while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
				  //article_id 	article_title 	image_path 	article_content post_date post_time posted_by 	status
				  echo "
					<form name='form".$i."' action='ReadComments.php' method='post' >
					<input type='hidden' value='".$row["article_id"]."' name='selArticleId'/>
					<tr>
					<td><img src='../".$row["image_path"]."' width='70' height='70'  /></td>
					<td>".$row["article_title"]."</td>
					<td><center><button type='submit' name='edit' style='background:transparent; border:hidden;' ><i class='fa fa-eye fa-2x' style='color:black;'></i><i class='fa '> read Comments</i></button><center></td>
					</tr>

					
					</form>
				  ";
				  
				  $i++;
				  
			  }	//end while
			  echo "</table>";
			}//end if 
			
			else{
				echo "<p class='text-primary'>No articles exist in the database</p>";
			}
			
			?>
			
			
			</div>
		</div>
		
		</div><!--end container-->
		
		
		
		
		
		
