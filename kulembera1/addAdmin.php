
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 
<title>Article Management</title>
<link rel="icon" href="../images/Briefcase.png" type="image/png">
 
 
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
	<div class="container"  style="background:transparent; margin-left:2%;"><!--represent the whole section of the site i.e header and body-->
	
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:1%;">
			<img src="../images/logo.png" />
			</div>
		</div>
		
		
		
		<div class="row" style="">
		
		
			<?php
			require_once("adminNav.php");
			?>
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%; background-color:white; padding:2%; border-radius:5px 5px 5px 5px;">
			<h3 class="text-primary">This form is used to add new users that can manage the content of the website.</br>
			The user can be given a default password and username which He/she can change any time.
			</h3>
			<form action="" method="post" enctype="multipart/form-data">
			<label for="name">First Name<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="fName" required></input>			
			<label for="name">Last Name<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="lName" required/>
			<label for="name">Email<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="email" required/>
			
			<label for="name">Username<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="username" required/>
			
			<label for="name">Password<span style="color:red;">*</span></label>
			<input type="password" class="form-control" name="password1" required/>
			
			<label for="name">Confirm Password<span style="color:red;">*</span></label>
			<input type="password" class="form-control" name="password2" required/>
			
			</br>
			<div class="form-group form-inline pull-right">
			<button type="reset"  class="btn btn-danger " style="color:white; height:35px;"><span class="glyphicon glyphicon-send pull-right"> CANCEL </button>

			<button type="submit" name="addUser" class="btn btn-primary " style="color:white; height:35px;"><span class="glyphicon glyphicon-send pull-right"> REGISTER </button>
			</div>
			</form><!--form that will be geting data for creating an article-->
			</div>
			
			
		</div>
		
	</div><!--end of container div-->

	
	<?php
	if(isset($_POST["addUser"])){
		//user_id 	fname 	lname 	username 	email 	password 
		//fName  lName email username  password1 password2
		if($_POST["password1"]!=$_POST["password2"]){
			echo "<script>alert('passwords do not match. please reEnter the information and submit')</script>";
		}
		else{
		$insert=mysql_query("INSERT INTO admin_users 
		(fname,lname,username,email,password)
		VALUES (
		'".$_POST["fName"]."',
		'".$_POST["lName"]."',
		'".$_POST["username"]."',
		'".$_POST["email"]."',
		'".sha1($_POST["password1"])."'
		)
		");
		if($insert){
		
		echo "<script>alert('the user has been registered. make sure you have memorised the password and username')</script>";

		}
		}//end else 
	}
	
	?>

</body>
</html>