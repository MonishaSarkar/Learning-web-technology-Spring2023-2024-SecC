<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'product_db';
 
$conn = mysqli_connect($host, $user, $pass, $dbname);
 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $buyingprice=$_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];
 
    
    if(isset($_POST['edit_id'])) {
        $edit_id = $_POST['edit_id'];
        
        $sql = "UPDATE products SET name='$name', buyingprice='$buyingprice', sellingprice='$sellingprice' WHERE id=$edit_id";
    } else {
       
        $sql = "INSERT INTO products(name, buyingprice, sellingprice) VALUES ('$name', '$buyingprice', '$sellingprice')";
    }
 
    mysqli_query($conn, $sql);
}
 

if(isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_sql = "SELECT * FROM products WHERE id=$edit_id";
    $result = mysqli_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
}
 
mysqli_close($conn);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        fieldset {
            width: 250px;
        }
    </style>
</head>
<body>
 
<form action="#" method="POST">
    <fieldset>
        <legend>
            <b>EDIT PRODUCT</b>
        </legend>
 
        <input type="hidden" name="edit_id" value="<?php echo isset($edit_id) ? $edit_id : ''; ?>">
 
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>"><br><br>
 
        <label for="buyingprice">Buying Price:</label>
        <input type="text" id="buyingprice" name="buyingprice" value="<?php echo isset($row['buyingprice']) ? $row['buyingprice'] : ''; ?>"><br><br>
 
        <label for="sellingprice">Selling Price:</label>
        <input type="text" id="sellingprice" name="sellingprice" value="<?php echo isset($row['sellingprice']) ? $row['sellingprice'] : ''; ?>"><br><br>
 
        <hr>
 
        <input type="checkbox" id="display" name="display" value="true">
        <label for="display">Display</label>
 
        <hr>
 
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>