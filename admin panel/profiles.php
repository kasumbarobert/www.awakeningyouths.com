
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>Article Management</title>
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

<body id="body">
<?php
require_once("connector.php");
connect();
session_start();
//$logedUser=$_SESSION["loged_user"];


?>
	<div class="container" ><!--represent the whole section of the site i.e header and body-->
		
            
                
			<?php require("header.php");?>
            <div  class="row" style="background-color:white; padding-left: 2%; padding-right: 2%;">
                <center><p class="text-info fa-3x">The Awakening Youths Team</p><center>
            <?php
            $profiles = mysql_query("SELECT * FROM profiles");
            $count = 0;
            while($member = mysql_fetch_row($profiles, MYSQLI_ASSOC))
            {
                if($count%2==0)
                {
                    if ($count==0)
                    {
                      ?>
            <div class="row" >
            <?php
                    }
 else {
     ?>
                      </div><div class="row">
                          <?php
                          
 }
              ?>
                          <div class="col-lg-5 panel panel-primary" style="padding:2%;">
                              <div class="row" style=""><center>
            <?php
                echo "<img class='img img-responsive img-circle' src='".$member["pic"]."' width='150px' height='200px'/>";
                    echo "<p class='text-success fa-2x'>".$member['name']."</p>"
               ?>
                                  </center></div><div class="row">
                                      <?php echo $member['message']?>
                                  </div></div><div class="col-lg-2"></div>
               <?php                
                }
 else {
     ?>
                                  <div class="col-lg-5 panel panel-primary" style="padding:2%;">
                         <div class="row"><center>
            <?php
                echo "<img class='img img-responsive img-circle' src='".$member["pic"]."' width='150px' height='200px'/>";
                    echo "<p class='text-success fa-2x'>".$member['name']."</p>"
               ?>
                             </center></div><div class="row">
                                      <?php echo $member['message']?>
                                  </div></div>
                          <?php
 }
                $count++;
            }
	
	?>
			
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