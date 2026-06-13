<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Place Order</title>

<style>

body{
font-family:Arial,sans-serif;
margin:0;
min-height:100vh;
background:linear-gradient(135deg,#ffe5ec,#ffc2d1,#fcd5ce,#ffb6c1);
display:flex;
justify-content:center;
align-items:center;
}

.order-box{
width:500px;
background:rgba(255,255,255,0.6);
backdrop-filter:blur(10px);
padding:30px;
border-radius:15px;
box-shadow:0 8px 25px rgba(255,105,135,0.25);
}

h2{
text-align:center;
color:#5a3d42;
}

input,
textarea,
select{
width:100%;
padding:10px;
margin-top:5px;
margin-bottom:15px;
border:none;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#ffb6c1;
border:none;
border-radius:5px;
font-weight:bold;
cursor:pointer;
}

button:hover{
background:#ff9aac;
}

</style>

</head>

<body>

<div class="order-box">

<h2>Place Order</h2>

<form action="place_order.php" method="POST">

<label>Full Name</label>
<input type="text" required>

<label>Phone Number</label>
<input type="text" required>

<label>Delivery Address</label>
<textarea rows="4" required></textarea>

<label>Payment Method</label>

<select>
<option>Cash On Delivery</option>
<option>Online</option>
</select>

<button type="submit">
Confirm Order
</button>

</form>

</div>

</body>
</html>