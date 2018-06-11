<?php
   require_once("required_files.php");
   $First_Name = $Last_Name = $username = $password = $email = $gender = $contact = "";
   if(isset($POST_['firstname']))
         $firstname=fix_string($POST_['firstname']);
   if(isset($POST_['lastname']))
        $lastname =fix_string($POST_['lastname']);
   if(isset($POST_['username']))
        $username=fix_string($POST_['username']);
    function validatepassword(){
    	if(isset($POST_['password1'])){
         $password1=fix_string($POST_['password']);
    	}
        if(isset($POST_['password2'])){
         $password2=fix_string($POST_['password']);
        }
        if($password1=!$password2){
        	return "passwords don't match";
        }
        else{
        	return"";
        }
        
    }
    
    if(isset($POST_['gender']))
         $gender=fix_string($POST_['gender']);
     if(isset($POST_['email']))
          $email=fix_string($POST_['email']);
     if(isset($POST_['contact']))
         $contact=fix_string($POST_['contact']);
    $password_hash=md5('$password');
    $dbin="INSERT INTO normal_user Values('$First_Name','$Last_Name','$username ','$password_hash','$email','$gender','$contact')";
     $dbq=mysql_query("$dbin");
     if (!$dbq) die("Unable to insert data to MySQL: " . mysql_error());




?>