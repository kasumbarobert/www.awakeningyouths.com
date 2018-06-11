<?php
function connect(){
$con=@mysql_connect("localhost","awakenin_youths","ayusdb123");
@mysql_select_db("awakenin_youths");

return $con;
}

?>
