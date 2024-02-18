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

$CurrentPassword = $NewPassword =$RetypeNewPassword= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $CurrentPassword = test_input($_POST["CurrentPassword"]);
  $NewPassword = test_input($_POST["NewPassword"]);
  $RetypeNewPassword = test_input($_POST["RetypeNewPassword"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<fieldset>
<legend><b>CHANGE PASSWORD<b></legend> <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Current Password: <input type="text" name="CurrentPassword">
  <br><br>
  New Password: <input type="  text" name="NewPassword">
  <br><br>
  Retype New Password:<input type="text" name="RetypeNewPassword">
  <hr>
  <br>
  
  <input type="submit" name="submit" value="Submit">  
  
  </fieldset>
        <br>
</form>

<label> Current Password: </label>
<?php

echo $CurrentPassword;
?>
<br>
<label>New Password: </label>

<?php
echo $NewPassword;
?>

<br>

<label>Retype New password:</label>

<?php
echo $RetypeNewPassword;
?>

</body>
</html>