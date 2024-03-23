<?php
require_once('Database.php');

function login($username, $password){
    $con = dbConnect();
    $sql = "select * from users where name='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function getAllUser(){
    $con = dbConnect();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);

    $users =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;

}

function getUserById($id){

}

function createUser($user){
    $con = dbConnect();
    $sql = "INSERT INTO users (id,  password, name, email, user_type) 
            VALUES ('{$user['id']}',  '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['user_type']}')";
    
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