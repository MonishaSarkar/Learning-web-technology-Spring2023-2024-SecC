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
  <legend>Change Password</legend>
    <label for="current_password"><b>Current Password:</b></label><br>
    <input type="password" id="current_password" name="current_password" required><br><br>
    <label for="new_password"><b>New Password:</b></label><br>
    <input type="password" id="new_password" name="new_password" required><br><br>
    <label for="retype_new_password"><b>Retype New Password:</b></label><br>
    <input type="password" id="retype_new_password" name="retype_new_password" required><br><br>
    <button type="submit" name="submit"><b>Change</b></button><a href="Home">Home</a>
  </fieldset>
</center>
</form>
</body>
</html>