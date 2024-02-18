<!DOCTYPE HTML>  
<html>
<head>
<style>
    fieldset{
        width: 350px;
    }
 </style>

</head>
<body>  

<?php

$UserName = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = test_input($_POST["userName"]);
  $password = test_input($_POST["password"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<fieldset>
<legend><b>LOGIN <b></legend> <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  User Name: <input type="text" name="userName">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  <hr>
  <br>
  <input type="checkbox" name="anything" value=""/> Remember Me<br><br>
  <input type="submit" name="submit" value="Submit">  
  <a href="forgotPassword?.html">ForgotPassword?</a>  <br />
  </fieldset>
        <br>
</form>

<label> UserName: </label>
<?php

echo $userName;
?>
<br>
<label> Password: </label>

<?php
echo $password;
?>

</body>
</html>