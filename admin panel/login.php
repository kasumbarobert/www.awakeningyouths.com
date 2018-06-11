<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<link rel="icon" href="images/Briefcase.png" type="image/png">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 

<style >
body{
	background-color:#055650;
	margin-top:15%;
	
}

</style>
</head>


<body>
<?php
require_once("connector.php");
connect();
?>
<div class="container"  >

	<div class="row" >
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4" style="background-color:#FFFFFF; border-radius:7px 7px 0px 0px; ;" > <img src="images/mobile.png" class="img-responsive"  width="300"  /></div>
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
	</div>	
	<div class="row" >
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4" style="background-color:#FFFFFF; border-radius:0px 0px 7px 7px ; " style=" padding-top:2%;"> 
			
			
			<form role="form" name="login" method="post">
				<div class="form-group">
				<label for="name">UserName</label>
				<input type="text" name="username" class="form-control" placeholder="username" />
				
				<label for="name">Password</label>
				<input type="password" name="password" class="form-control" placeholder="password" />
				
				<br>
				<label>
				<input type="checkbox" name="rememeber" >  Remember Me
				</label>
				
				<input type="submit" name="authoriseMe" class="btn btn-primary btn-lg"  value="LOGIN" style="align:center; width:100%;"/>
			<br>
			</div>
			</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		</div>
	</div>
</div>

<?php
if(isset($_POST["authoriseMe"])){
	session_start();
	
	$select=mysql_query("select user_id FROM admin_users 
	WHERE username='".$_POST["username"]."' AND 
		  password='".sha1($_POST["password"])."'
	");
	if(!$select) echo mysql_error();
	if(mysql_num_rows($select)>0){
		$i=0;
		while($row=mysql_fetch_row($select,MYSQL_ASSOC)){
			$_SESSION["loged_user"]=$row["user_id"];
			$i++;
		}
	
		if($i>0){
			header("location:adminIndex.php");
		}
	}
	
	else
		
		{
		echo "<script>alert('invalid username or password')</script>";	
		}
}

?>

</body>

</html>

