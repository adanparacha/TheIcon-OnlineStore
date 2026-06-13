<?php

include 'db.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['Number'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password != $confirmPassword)
    {
        echo "<script>alert('Passwords do not match!');</script>";
    }
    else
    {
        $check = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn,$check);

        if(mysqli_num_rows($result) > 0)
        {
            echo "<script>alert('Email already exists!');</script>";
        }
        else
        {
            $sql = "INSERT INTO users(name,email,phone,password)
                    VALUES('$name','$email','$phone','$password')";

            if(mysqli_query($conn,$sql))
            {
                echo "<script>
                alert('Registration Successful');
                window.location='login.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Registration Failed');</script>";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register To Our Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: linear-gradient(135deg, #ffe5ec, #ffc2d1, #fcd5ce, #ffb6c1);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
      position: relative;
      overflow-x: hidden;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Decorative floating shapes */
    body::before,
    body::after {
      content: "";
      position: fixed;
      border-radius: 50%;
      z-index: 0;
      pointer-events: none;
    }

    body::before {
      width: 350px;
      height: 350px;
      background: rgba(255, 255, 255, 0.25);
      top: -100px;
      left: -100px;
      animation: float1 10s ease-in-out infinite;
    }

    body::after {
      width: 250px;
      height: 250px;
      background: rgba(255, 182, 193, 0.35);
      bottom: -80px;
      right: -80px;
      animation: float2 12s ease-in-out infinite;
    }

    @keyframes float1 {
      0%, 100% { transform: translate(0, 0); }
      50% { transform: translate(40px, 60px); }
    }

    @keyframes float2 {
      0%, 100% { transform: translate(0, 0); }
      50% { transform: translate(-50px, -40px); }
    }

    /* Extra floating circles */
    .shape {
      position: fixed;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      z-index: 0;
      pointer-events: none;
    }

    .shape1 {
      width: 120px;
      height: 120px;
      top: 20%;
      right: 10%;
      animation: float1 8s ease-in-out infinite;
    }

    .shape2 {
      width: 180px;
      height: 180px;
      bottom: 15%;
      left: 8%;
      background: rgba(255, 192, 203, 0.3);
      animation: float2 14s ease-in-out infinite;
    }

    /* Register Now Section */
    .register {
      text-align: center;
      margin: 20px 0;
      position: relative;
      z-index: 1;
    }

    .register button a {
      text-decoration: none;
      color: #5a3d42;
      background-color: rgba(255, 214, 224, 0.8);
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
    }

    .register button a:hover {
      background-color: rgba(255, 182, 193, 0.9);
    }

    #Register {
      background: rgba(255, 255, 255, 0.55);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 15px;
      width: 50%;
      margin: 60px auto;
      box-shadow: 0 8px 25px rgba(255, 105, 135, 0.25);
      color: #5a3d42;
      position: relative;
      z-index: 1;
      border: 1px solid rgba(255, 255, 255, 0.4);
    }

    #Register h2 {
      text-align: center;
      font-size: 2em;
      margin-bottom: 10px;
    }

    #Register p {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.1em;
    }

    #Register form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #Register label {
      font-weight: bold;
      margin: 10px 0 5px;
      color: #5a3d42;
      align-self: flex-start;
      margin-left: 10%;
    }

    #Register input {
      width: 80%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      background: rgba(255, 255, 255, 0.8);
    }

    #Register input:focus {
      outline: 2px solid #ffb6c1;
    }

    #Register button {
      background-color: #ffb6c1;
      color: #5a3d42;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #Register button:hover {
      background-color: #ff9aac;
    }
  </style>
</head>
<body>
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>

  <!-- Register Now Section -->
  <section id="Register" class="Register">
    <h2>Register Now</h2>
    <p>We would love to hear from you! Please fill out the form below to get in touch.</p>
    <form action="#" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <label for="Number">Number:</label>
      <input type="number" id="Number" name="Number" placeholder="Enter your Number" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>
	  
      <button type="submit" name="register">Register</button>
    </form>
  </section>
</body>
</html>

