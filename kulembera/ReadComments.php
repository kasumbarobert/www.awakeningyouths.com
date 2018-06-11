

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<title>Read comments</title>

 
 

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

if(isset($_POST["selArticleId"])){
	$_SESSION["selectedArticle"]=$_POST["selArticleId"];
}
else if(isset($_SESSION["selectedArticle"])){
	
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
		if(isset($_POST["edit"]) || $_SESSION["selectedArticle"]!="" ) {// comment_id article_id 	comment_details 	posted_by 	posted_date 	posted_time
			$getcommnets=mysql_query("SELECT * FROM comments WHERE article_id=".$_SESSION["selectedArticle"]." ");
			if(!$getcommnets) echo mysql_error();
			IF(mysql_num_rows($getcommnets)>0){
			echo "<table class='table table-responsive'>
			<tr><caption></caption></tr>
			";
			$i=1;
			while($row=mysql_fetch_row($getcommnets,MYSQL_ASSOC)){
				  //comment_id article_id 	comment_details 	posted_by 	posted_date 	posted_time
			
			echo "
			<form name='form".$i."' action='deleteComment.php' method='post' >
					<input type='hidden' value='".$row["comment_id"]."' name='selArticleId'/>
					<tr>
					<td>".$row["comment_details"]."</td>
					<td><center><button type='submit' name='delete' style='background:transparent; border:hidden;'><i class='fa fa-trash-o fa-2x' style='color:red;'></button></center></td>
					</tr>

					
					</form>
			
			";
			
			
			
			
			$i++;
			}
			echo "</table>";
			 }
		}
		
	
		
		?>

			</div>
			</div>
			</div>
		