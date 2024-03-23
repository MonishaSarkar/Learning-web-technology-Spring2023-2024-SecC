<?php 
    //include('../model/db.php');
    //include_once ('../model/db.php');
    //require ('../model/db.php');
    require_once ('../model/UserTypeModel.php');
    session_start();
    $id  =  $_REQUEST['id'];
    $password  =  $_REQUEST['password'];

    if($id == "" || $password == ""){
        echo "null username or password!";
    }else{
        
        $status = login($id, $password);
        if($status){
            $_SESSION['id'] = $id;
            setcookie('flag', 'true', time() + (30 * 24 * 60 * 60), '/');

            header('location: ../view/user_profile.php');
        }else{
            echo "invalid user!";
        }
    }
?>