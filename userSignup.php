<!--this modal is for signing up-->
 <div id="signModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          
		<h4 class="modal-title" id="myModalLabel">sign up to enjoy our services</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post" >
		  <label for="name">Name</label> 
		  <input type="text" class="form-control"  id="sgnName"  placeholder="mike johns"/> 
		  <label for="name">Email</label>
		  <input type="text" class="form-control"  id="sgnEmail" placeholder="example@tmail.com"/>
		  <label for="name">Contact</label>
		  <input type="text" class="form-control"  id="contact" placeholder="+256 748 000 908"/>
		  <label for="name">Password</label>
		  <input type="password" class="form-control"  id="sgnPassword1" />
		  <label for="name">Confirm Password</label>
		  <input type="password" class="form-control"  id="sgnPassword2" />
		  
		  </form>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" onclick="return false;" id="otherSignup" class="btn btn-primary" data-dismiss="modal">sign up</button>
        </div>
	</div>
	</div>
  </div>
  
  
  <script src="mystyles/js/submitFormsData.js"></script>
  <!--end modal for signup in-->