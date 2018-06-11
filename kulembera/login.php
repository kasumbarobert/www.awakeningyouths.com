<?php
require_once("connector.php");
$con=connect();

if(isset($_POST["authoriseMe"])){
	session_start();
	
	$select=mysql_query("select * FROM admin_users 
	WHERE username='".$_POST["username"]."' AND 
		  password='".sha1($_POST["password"])."'
	");
	if(!$select) echo mysql_error();
	if(mysql_num_rows($select)>0){
		$i=0;
		while($row=mysql_fetch_row($select,MYSQL_ASSOC)){
			$_SESSION["loged_user"]=$row["user_id"];
			$_SESSION["userFname"]=$row["fname"];   	
			$_SESSION["userLname"]=$row["lname"];
			$i++;
			
		
		}
		
		if(isset($_SESSION["loged_user"])){
			header('location: index.php');
		}
	
		
	}
	
	else
		
		{
		echo "<script>alert('invalid username or password')</script>";	
		}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<link rel="icon" href="../images/headlog1.png" type="image/png">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 

<style >
body{
	background-color:#066650;
	margin-top:15%;
	
}

</style>
</head>


<body>



<div class="container" style="background-color:transparent; margin-top:1%; " >

	<div class="row" >
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4" style="background-color:#FFFFFF; border-radius:7px 7px 0px 0px; ;" >
		<center><img src="../images/logo.jpg" width='200'  class='thumbnail' style=' border-radius:10px 10px 10px 10px;'/>
</center></div>
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
	</div>	
	<div class="row" >
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4" style="background-color:#FFFFFF; border-radius:0px 0px 7px 7px ; " style=" padding-top:2%;"> 
			
			
			<form action="login.php" name="login" method="post">
				<div class="form-group">
				<label for="name">UserName</label>
				<input type="text" name="username" class="form-control" placeholder="username" />
				
				<label for="name">Password</label>
				<input type="password" name="password" class="form-control" placeholder="password" />
				
				<br>
				<!--<label>
				<input type="checkbox" name="rememeber" >  Remember Me
				</label>-->
				
				<input type="submit" name="authoriseMe" class="btn btn-primary btn-lg"  value="LOGIN" style="align:center; width:100%;"/>
			<br>
			</div>
			</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 col-bg-4"></div><!--dummy col-->
		</div>
	</div>
</div>



</body>

</html>

