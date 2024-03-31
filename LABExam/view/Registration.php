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
    </style>
</head>
<body>
    <center>
    <div>
        <h1 class="profile-title">Registration Form</h1>
    </div>
   
    <form method="get" action="../controller/RegistrationCheck.php" enctype="">
       
        <table border="1">
           
            <tr>
                <td><b>First Name:</b></td>
                <td><input type="text" id="first_name" name="first_name" required></td>
            </tr>
            <tr>
                <td><b>Last Name:</b></td>
                <td><input type="text" id="last_name" name="last_name" required></td>
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
                <td><b>Confirm Password:</b></td>
                <td><input type="password" id="confirm_password" name="confirm_password" required></td>
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
                <th></th>
                <td><input type="submit" value="Registration"> 
            </tr>
        </table>
    </form>
    </center>
</body>
</html>