<?php
include '..\model\roomModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Room Management</title>
<link rel="stylesheet" href="../asset/RoomDisplay.css"/>
   
</head>
<body>
<div class="header">
  <h2 style="text-align: center; margin-top: 0;">Choose Your Desired Room</h2>
  
  <form action="UserDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
</div>

<center>
<fieldset>

<table>
  <tr>
    <th>Room Number</th>
    <th>Room Type</th>
    <th>Bed Type</th>
    <th>Price</th>
    <th>Actions</th>
  </tr>
 
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM room"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $room_type = $row['room_type'];
        $bed_type = $row['bed_type'];
        $room_price = $row['room_price'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$room_type.'</td>
            <td>'.$bed_type.'</td>
            <td>'.$room_price.'</td>
            
            <td>
            <button><a href="RoomData.php?id=' . $id . '">Confirm</a></button>
            
            </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="6">No users found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
