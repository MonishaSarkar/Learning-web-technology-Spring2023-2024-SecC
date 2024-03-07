<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $buyingprice=$_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];
    
    //database connection
    $host='localhost';
    $user='root';
    $pass = '';
    $dbname = 'product_db';

    $conn =mysqli_connect($host,$user,$pass,$dbname);
    $sql = "INSERT INTO products(name,buyingprice,sellingprice) values('$name','$buyingprice','$sellingprice')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
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
        <b>ADD PRODUCT</b>
      </legend>

      <label for="name">Name:</label>  <br>
      <input type="text" id="name" name="name"><br><br>

      <label for="buyingprice">Buying Price:</label>
      <input type="text" id="buyingprice" name="buyingprice"><br><br>

      <label for="selling_price">Selling Price:</label>
      <input type="text" id="sellingprice" name="sellingprice"><br><br>
      
      <hr>

      <input type="checkbox" id="display" name="display" value="true">
      <label for="display">Display</label>

      <hr>

      <input type="submit" name="submit" value="Save">
    </fieldset>
  </form>
</body>
</html>



