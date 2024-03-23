<?php
require_once('Database.php');
 
session_start();
 
if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_new_password = $_POST['retype_new_password'];
 
    $conn = dbConnect(); 
    $user_id = $_SESSION['id'];
    
    $query = "SELECT * FROM users WHERE id='$user_id'";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_assoc($result);
        
        
        if ($row['password'] === $current_password) {
           
            
            if ($new_password === $retype_new_password) {
                mysqli_query($conn, "UPDATE users SET password='$new_password' WHERE id='$user_id'");
                echo "Password changed successfully!";
            } else {
                echo "New passwords do not match!";
            }
        } else {
            echo "Current password is incorrect!";
        }
    } else {
        echo "User not found!";
    }
 
    mysqli_close($conn);
}
?>
