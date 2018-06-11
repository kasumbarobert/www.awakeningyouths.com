<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

		<div id="login" style="  background-color:lightGrey;" >
		<div class="modal-body">
		  <h4>Log in with your Email and Password</h4> 
          <form action="" name="logForm" method="post" >
		  
		  <label for="name">Email</label>
		  <input type="text" class="form-control"  name="logEmail" required />
		  <label for="name">Password</label>
		  <input type="password"  class="form-control"  name="logPassword" required />
		  <br>
		  <center>
		  <button type="submit" name="logMeIn"  id="logMeIn" class="btn btn-primary">Log in</button>
		  <button  name="logMeIn"  id="logMeIn" class="btn btn-default" data-dismiss="modal">Close</button>
		  </center>
		  
		  </form>
	      </div>
		  
		 </div>
		  
		</div>
	</div>
</div>
		  
		<!--  <script>
			$("#loginBtn").click(function(){  //login  logMeIn
				   
				$("#login").show();
			});

			$("#logMeIn").click(function(){
				$("#login").hide();
			});


			</script>-->
       <!--end for loging in-->
	   
	   
	   
	   		<?php
				
				
				
					if(isset($_POST["logMeIn"])){ ////user_id name email password
					
						
						$check=mysql_query("SELECT * FROM other_users WHERE email='".$_POST["logEmail"]."'
						AND password='".sha1($_POST["logPassword"])."' ");
						if(!$check) echo mysql_error();
						if(mysql_num_rows($check)>0){
							while($row=mysql_fetch_row($check,MYSQL_ASSOC)){
								$_SESSION["logedUserEmail"]=$row["email"];
								$_SESSION["userType"]="otherUser";
								echo "<script>alert('You have Succefully Loged Feel free to participate in any activity on this site.')</script>";
							   
							
							}
							
						}
						else{
							echo "<script>alert('The username or password Given were invalid')</script>";
													}
										
					}
									
									
					?>
	   
	   
	   
	   
	   