<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once("required_files.php");/*including the javascript and css files we might need to use*/?> 
<title>Search</title>

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
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel default'>
			<?php
				if(isset($_POST['search_key']))
				{
					$matchfound=false;
					$search_key=$_POST['search_key'];
					$check_events=mysql_query("SELECT Event_title, Event_ID FROM events WHERE Event_title LIKE '%$search_key%' OR Event_Description LIKE '%$search_key%'");
					
					if( $check_events && mysql_num_rows($check_events))
					{
						$number= mysql_num_rows($check_events);
						echo "<h3 class='text-success'>Events that much your search <span class='badge'>$number events<span></h3>
						<div class='list-group'>";
						while($value=mysql_fetch_array($check_events))
						{
							$id=$value['Event_ID'];
							$title=$value['Event_title'];
							echo "
							<a href='events.php?id=$id' class='list-group-item'>
							<p>$title</p>
							</a>
							";
						}
						echo "</div>";
						$matchfound=true;
					}
					
					$check_articles=mysql_query("SELECT article_id ,article_title FROM articles WHERE article_title LIKE '%$search_key%' OR article_content LIKE '%$search_key%'");
					
					if( $check_articles && mysql_num_rows($check_articles))
					{
						$number= mysql_num_rows($check_articles);
						echo "<h3 class='text-success'>Articles that much your search <span class='badge'>$number articles<span></h3>
						<div class='list-group'>";
						while($value=mysql_fetch_array($check_articles))
						{
							$id=$value["article_id"];
							$title=$value["article_title"];
							echo "
							<form method='post' action='articlesHandler.php' id='$id'>
							<input type='hidden' value='$id' name='chosenArticle'/>
							<a href='javascript:{}' class='list-group-item' onClick='document.getElementById(\"$id\").submit();'>
							<p>$title</p>
							</a>
							</form>
							";
						}
						$matchfound=true;
					}
					
					if(!$matchfound)
					{
						echo "<h3 class='text-danger'>There are no results matchig the search key \"$search_key\"</h3>";
					}
					
				}
				else{
					if(!header("Location:index.php")){
					echo"
					<script>
					window.location=\"index.php\"
					</script>
					";}
				}
			?>
			</div>
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
</body>
</html>