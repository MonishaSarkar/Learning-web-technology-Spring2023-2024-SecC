<?php 
    
    require_once ('../model/userModel.php');
    session_start();
    $username  =  $_REQUEST['username'];
    $password  =  $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username or password!";
    } else {
        
        $isValidUsername = ctype_alpha($username);

        
        $isValidPassword = (strlen($password) >= 4) ;

        if(!$isValidUsername) {
            echo "Username should contain only alphabetic characters!";
        } elseif(!$isValidPassword) {
            echo "Password must be at least 4 characters long ";
        } else {
            $status = login($username, $password);
            if($status){
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time() + (30 * 24 * 60 * 60), '/');

                header('location: ../view/Home.php');
            }else{
                echo "Invalid username or password!";
            }
        }
    }
?>
