<?php
require_once('../model/Database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View User</title>
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
<h2>Users</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>User Type</th>
    
  </tr>
  
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM users"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $user_type = $row['user_type'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$user_type.'</td>

            
            </tr>';
    }
} else {
    echo '<tr><td colspan="6">No users found</td></tr>';
}
?>  
</table>
</center>
</body>
</html>