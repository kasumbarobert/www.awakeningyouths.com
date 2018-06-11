<?php
//comment_id article_id comment_details posted_by posted_date posted_time
require_once("connector.php");
connect();
session_start();
//comment chosenArticle guestName guestEmail
//comment="+comment+"&logedUserzMail="+logedUserzMail;
$article=$_SESSION["chosenArticle"];

				$getComments=mysql_query("SELECT * FROM comments WHERE article_id=".$_SESSION["chosenArticle"]." ORDER BY posted_date");
				IF(!$getComments) ECHO MYSQL_ERROR();
				IF(mysql_num_rows($getComments)>0){
					$i=1;
					while($row=mysql_fetch_row($getComments,MYSQL_ASSOC)){
						// 	user_id 	name 	
						$getName=mysql_query("SELECT name FROM other_users WHERE email='".$row["posted_by"]."' ");
						if(!$getName) echo mysql_error();
						while($rowname=mysql_fetch_row($getName,MYSQL_ASSOC)){
							$name=$rowname["name"];
						}
						echo "
								<div id='commentBody' class='panel-primary panel' style='padding-left:2%;'>

							  <p id='comment1' ><h4><i class='fa fa-user fa-2x' style='color:grey' > </i> <b class='text-primary'>".$name."</b></h4>

							  <p style='color:green;' style='padding-left:2.5%;'><i class='fa fa-comment-o' style='color:purple;' > </i> ".$row["comment_details"]."</p>
							  
							  <p class='text-info text-right' style='margin-right:1%;'>Posted on <span id='postdate'>".$row["posted_date"]."</span>
							  at <span id='postTime'>".$row["posted_time"]." </span></p>	  
							  </div>
							  
							  ";
						
						
									
						$i++;
						}
						}

?>