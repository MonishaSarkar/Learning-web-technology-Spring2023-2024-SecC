<?php
session_start();
 

if (!isset($_SESSION['flag'])) {
    header('location: login.php');
    exit(); 
}
 

$name = $_SESSION['name'];
$user_type = $_SESSION['user_type'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <center>
        <h1>welcome <?php echo$name; ?></h1>
        <table cellpadding="10">
            <tr>
                <td><a href="admin_profile.php"><font size="5">Profile</font></a></td>
            </tr>
            <tr>
                <td><a href="forgot_password.php"><font size="5">Change Password</font></a></td>
            </tr>
            <tr>
                <td><a href="ViewUser.php"><font size="5">View Users</font></a></td>
            </tr>
            <tr>
                <td><a href="../controller/Logout.php"><font size="5">Logout</font></a></td>
            </tr>
        </table>
    </center>
</body>
</html>
