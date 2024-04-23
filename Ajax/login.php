<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="../asset/loginValidation.js"></script>
    <link rel="stylesheet" href="../asset/loginStyle.css" /> 
    
</head>
<body>
<center>
        
        <form method="POST" action="../controller/loginCheck.php" onsubmit="return loginForm()"enctype="">
        <table border="1">
        <div>
            <h1 class="profile-title"> Login </h1>
        </div>
                <tr>
                    <td><b>Username:</b></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
               
                <tr>
                    <th></th>
                    <td><input type="submit"name="submit"  value="LOGIN" onsubmit="ajax()"> </td>
                    
                </tr>
                <tr>
                <th></th>
                <td><a href="forgot_password.php">Forgot Password?</a></td>
            </tr
            </table>
        </form>
    </center>
       
</body>
</html>
 