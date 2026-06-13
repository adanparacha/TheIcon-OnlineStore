<?php

session_start();
include 'db.php';

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$cart_query = mysqli_query($conn,"
SELECT c.*, p.price
FROM cart c
INNER JOIN products p
ON c.product_id = p.product_id
WHERE c.user_id='$user_id'
");

$total_amount = 0;

while($row = mysqli_fetch_assoc($cart_query))
{
    $total_amount += ($row['price'] * $row['quantity']);
}

mysqli_query($conn,"
INSERT INTO orders(user_id,total_amount)
VALUES('$user_id','$total_amount')
");

$order_id = mysqli_insert_id($conn);

$cart_query = mysqli_query($conn,"
SELECT c.*, p.price
FROM cart c
INNER JOIN products p
ON c.product_id = p.product_id
WHERE c.user_id='$user_id'
");

while($row = mysqli_fetch_assoc($cart_query))
{
    mysqli_query($conn,"
    INSERT INTO order_items
    (order_id,product_id,quantity,price)
    VALUES
    (
        '$order_id',
        '{$row['product_id']}',
        '{$row['quantity']}',
        '{$row['price']}'
    )
    ");
}

mysqli_query($conn,"
DELETE FROM cart
WHERE user_id='$user_id'
");

echo "<script>
alert('Order Placed Successfully');
window.location='main2.php';
</script>";

?>