<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Change</title>
<style>
        fieldset{
            width: 300px;
            height: 300px;
            
        }
</style>
</head>
<body>
<center>

<form method="post" action="../model/Change_password.php">
 
  <fieldset>
  <legend>Forgot Password</legend>
    <label for="email"><b>Email:</b></label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password"><b>New Password:</b></label><br>
    <input type="password" id="password" name="password" required><br><br>
    <label for="confirm_password"><b>Confirm New Password:</b></label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    <button type="submit" name="submit"><b>Change</b></button><a href="Home">Home</a>
  </fieldset>
</center>
</form>
</body>
</html>