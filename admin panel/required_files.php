<link href="mystyles/css/bootstrap.min.css" rel="stylesheet" />
<link href="mystyles/css/ourStyles.css" rel="stylesheet" />
<script src="mystyles/js/bootstrap.js"></script>
<script src="mystyles/js/bootstrap.min.js"></script>
<script src="mystyles/js/npm.js"></script>
<script src="mystyles/js/dropdown.js"></script>
<script src="mystyles/js/vendor/jquery.min.js"></script>
<script src="mystyles/js/transition.js"></script>
<script src="mystyles/js/dropdown.js"></script>
<script src="mystyles/js/modal.js"></script>
<script src="mystyles/js/tooltip.js"></script>
<script src="mystyles/js/popover.js"></script>
<script src="mystyles/js/submitFormsData.js"></script>
<script src="mystyles/js/jquery1.js"></script>

<link rel="stylesheet" href="mystyles/f-awm/css/font-awesome.css" />
<link rel="icon" href="images/headlog1.png" type="image/png" />
<script>
	function submitForm(form){
		document.getElementById(form).submit();
	}
	
	</script>

<?php
function mysql_fix_string($string) {    
if (get_magic_quotes_gpc()) $string = stripslashes($string);    
return mysql_real_escape_string($string);
} 

?>