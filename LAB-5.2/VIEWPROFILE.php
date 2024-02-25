<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <table border="1" cellspacing="0" align="center" cellpadding="5">
        <tr>
            <td><img src="img/logo.png" alt="" height="70px"></td>
            <td width="700px" align="right">
            <h1 align="left">XCompany</h1>
                Logged In as <a href="login.html">Bob</a>|
                <a href="logout.html">Logout</a>
            </td>
        </tr>
        <tr>
            <td align="center">Account <hr>
                <ul>
                    <li><a href="dashboard.php">DashBoard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></a></li>
                    <li><a href="changepicture.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </td>
            <td >
                <fieldset>
                    <legend><b>PROFILE</b></legend>
                    <table>
                        <tr>
                            <td>Name  :Bob</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Email  :bob@aiub.edu </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Gender  :Male</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Date of Birth   :19/09/1998</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="editprofile.php">Edit Profile.</a></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright (c) 2017</td>
        </tr>
    </table>
</body>
</html>