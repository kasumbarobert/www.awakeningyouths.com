<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>Contact AYU</title>

<script>
	function submitForm(form){
		document.getElementById(form).submit();
	}
	</script>

</head>
<body>
<?php
require_once("connector.php");
connect();
session_start();

?>


	<div class='container'>

		<?php require("header.php");?>
		<div class='row'>
		<div id='feedback' class='' style='padding-left:2%; margin-top:2%; font-size: 1.3em;'>
		</div>
			<div class='col-lg-7 panel panel-primary' style='padding :2%; margin-left:2%;'>
			<form role="form" class='form' method='post' action=''>
					<caption>
					 <h3 class='text-primary well'><center>Send us a message</center></h3>
					</caption>
					<span class='help-block'>The information you provide shall not be used for any other purpose other than response to your message</span>
					<div class="form-group">       
						<label for="name">Name <span style='color:red;'><small>*required</small><span></label>       
						<input type="text" class="form-control" id="name" name='name' placeholder="Enter your Name here"/>
					</div> 
					
					<div class="form-group">       
						<label for="name">Email (optional)</label> 
						<span class='help-block'><small>The response shall be sent to your email</small></span>
						<div class='input-group'>
							<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
							<input type='email' class="form-control" placeholder='example@domain.com' name='email' />
						</div>   
					</div>
					<div class="form-group">       
						<label for="name">Telephone Contact(optional)</label>       
						<div class='input-group'>
							<span class='input-group-addon'><i class='fa fa-phone'></i></span>
							<input type='text' class="form-control"  name='phone' />
						</div>   
					</div>
					<div class="form-group">       
						<label for="name">Message <span style='color:red;'><small>*required</small></label>       
						<div class='input'>
							<textarea  class="form-control"  name='message' rows='3' required='required'></textarea>
						</div>   
					</div>
					<div class="form-group pull-right form-inline">
					<button type='submit' class='btn btn-primary' name='message_sent'><i class='fa fa-send fa-1x'> Send message</i></button>
					<button type='reset' class='btn btn-warning'><i class="fa fa-remove fa-1x"> Clear</i></button>
					</div>
				</form>
			</div>
			<div class='col-lg-4' style='margin-left:1%;'>
			<center>
				<center><p class='well text-primary'>Contact Information<p></center>
				<p>
				<img src="images/phoneBig.png" class="img-responsive" height="50" width="50"/><br/>
				Telephone: +256 787-355-909
<br/>
				Telephone: +256 787-253-905<br/>
				Telephone: +256 757-265-509<br/>
				Telephone: +256 707-825-909<br/>
				</p>
				<!--
				<p>
				<img src="images/icon_globe.png" class="img-responsive" height="50" width="50"/><br/>
				
				</p>
				-->
				<img src="images/email_icon.jpg" class="img-responsive" height="50" width="50"/><br/>
				kenbunjo.kb@gmail.com<br/>
				martin@gmail.com<br/>
				asimwe.kb@gmail.com<br/>
				jolly@ymail.com<br/>
				</p>
				
				<p>
				<img src="images/group_folder_icon.png" class="img-responsive" height="50" width="50"/><br/>
				
	<a href="https://www.facebook.com/awakenyu?skip_nax_wizard=true"><i class="fa fa-facebook-official fa-2x" style="color:blue;"></i> </a>
	<a href="https://twitter.com/awakenyu1"><i class="fa fa-twitter-square fa-2x" style="color:lightBlue;"></i></a>
	<a href="https://www.youtube.com/channel/UCgEy2o3Yvomh5XZ7f_zT7jQ"><i class="fa fa-youtube fa-2x" style="color:red;"></i></a>
	<a href="https://www.flickr.com/people/137218930@N02/"><i class="fa fa-flickr fa-2x" style=""></i></a>
	<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-pinterest fa-2x" style=""></i></a>
	<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-instagram fa-2x" style=""></i></a>
	<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-tumblr-square fa-2x" style=""></i></a>
				<p>
				</center>
			</div>	
		</div>
			
	</div>
<?php
  
  require_once("userSignup.php");
  ?>

   <?php
   require_once("logform.php");
    require_once("footer.php");
   ?>
	<?php
		if(isset($_POST['message_sent']))
		{
			foreach($_POST as $key=>$value)
			{
				$_POST[$key]=mysql_fix_string($value);
			}
			
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			
			$insert_comment=mysql_query("INSERT INTO messages(name,email,message,telNo) VALUES('$name','$email','$message','$phone')");
			
			if($insert_comment)
			{
				$feedback="<span class='text-success'>Message Sent Successfully</span>";
				echo
				"
				<script>alert(\"Thank you $name.  Your message has been sent\")
				document.getElementById(\"feedback\").class=\"well\"
				document.getElementById(\"feedback\").innerHTML=\"$feedback\"
				</script>
				";
			}
		}
	?>
</body>
</html>