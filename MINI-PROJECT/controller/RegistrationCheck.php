<?php
    require_once('../model/UserTypeModel.php');
   
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $user_type = $_REQUEST['user_type'];
     
    
    if ($id == "" || $password == "" || $confirm_password == "" || $name == "" || $email == "" || $user_type == "" ) {
        echo "Please fill in all the required fields.";
    } else {
        if ($password !== $confirm_password) {
            echo "Passwords do not match.";
        } else {
            $user = [
                'id' => $id,
                'password' => $password,
                'name' => $name,
                'email' => $email,
                'user_type' => $user_type,
                
            ];
           
            $status = createUser($user);
            if ($status) {
                header('location: ../view/login.php');
            } else {
                echo "Database error. Please try again.";
            }
        }
    }
?>
