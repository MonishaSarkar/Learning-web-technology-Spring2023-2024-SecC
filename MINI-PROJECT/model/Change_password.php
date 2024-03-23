<?php
require_once('Database.php');
 
session_start();
 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
 
    $conn = dbConnect(); 
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_assoc($result);
        
        if ($password === $confirm_password) {
           
            mysqli_query($conn, "UPDATE users SET password='$password' WHERE email='$email'");
            echo "Password changed successfully!";
        } else {
            echo "Passwords do not match!";
        }
    } else {
        
        echo "Email not found!";
    }
 
    
    mysqli_close($conn);
}
?>
 