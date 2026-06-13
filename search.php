<?php

include 'db.php';

$search = "";

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT *
            FROM products
            WHERE product_name
            LIKE '%$search%'";

    $result = mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Results</title>

<style>

body{
font-family:Arial;
padding:30px;
background:#fff5f7;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #ccc;
padding:10px;
text-align:center;
}

th{
background:pink;
}

a{
text-decoration:none;
padding:8px 15px;
background:pink;
color:black;
border-radius:5px;
}

</style>

</head>

<body>

<h2>
Search Results For:
"<?php echo $search; ?>"
</h2>

<table>

<tr>
<th>ID</th>
<th>Product</th>
<th>Category</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['product_id']; ?></td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['price']; ?></td>

<td>

<a href="add_cart.php?product_id=<?php echo $row['product_id']; ?>">
Add To Cart
</a>

</td>

</tr>

<?php
}
}
else
{
echo "<tr>
<td colspan='5'>
No Product Found
</td>
</tr>";
}

?>

</table>

<br>

<a href="main2.php">
Back To Store
</a>

</body>
</html>