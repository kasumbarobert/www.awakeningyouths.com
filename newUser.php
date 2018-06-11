<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title><?php echo "New User";?></title>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 jumbotron' style='padding:0px;'>
				<h1>The menu goes here</h1>
			</div>
		</div>
		<div class='row'>
			<div class='col-lg-9 panel panel-info'>
				<form role="form">
					<caption>
					 <h2 class='text-primary'>Register to join the ever expanding <abbr title='Awakening Youth Uganda'>AYU</abbr> family!</h2>
					</caption>
					<div class="form-group form-inline">       
						<label for="name">First Name</label>       
						<input type="text" class="form-control" id="name" placeholder="Enter your First Name" style=''/>
						<label for="name"> &nbsp;Last Name</label>       
						<input type="text" class="form-control" id="name" placeholder="Enter your Last Name(s)" />
					</div> 
					<div class="form-group">       
						<label for="name">Date of Birth</label>       
						<input type="date" class="form-control" id="name"/>    
					</div>
					<div class="form-group row">
						<div class='col-lg-8'>       
						<label for="name">Username</label>       
						<input type="text" class="form-control" id="name" placeholder="Create your username"/>
						</div>
						
					</div> 
					<div class="form-group row">
						<div class='col-lg-8'>
						<label for="name">Password</label>       
						<input type="password" class="form-control" id="name" placeholder="Add password"/>
						<label for="name">Confirm Password</label>       
						<input type="password" class="form-control" id="name" placeholder="Re-enter your password"/>
						</div>
						<div class='col-lg-4 help-block text-center' style='padding-top:3%;'>
						Avoid using obvious words like your name or phone numbers as passwords.
						</div>
					</div> 
					<div class="form-group">       
						<label for="name">Email (optional)</label>       
						<div class='input-group'>
							<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
							<input type='email' class="form-control" placeholder='example@domain.com' name='email' />
						</div>   
					</div>
					<div class="form-group">       
						<label for="name">Telephone Contact(optional)</label>       
						<div class='input-group'>
							<span class='input-group-addon'><i class='fa fa-phone'></i></span>
							<input type='email' class="form-control"  name='email' />
						</div>   
					</div>
					<div class="form-group pull-right form-inline">
					<button type='submit' class='btn btn-primary'><i class='fa fa-user fa-2x'> Create account</i></button>
					<button type='reset' class='btn btn-warning'><i class="fa fa-remove fa-2x"> Clear</i></button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>