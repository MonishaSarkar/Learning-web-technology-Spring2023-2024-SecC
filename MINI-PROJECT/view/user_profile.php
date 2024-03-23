<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        fieldset{
            width: 30px;
            
        }
    </style>
</head>
<body>
   
    <center>
    <fieldset>
    <div style="width: 800px;">
        <h1 style="text-align: center;">User Profile</h1>
        
        <div style="margin-top: 20px;">
            <?php
            require_once '../model/Database.php';
             $con = dbConnect();
           
            $query = "SELECT * FROM users";
            $result = mysqli_query($con, $query);
             
            if ($result) {
               
                $row = mysqli_fetch_assoc($result);
               
                echo "<p><strong>Id:</strong> " . $row['id'] . "</p>";
                echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
                echo "<p><strong>User Type:</strong> " . $row['user_type'] . "</p>";
                
            } else {
                echo "Error fetching user profile information: " . mysqli_error($con);
            }
 
            
            $userRole = 'Registered User';
            $userAddress = 'Dhaka, Bangladesh';
 
            
            echo "<p><strong>Role:</strong> $userRole</p>";
            echo "<p><strong>Address:</strong> $userAddress</p>";
 
            mysqli_close($con);
            ?>
        </div>
    </div>
        </fieldset>
    </center>
</body>
</html>