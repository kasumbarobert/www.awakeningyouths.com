<style>
body{
	margin-top:1%;
/**/
	background-color:#005550;

	background-image:url("../images/backgrounds/background3.jpg");
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

<div class="col-lg-2 col-sm-2 col-md-2 list-group " style="margin-top:5%; background-color:gold; opacity:0.8;">
				<a class="list-group-item text-center leftMenu" href="index.php"><i class="fa fa-home"></i> Home</a>
				<a class="list-group-item text-center leftMenu" href="addEvents.php"><i class="fa fa-file-text-o"></i> Create an event</a>
				<a class="list-group-item text-center leftMenu" href="articleMgt.php"><i class="fa fa-file-text-o"></i> Post Article</a>
				<a class="list-group-item text-center leftMenu" href="uploadPictures.php"><i class="fa fa-file-image-o"></i> Upload a pictures</a>
				<a class="list-group-item text-center leftMenu" href="addAdmin.php"><i class="fa fa-user-plus"></i> Add New User</a>
				
				
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