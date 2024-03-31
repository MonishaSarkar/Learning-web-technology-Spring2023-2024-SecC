<?php
require_once('database.php');



function getAllUsers(){
    $con = dbConnect();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);

    $users =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;

}

function getUserById($id) {
    
    $conn = dbConnect();
    
    
    $query = "SELECT * FROM users WHERE id = '$id'";
    
    
    $result = mysqli_query($conn, $query);
    
    
    if ($result && mysqli_num_rows($result) == 1) {
        
        $users = mysqli_fetch_assoc($result);
        
        
        mysqli_close($conn);
        
        
        return $users;
    } else {
        
        return false;
    }
}

function createUser($registration){
    $con = dbconnect();
    $sql = "insert into registration values('{$registration['first_name']}', '{$registration['last_name']}', '{$registration['email']}', '{$registration['password']}','{$registration['confirm_password']}','{$registration['dob']}', '{$registration['phone']}', '{$registration['gender']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
 
}



function deleteUser($id){

}

function updateUser($user){

}

?>