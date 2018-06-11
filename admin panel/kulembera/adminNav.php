<style>
body{
	margin-top:0%;
/**/
	background-color:#005550;

	background-image:url("../images/background3.jpg");
	}

.leftMenu{
	margin-top:1%;
	background-color:transparent;
	color:white !important;
	font-family:Adobe Garamond Pro Bold;
    font-size:1.2em;
	border:solid 1px navy;
}
.leftMenu:hover{
	
	color:navy !important;
	
}


</style>

<div class="col-lg-2 col-sm-2 col-md-2 list-group " style="margin-top:2%;">
				<?php echo "<span style='font-size:1.1em; color:navy;'><b>WELCOME ".strtoupper($_SESSION["userFname"])." ".strtoupper($_SESSION["userLname"])."</b></span>"; ?>
				<a class="list-group-item text-center leftMenu" href="index.php"><i class="fa fa-home"></i> Home</a>
				<a class="list-group-item text-center leftMenu" href="addEvents.php"><i class="fa fa-file-text-o"></i> Post Event</a>
				<a class="list-group-item text-center leftMenu" href="articleMgt.php"><i class="fa fa-file-text-o"></i> Post Article</a>
				<a class="list-group-item text-center leftMenu" href="uploadPictures.php"><i class="fa fa-file-image-o"></i> Post Pictures</a>
				<a class="list-group-item text-center leftMenu" href="addAdmin.php"><i class="fa fa-user-plus"></i> Add User</a>
				<a class="list-group-item text-center leftMenu" href="logout.php"><i class="fa fa-power-off" style='color:red;'></i> Log Out</a>
				
				<button class="list-group-item " id="lowerMenuToggle" style="border:hidden; color:white; background-color:transparent; margin-top:1%;">More <i class='fa fa-reorder (alias)'></i> </button>
				<div id="lowerMenu" style="display:none;">
				<a class="list-group-item text-center leftMenu" href="manageEvents.php"><i class="fa fa-edit (alias) " style="color:green;"></i> Manage Events</a>
				<a class="list-group-item text-center leftMenu" href="manageArticles.php"><i class="fa fa-edit (alias) " style="color:green;"></i> Manage Articles</a>
				<a class="list-group-item text-center leftMenu" href="manageComments.php"><i class="fa fa-edit (alias)" style="color:green;"></i> Manage comment</a>
				<a class="list-group-item text-center leftMenu" href="deletePictures.php"><i class="fa fa-trash-o " style="color:red;"></i> Delete Picture(s)</a>
				
				</div>
</div>


<script>
	$("#lowerMenuToggle").click(function(){
		$("#lowerMenu").slideToggle("slow");
	});
	
	</script>