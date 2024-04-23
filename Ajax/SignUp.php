<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script src="../asset/SignUpValidation.js"></script>
    <link rel="stylesheet" href="../asset/signUpStyle.css" />
    
    
</head>
<body>
    <center>
    
   
    <form method="post" action="../controller/SignUpCheck.php" onsubmit="return SignUpForm()" enctype="">
    <div>
        <h1 class="profile-title">SignUp</h1>
    </div>
       
        <table border="1">
            <tr>
                <td><b>Username:</b></td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><b>Password:</b></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><b>Date of Birth:</b></td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>
            <tr>
                <td><b>Phone Number:</b></td>
                <td><input type="tel" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td><b>Gender:</b></td>
                <td>
                    <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male"> Male</label>
                    <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female"> Female</label>
                    <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other"> Other</label>
                </td>
            </tr>
            <tr>
                <td><b>Blood Group:</b></td>
                <td>
                    <select id="blood_group" name="blood_group" required>
                        <option value="">Select</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>User Type:</b></td>
                <td>
                    <select id="user_type" name="user_type" required>
                        <option value="">Select user type</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="submit" value="SIGNUP"onsubmit="ajax()" ></td>
                
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>
