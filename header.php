<style>
#menu>li>a:hover{
	background-color:#fdf;
}
#menu>li>a{
	color:blue;
}


body{
	//background-image:url(images/backgrounds/background3.jpg);
	//images/streat.jpg
	no-repeat:no repeat;
}

.container{
	border-radius:30px 30px 0px 0px;
}


</style>
<!--Adobe Gothic Std B border-radius:30px 30px 0px 0px; background-color:gold; background-color:#EEEEEE; to bottom,#EEEEEE ,#EEEEEE, #EEEEEE,#EEEEEE,white-->
<div class="row"  style="margin-top:; padding:1%; border-radius:30px 30px 0px 0px;   background:linear-gradient(to bottom,#EEEEEE ,#EEEEEE, #EEEEEE,#EEEEEE);  ">

<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 " style="margin-top:2%;">
<a href='index.php'><img c src="images/logo.jpg" width='100%'  class='thumbnail' style='  border-radius:10px 10px 10px 10px;'/></a>
</div>
<div class="col-lg-7 col-md-7 col-xs-12 col-sm-12" >

<h3 class="text-center "  style="font-style:italic; font-family:Tekton Pro Cond; font-size:2.5em; padding-left:2%;"><span style="color:navy;">AWAKENING</span> <span style="color:gold;">THE</span> <span style="color:brown;" >YOUTH</span><span style="color:purple;"> UGANDA</span></h3>

<p style="font-style:italic; font-family:Brush Script MT; font-size:2em; padding-left:30%; color:navy;">Awakening the giant with in</p>

</div>
<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12" style="">
<span class=" " style='display:in-line;'>
<p style="font-style:italic; font-family:Brush Script MT; font-size:2em; color:gold; ">our social networks</p>
<a href="https://www.facebook.com/awakenyu?skip_nax_wizard=true"><i class="fa fa-facebook-official fa-2x" style="color:blue;"></i> </a>
<a href="https://twitter.com/awakenyu1"><i class="fa fa-twitter-square fa-2x" style="color:lightBlue;"></i></a>
<a href="https://www.youtube.com/channel/UCgEy2o3Yvomh5XZ7f_zT7jQ"><i class="fa fa-youtube fa-2x" style="color:red;"></i></a>
<a href="https://www.flickr.com/people/137218930@N02/"><i class="fa fa-flickr fa-2x" style=""></i></a>
<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-pinterest fa-2x" style=""></i></a>
<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-instagram fa-2x" style=""></i></a>
<a href="https://www.pinterest.com/awakenyu/"><i class="fa fa-tumblr-square fa-2x" style=""></i></a>
</span>

<span style="float:right; font-size:1.3em;">

<button class="btn btn-default" style="color:navy;" data-toggle="modal" data-target="#loginModal" ><i class="fa fa-user " style="color:navy;"></i> Log in</button>
<button class="btn btn-default" style="color:navy;" data-toggle="modal" data-target="#signModal"><i class="fa fa-hand-pointer-o " style="color:navy;"></i> Sign up</button>

<span>

</div>

</div>


<div class='col-lg-12'  style='margin-top:1%; margin-left:0px; padding-left:0px; padding-right:0px; '>
				<nav id="menuBar" class="navbar navbar-default text-primary" role="navigation" >
                    <div class="navbar-header" style='width:100%;'>
             
						<ul class="nav navbar-nav " id="menu">
						     <li><a href="index.php"><i class='fa fa-home'></i> Home</a></li>
						     <li><a href="about_ayu.php">About Us</a></li>
						     <li><a href="contact us.php">Contact Us</a></li>
						     <li><a href="articles.php">Posts</a></li>
                             <li><a href="pictures.php">Gallery</a></li>
						     
						</ul>
					
					<div class=' navbar-right'>
						<form class="navbar-form" role="search"  action='searchContent.php' method='POST' onSubmit='return testSearch();'  class="form-inline" role="form" id='searchform'>
						<div class="input-group">
						
						<input type="text" class="form-control"  name="search_key" id="key" placeholder="Search from here" required><span  class="input-group-addon" onClick='thisform();' style='cursor:pointer;'><i class="fa fa-search" ></i></span>
						</div>
						<script>
						function thisform()
						{
							var value_sent=document.getElementById("key");
							if(value_sent.value != ''){
								document.getElementById("searchform").submit();
							}
							else{
								value_sent.focus();
								value_sent.title="Enter the search key";
								alert("You must enter the search key");
							}
						}
						</script>
						</form>
					<!--	<button type="submit" class="btn btn-info btn-sm">Search</button> </form>-->
					</div>
					
</div>
						
                    
					
</nav> 

<hr style="border-bottom:green solid 1px; opacity:0.4; filter:(opacity=40)">

</div>