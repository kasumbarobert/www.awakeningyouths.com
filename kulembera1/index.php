<?php session_start();
if(!isset($_SESSION["loged_user"])){

	header("Location: login.php");


}
else
{
$logedUser=$_SESSION["loged_user"];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
error_reporting(E_ALL);
ini_set('display_errors','On');





?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <!-- Bootstrap -->    
<title>dashboard</title>
<link rel="icon" href="../images/Briefcase.png" type="image/png">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
 

<style>
body{
	margin-top:1%;

	background-image:url(images/streat.jpg);
}

.leftMenu{
	margin-top:1%;
	background-color:transparent;
	color:white !important;
	font-family:Adobe Garamond Pro Bold;
    font-size:1.2em;
}
.leftMenu:hover{
	
	color:purple !important;
	
}


</style>





<script>


function getInfo(givenId,messageId,senderNam,senderCont){
	//document.getElementById(givenId)
	var message=$("#"+givenId).val();
	var name=$("#"+senderNam).val();
	var contact=$("#"+senderCont).val();
	var id=$("#"+messageId).val();
	document.getElementById("messageBody").innerHTML=message
	document.getElementById("name").innerHTML=name
	document.getElementById("contact").innerHTML=contact
	
	var  dataString="MessageId="+id;
	
	$.ajax({
		type:"POST",
		url:"changeMessageStatus.php",
		data:dataString,
		success: function(){
			$(".container").load();
			
			

		}
		
	});
	
}




</script>

</head>




<body>
	<div class="container" style="background-color:transparent; margin-left:1%;" ><!--represent the whole section of the site i.e header and body-->
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:2%;">
			<img src="../images/logo.png" />
			</div>
		</div>
		
		<div class="row" >
		
			<?php
require_once("connector.php");
connect();

			require_once("adminNav.php");
			?>
		
		
		
		
		<div  id="messageDisplay" class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-top:2%; padding:2%; border-radius:5px 5px 5px 5px ; background-color:white; margin-left:3%;">
			
			<?php
			$read=1;
			$getArticles=mysql_query("SELECT * FROM messages WHERE status=0");
			IF(mysql_num_rows($getArticles)>0){
				$i=1;
				echo "<table class='table table-hover table-responsive' >
				<caption><h3 class='text-primary text-center'>Messages from the site Users</h3></caption>
				<tr class='text-success'><th>Name</th><th>Email</th><th>Contact</th><th>Read</th><th>Delete</th></tr>
				<tr class='text-primary'><th colspan='5' class='well'>Unread messages</th></tr>
				";
			  while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
				  //id  name email message telNo status
				  //status
				  $unread=0;
				  
					  
				  echo "
					
					
					<tr>
					
					<td>".$row["name"]."</td>
					<td><a href='mailto:".$row["email"]."' >".$row["email"]."</a></td>
					<td>".$row["telNo"]."</td>
				
				    <form name='form".$i.$i."' action='index.php' method='post' >
					<input type='hidden' value='".$row["id"]."' name='messageId".$i.$i."' id='messageId".$i.$i."'/>
					<input type='hidden' value='".$row["name"]."' name='senderNam".$i.$i."' id='senderNam".$i.$i."'/>
					<input type='hidden' value='".$row["telNo"]."' name='telNo".$i.$i."' id='telNo".$i.$i."'/>
					<textarea name='readSms' style='display:none;' id='message".$i.$i."'>".$row["message"]."</textarea>
				
					<td><button type='button' onclick=\"getInfo('message".$i.$i."','messageId".$i.$i."','senderNam".$i.$i."','telNo".$i.$i."');\" name='read' data-toggle='modal' data-target='#messageModal' class='readMessage' style='background:transparent; border:hidden;' ><i class='fa fa-eye fa-2x' style='color:black;'></i>Read</button></td>
					</form>
					
					
					<form name='form".$i."' action='deleteMessage.php' method='post' >
					<input type='hidden' value='".$row["id"]."' name='messageId'/>
					<td>
					<button type='submit' name='delete' style='background:transparent; border:hidden;'><i class='fa fa-trash-o fa-2x' style='color:red;'></i></button>

					</form>
					</td>		
					</tr>
				  ";
				 
				
				 
				  $i++;
				  
			  }	//end while

			  echo "</table>";
			}//end if 
			
			else{//
				echo "<p style='color:red;'>No Unread Messages exist in the database</p>";
			}
			
			
			//read messages
			$getmessages=mysql_query("SELECT * FROM messages WHERE status=1");
			IF(mysql_num_rows($getmessages)>0){
				$i=1;
				echo "<table class='table table-hover table-responsive' >
				
			 <tr class='text-primary' style=''><th colspan='5' class='well'><button class='lowerMenuToggle1' style='border:hidden; background-color:transparent; '>Already Read messages  <i class='fa fa-reorder (alias)'></i> </button></th></tr>";    
				
			  while($row=mysql_fetch_row($getmessages,MYSQL_ASSOC)){
				  //id  name email message telNo status
				  //status
				  $unread=0;
				  
					  
				  echo "
					
					
					<tr class='readMessages' style='display:none;'>
					
					<td>".$row["name"]."</td>
					<td><a href='mailto:".$row["email"]."' >".$row["email"]."</a></td>
					<td>".$row["telNo"]."</td>
				
				    <form name='form".$i.$i."' action='index.php' method='post' >
					<input type='hidden' value='".$row["id"]."' name='messageId".$i.$i."' id='messageId".$i.$i."'/>
					<input type='hidden' value='".$row["name"]."' name='senderNam".$i.$i."' id='senderNam".$i.$i."'/>
					<input type='hidden' value='".$row["telNo"]."' name='telNo".$i.$i."' id='telNo".$i.$i."'/>
					<textarea name='readSms' style='display:none;' id='message".$i.$i."'>".$row["message"]."</textarea>
				
					<td><button type='button' onclick=\"getInfo('message".$i.$i."','messageId".$i.$i."','senderNam".$i.$i."','telNo".$i.$i."');\" name='read' data-toggle='modal' data-target='#messageModal' class='readMessage' style='background:transparent; border:hidden;' ><i class='fa fa-eye fa-2x' style='color:black;'></i>Read</button></td>
					</form>
					
					
					<form name='form".$i."' action='deleteMessage.php' method='post' >
					<input type='hidden' value='".$row["id"]."' name='messageId'/>
					<td>
					<button type='submit' name='delete' style='background:transparent; border:hidden;'><i class='fa fa-trash-o fa-2x' style='color:red;'></i></button>

					</form>
					</td>		
					</tr>
				  ";
				 
				
				  
				  $i++;
				  
			  }	//end while

			  echo "</table>";
			}//end if 
			
			else{//
				echo "<tr style='color:red;'><td>Un read Messages exist in the database</td></tr>";
			}
			
			
			
			?>
			
			
			
			
			<?php
			if(isset($_POST["read"])){
				echo $_POST["readSms"];
				//messageId
			}
			
			?>
			</div>
		</div>
		
	</div><!--end of container div-->


	
   <div id="messageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style='margin-top:8%;'>
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" style='padding:1%;' data-dismiss="modal" aria-hidden="true">&times;</button>
          
		<center><h4 class="modal-title text-primary well" id="myModalLabel" style="background-color:lightBlue;" >Message From User</h4></center>
        </div>
		
        <div class="modal-body " >
		<div class='well'>
	    <center><b><p id="name"></p></b>  </center>
        <center> <p id="messageBody"></p></center> 
		<p>Contact: <span id="contact"></span></p> 
		</div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
	</div>
	</div>
  </div>
	
	<script>
	//readMessages  lowerMenuToggle1
	$(".lowerMenuToggle1").click(function(){
		//alert('yah');
		$(".readMessages").slideToggle("fast");
	});
	</script>

</body>
</html>