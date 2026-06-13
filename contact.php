<?php

include 'db.php';

if(isset($_POST['send']))
{
    echo "Form Submitted <br>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages
            (name,email,message)
            VALUES
            ('$name','$email','$message')";

    if(mysqli_query($conn,$sql))
    {
        echo "Message Sent Successfully";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
else
{
    echo "Button Not Detected";
}

?>