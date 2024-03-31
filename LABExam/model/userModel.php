<?php
require_once('database.php');


function createUser($registration){
    $con = dbconnect();
    $sql = "insert into registration values('{$registration['first_name']}', '{$registration['last_name']}', '{$registration['email']}', '{$registration['password']}','{$registration['confirm_password']}','{$registration['dob']}', '{$registration['phone']}', '{$registration['gender']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
 
}




?>
