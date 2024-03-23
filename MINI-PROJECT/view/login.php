<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 200px; 
            height: 200px;
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
                <legend>Login</legend>
    
    <form method="POST" action="../controller/loginCheck.php">

          
           
    
        <label for="id">User Id:</label><br>
        <input type="text" id="id" name="id" required></td><br>
        <label for="password"> Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="checkbox" name="anything" value=""/> Remember Me<br><br>
        
        <button type="submit" name="submit">Login</button> <a href = "Registration.php">Register</a>
       
  
        
    
    </form>
    </fieldset>

    </center>
</body>
</html>