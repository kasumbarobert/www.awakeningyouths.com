	
		<div id="login" style="display:none;  background-color:lightGrey; opacity:9; position:absolute; top:25%; right:7%; border-radius:5px; z-index:20; padding:1%;" >
    
		  <h4>Log in with your Email and Password</h4> 
      
       
          <form action="" name="logForm" method="post" >
		  
		  <label for="name">Email</label>
		  <input type="text" class="form-control"  name="logEmail" />
		  <label for="name">Password</label>
		  <input type="password"  class="form-control"  name="logPassword" />
		  <br>
		  <center>
		  <button type="submit" name="logMeIn"  id="logMeIn" class="btn btn-primary">Log in</button>
		  </center>
		  </form>
	      </div>
		  
		  <script>
			$("#loginBtn").click(function(){  //login  logMeIn
				   
				$("#login").slideToggle();
			});

			$("#logMeIn").click(function(){
				$("#login").slideToggle();
			});


			</script>
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
	   
	   
	   
	   
	   