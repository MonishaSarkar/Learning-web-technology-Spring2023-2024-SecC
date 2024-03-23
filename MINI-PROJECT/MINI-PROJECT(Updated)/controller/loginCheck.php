<?php 
    require_once ('../model/UserTypeModel.php');
    session_start();
    $id  =  $_REQUEST['id'];
    $password  =  $_REQUEST['password'];

    if($id == "" || $password == ""){
        echo "null username or password!";
    } else {
        
        $users = getUserById($id); 
        if($users && $users['password'] === $password) { 
            
            $_SESSION['id'] = $id;
            $_SESSION['flag'] = true;
            $_SESSION['name'] = $users['name']; 
            $_SESSION['user_type'] = $users['user_type'];
            setcookie('flag', 'true', time() + (30 * 24 * 60 * 60), '/');

            
            if ($users['user_type'] === 'Admin') {
                header('location: ../view/AdminHomePage.php');
            } else if ($users['user_type'] === 'User') {
                header('location: ../view/UserHomePage.php');
            } else {
                echo "Invalid user type!";
            }
        } else {
            echo "Invalid user or password!";
        }
    }
?>
