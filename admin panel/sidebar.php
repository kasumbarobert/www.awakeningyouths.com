
			
			<?php
				//php code to retrieve and display the recently uploaded events
				
				require_once("connector.php");
				$con=connect();
				//session_start();
				
				
				$pick_event=mysql_query("SELECT * FROM events WHERE due_date>=CURDATE() ORDER BY due_date ASC");
				
				if($pick_event && mysql_num_rows($pick_event))
				{
					echo "
					<div  class='list-group' style='padding-left:2%;'>
			<span class='list-group-item panel-heading text-center' style='background-color:green; height:40px; color:white; font-size:1.2em;'>Upcoming events</span>";
					$i=1;
					while($event=mysql_fetch_array($pick_event))
					{
						$title=$event['Event_title'];
						$id=$event['Event_ID'];
						
						$string_to_display=substr($event['Event_Description'],0,70);
						$pick_img=mysql_query("SELECT Image_Name FROM pictorials WHERE Event_ID='".$id."' ");
						if(!$pick_img) echo mysql_error();
						if(mysql_num_rows($pick_img)>0){
							$imgp=mysql_fetch_row($pick_img,MYSQL_ASSOC);
							$imgPath=$imgp["Image_Name"];
							
							echo "						
						<div class='list-group-item' >

						 <a href='events.php?id=$id'> 
						 <img src='".$imgPath."' class='img-circle' height='80' width='80' style='padding-right:1%; padding-bottom:2%; border:solid silver 2px;'  />

						  <b style=' font-size:0.9em;' class='text-primary'>".$title."</b>
						  <span class='help-block text-right'><i class='fa fa-clock-o'></i> <small>Scheduled for ".($event['Due_Date'])." at ".$event['due_time']."</small></span>
						 </a>
						 
						 
						</div>
						
						
						
							";
						}
						
						else{
						echo "
						
							
						<div class='list-group-item' >
						<form action='viewevents.php' method='post' id='eventForm".$i."'>
						
						 <a href='javascript:{}' onclick=\"submitForm('eventForm".$i."');\" > 
						 

						
						  <input type='hidden' name='eventId' value='".$id."' />
						
						 
						 
						  <b style='' class='text-primary'>".$title."</b>
						 </a>
						 
						 </form>
						</div>
						";
					}
					$i++;
					}
					echo "</div>";
				}
				else{
		echo mysql_error();
		}
				
			?>
		<div class='list-group' style='padding-left:2%; margin-top:4%;'>
		<a href='articles.php' class='list-group-item panel-heading text-center' style='background-color:navy;  color:white; font-size:1.2em;'>Posts</a>

			<?php
			$getArticles=mysql_query("SELECT * FROM articles ORDER BY post_date DESC ");
			IF(mysql_num_rows($getArticles)>0){
				$i=1;
				while($row=mysql_fetch_row($getArticles,MYSQL_ASSOC)){
					if($row["image_path"]!=null){
						echo " 
						<div class='list-group-item' >
						<form action='articlesHandler.php' method='post' id='articleForm".$i."'>
						
						 <a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > 
						  
						  <img src='".$row["image_path"]."' class='img-circle' height='80' width='80' style='padding-right:1%; padding-bottom:2%; border:solid silver 2px;'  />
						
						  <input type='hidden' name='articleId' value='".$row["article_id"]."' />
						
						 
						 
						  <p style='' class='text-primary' style='font-size:1.2em;'>".$row["article_title"]."</p>
						 </a>
						 
						 </form>
						</div>
						";
					}
					else{
						echo "
						<div class='list-group-item' >
						<form action='articlesHandler.php' method='post' id='articleForm".$i."'>
						
						 <a href='javascript:{}' onclick=\"submitForm('articleForm".$i."');\" > 
						  
						
						  <input type='hidden' name='articleId' value='".$row["article_id"]."' />
						
						 
						 
						  <p class='text-primary' style='font-size:1.2em;'>".$row["article_title"]."</p>
						 </a>
						 
						 </form>
						</div>
						
						";
					}
					
					$i++;
					if($i>7)
					{
						echo "<h4><a href='articles.php'>See more stories</a></h5>";
						break;
					}
				}
			}
			
			
			?> 
			
			
	<div  style='margin-top:2%;'>
	<iframe class='media' style='width:100%;' src="https://www.youtube.com/embed/TYvvMLIR1pI?autoplay=0">
	</iframe>
	<h4>Youths Contribute the highest percentage of Ugandans</h4>
	</div>
	<p></p>
	<p></p>
	<img src="images/logo.jpg" width='100%' class='thumbnail' style='background-color:gold;'/>
			
			</div>
			
			