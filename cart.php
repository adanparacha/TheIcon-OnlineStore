<?php

session_start();
include 'db.php';

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "
SELECT c.*, p.product_name, p.price
FROM cart c
INNER JOIN products p
ON c.product_id = p.product_id
WHERE c.user_id = '$user_id'
";

$result = mysqli_query($conn,$sql);

$total = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>

<style>

body{
font-family:Arial,sans-serif;
margin:0;
padding:0;
min-height:100vh;
background:linear-gradient(135deg,#ffe5ec,#ffc2d1,#fcd5ce,#ffb6c1);
background-size:400% 400%;
animation:gradientShift 15s ease infinite;
}

@keyframes gradientShift{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.cart-container{
width:80%;
margin:50px auto;
background:rgba(255,255,255,0.6);
backdrop-filter:blur(10px);
padding:30px;
border-radius:15px;
box-shadow:0 8px 25px rgba(255,105,135,0.25);
}

h1{
text-align:center;
color:#5a3d42;
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#ffb6c1;
padding:12px;
}

td{
background:rgba(255,255,255,0.8);
padding:12px;
text-align:center;
}

button{
background:#ffb6c1;
border:none;
padding:12px 25px;
border-radius:5px;
cursor:pointer;
font-weight:bold;
}

button:hover{
background:#ff9aac;
}

</style>

</head>
<body>

<div class="cart-container">

<h1>Your Cart</h1>

<table>

<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
$item_total = $row['price'] * $row['quantity'];
$total += $item_total;

?>

<tr>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['quantity']; ?></td>

<td><?php echo $item_total; ?></td>

</tr>

<?php
}
?>

</table>

<div style="text-align:right; margin-top:20px;">

<h2>
Grand Total: <?php echo $total; ?>
</h2>

<button onclick="window.location.href='order.php'">
Place Order
</button>

</div>

</div>

</body>
</html>