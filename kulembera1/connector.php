<?php
function connect(){
$con=@mysql_connect("localhost","root","");
@mysql_select_db("awakening_youths");

return $con;
}

?>