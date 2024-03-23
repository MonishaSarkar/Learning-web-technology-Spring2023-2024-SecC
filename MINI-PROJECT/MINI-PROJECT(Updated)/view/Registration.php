<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        table {
            
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        th, td {

            border: 1px solid #ddd;
            padding: 5px;
        }
        fieldset {
            width: 300px; 
            height: 300px;
            border: 1px solid #ccc;
            padding: 10px; 
            border-radius: 5px;
            padding: 10px 10px;
            margin-left: 10px;
           
        }
    </style>
</head>
<body>
    <center>
    <fieldset >
                <legend>REGISTRATION</legend>
    
    <form method="POST" action="../controller/RegistrationCheck.php">

          
           
    
        <label for="id">Id:</label><br>
        <input type="text" id="id" name="id" required></td><br>
        <label for="password"> Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required></td><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required></td><br>
        <label for="user_type">User Type:</label><br>
        <select id="user_type" name="user_type" required>
                <option value="">Select user type</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
        </select><br><br><hr>
        <button type="submit" name="submit">Register</button> <a href = "login.php">Login</a>
       
  
        
    
    </form>
    </fieldset>

    </center>
</body>
</html>