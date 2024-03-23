<?php
require_once('Database.php');

function login($id, $password){
    $con = dbConnect();
    $sql = "select * from users where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

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

function createUsers($users){
    $con = dbConnect();
    $sql = "insert into users values ('{$users['id']}',  '{$users['password']}', '{$users['name']}', '{$users['email']}', '{$users['user_type']}')";
           
    
    if(mysqli_query($con, $sql)){
        return true;
    } else {
        return false;
    }
}



function deleteUser($id){

}

function updateUser($user){

}

?>