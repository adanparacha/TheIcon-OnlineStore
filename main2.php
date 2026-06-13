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
  <title>The Icon - Fashion Store</title>
  <link rel="stylesheet" href="project.css">
</head>
<body>
  <header>
    <div class="logo">
      <h1>The Icon</h1>
    </div>
    <div style="color:white; font-weight:bold;">
Welcome, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; ?>
</div>

	<nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#women" class="nav-link">Women</a></li>
        <li><a href="#men" class="nav-link">Men</a></li>
        <li><a href="#kids" class="nav-link">Kids</a></li>
        <li><a href="#accessories">Accessories</a></li>
        <li><a href="#sale">Sale</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <div class="search-cart">
<form action="search.php" method="GET">

<input
type="text"
name="search"
placeholder="Search Product..."
required>

</form>

<button class="cart"
onclick="location.href='cart.php'">
🛒 Cart
</button>

</div>
  </header>

<!--------home page----->
  <section id="home" class="hero">
    <div class="hero-text">
      <h2>Summer Collection 2026</h2>
      <p><h1>Discover the latest trends in fashion with The Icon Fashion.</h1></p>
    </div>
  </section>

  <div class="about-section">
    <div class="text-container">
      <h2>About The Icon</h2>
      <p>
        Welcome to THE ICON, your one-stop destination for premium fashion and accessories. We specialize in offering a diverse collection of high-quality bags, scarves, and clothing for kids, women, and men. At RIFAIAN, we believe in combining style, comfort, and elegance to bring you products that enhance your everyday life. Whether you're looking for trendy outfits, timeless accessories, or unique designs, our carefully curated collections are crafted to inspire confidence and self-expression.<br/><br/>
  
  Our commitment to quality ensures that every piece in our collection meets the highest standards of craftsmanship and durability. From vibrant seasonal trends to timeless classics, we strive to offer something for everyone. At RIFAIAN, we understand that fashion is more than just clothing; it's a way to express your unique personality and celebrate your individuality.<br/><br/>
  
  We also take pride in providing a seamless shopping experience, whether online or in-store. Our dedicated team works tirelessly to keep our collections fresh and exciting, ensuring you always have access to the latest styles. Explore RIFAIAN and discover fashion that’s made just for you, with love and passion in every detail.<br/><br/>
      </p>
    </div>
    <div class="image-container">
      <img src="https://www.mohsinnaveedranjha.com/images/thumbs/0008435_ramsha-khan-in-mastani.jpeg" height= 600px width= 800px alt="About RIFAIAN" />
    </div>
  </div>
  
</section>
<!-------- woman page ------>
  <section id="women" class="category">
    <h2>Women's Collection</h2>
    <div class="products">
      <div class="product">
        <img src="https://i.pinimg.com/736x/3e/0f/f4/3e0ff4bcd71e46391e62d134584a51fe.jpg" alt="Women's Kurta">
        <h3>Embroidered Kurta</h3>
        <p>Price: $300</p>

        <a href="add_cart.php?product_id=1">
<button class="add-cart">Add To Cart</button>
</a>

      </div>
	  <div class="product">
        <img src="https://i.pinimg.com/736x/0b/5f/82/0b5f82943e40f8add44141f8bd7907dd.jpg" alt="Women's Dress">
        <h3>Printed Lawn Dress</h3>
        <p>Price: $450</p>

        <a href="add_cart.php?product_id=2">
<button class="add-cart">Add To Cart</button>
</a>

      </div>
      <div class="product">
        <img src="https://www.hussainrehar.com/cdn/shop/files/P9A9599-copy-ed_2400x.jpg?v=1717412979" alt="Women's Kurta">
        <h3>Embroidered Kurta</h3>
        <p>Price: $250</p>
        <a href="add_cart.php?product_id=3">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhgCXCu5WobcJWR7ryffFcQcS_3YmB8jS1iw&s" alt="Women's Kurta">
        <h3>Embroidered Kurta</h3>
        <p>Price: $100</p>
      <a href="add_cart.php?product_id=1">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
    </div>
  </section>
<!-------- men page ---->
  <section id="men" class="category">
    <h2>Men's Collection</h2>
    <div class="products">
      <div class="product">
        <img src="https://www.ismailfarid.com/cdn/shop/products/dkrt113--_1.jpg?v=1706878074" alt="Men's Kurta">
        <h3>Classic Kurta</h3>
        <p>Price: $350</p>
        <a href="add_cart.php?product_id=4">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
	  <div class="product">
        <img src="https://i.pinimg.com/236x/68/7a/35/687a35edfd68c37611db8abf6e51ca63.jpg" alt="Men's Waistcoat">
        <h3>Elegant Waistcoat</h3>
        <p>Price: $500</p>
        <a href="add_cart.php?product_id=5">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg843QgejmTNTUIcvdtObeIgi827ENS_7btA&s" alt="Men's Kurta">
        <h3>Classic Kurta</h3>
        <p>Price: $350</p>
        <a href="add_cart.php?product_id=4">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMnM2v_y7sYfhE1FjcG8JTddqiGZ7khByt6Q&s" alt="Men's Kurta">
        <h3>Classic Kurta</h3>
        <p>Price: $600</p>
        <a href="add_cart.php?product_id=6">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
    </div>
  </section>
<!--------- kid page -------->
  <section id="kids" class="category">
    <h2>Kids' Collection</h2>
    <div class="products">
      <div class="product">
        <img src="https://image.made-in-china.com/2f0j00hlQuRjVgYWqN/Children-Fashion-Short-Sleeve-Cute-Cotton-Kids-T-Shirts-T-Shirt-for-Girls.jpg" alt="Kids' T-shirt">
        <h3>Cute T-shirt</h3>
        <p>Price: $105</p>
        <a href="add_cart.php?product_id=7">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
	  <div class="product">
        <img src="https://i.pinimg.com/736x/da/8a/a6/da8aa62fc610f5b9b3a9fbed557d1f87.jpg" alt="Kids' Jeans">
        <h3>Stylish Jeans</h3>
        <p>Price: $260</p>

<a href="add_cart.php?product_id=8">
<button class="add-cart">Add To Cart</button>
</a>   
      </div>
      <div class="product">
        <img src="https://ih1.redbubble.net/image.4997545564.5233/ra,kids_tee,x900,EDE272:cfc3479bac,front-pad,750x1000,f8f8f8.u1.webp" alt="Kids' T-shirt">
        <h3>Cute T-shirt</h3>
        <p>Price: $107</p>
        <a href="add_cart.php?product_id=9">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNBq7RneFCJl_MUdWU8mS8H19yYL6d1jg-Mg&s" alt="Kids' Jeans">
        <h3>Stylish Jeans</h3>
        <p>Price: $250</p>
        <a href="add_cart.php?product_id=8">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
    </div>
  </section>
   <!---------- ACCESSORIES PAGE ------------>
  <section id="accessories" class="category">
    <h2>Accessories</h2>
    <div class="products">
      <!-- Product items -->
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO72uMrRm8poZ6FTgO0E9l1IpuKxIjmRsQTg&s" alt="Scarf">
        <h3>Winter Scarf</h3>
        <p>Price: $150</p>
        <a href="add_cart.php?product_id=10">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://s.alicdn.com/@sc04/kf/Hcbad43a757ea4058a7b668c1dd497436I.jpg_720x720q50.jpg" alt="Bag">
        <h3>Leather Bag</h3>
        <p>Price: $700</p>
        <a href="add_cart.php?product_id=11">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://s.alicdn.com/@sc04/kf/He3a2675509bb4c939b38f0d17cb650ebg.jpg_720x720q50.jpg" alt="Scarf">
        <h3>Winter Scarf</h3>
        <p>Price: $155</p>
        <a href="add_cart.php?product_id=12">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
      <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSldx53SydgpLVxwoXqwjI3R3kNK_98vRXW5A&s" alt="Bag">
        <h3>Leather Bag</h3>
        <p>Price: $708</p>
        <a href="add_cart.php?product_id=13">
<button class="add-cart">Add To Cart</button>
</a>
      </div>
    </div>
  </section>

  <!---------- SALE PAGE ------------>
  <section id="sale" class="category">
    <h2>End of Season Sale</h2>
    <p>Sale is not live now!</p>
    <button>Shop Sale</button>
  </section>
  
  <!---- contact page ------->
  
   <section id="contact">
  <div class="form-wrapper">
    <div class="contact-container">

      <h1>Contact Us</h1>

      <p>
        We would love to hear from you!
        Please fill out the form below to get in touch.
      </p>

      <form class="contact-form"
            action="contact.php"
            method="POST">

        <label for="name">Name:</label>

        <input
          type="text"
          id="name"
          name="name"
          placeholder="Enter your name"
          required>

        <label for="email">Email:</label>

        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email"
          required>

        <label for="message">Message:</label>

        <textarea
          id="message"
          name="message"
          placeholder="Enter your message"
          rows="5"
          required></textarea>

        <button type="submit" name="send">
          Send Message
        </button>

      </form>

    </div>
  </div>
</section>

<!---------- subscribe and footer---->
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Extra Links</h3>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">My Order</a></li>
                <li><a href="#">My Favorite</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Locations</h3>
            <ul>
                <li>India</li>
                <li>USA</li>
                <li>Pakistan</li>
                <li>France</li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Info</h3>
            <ul>
                <li>03123056568</li>
                <li>adanparacha9581@gmail.com</li>
				 <li>03263575910</li>
                <li>ridaghulamani@gmail.com</li>
				<li>03362235354</li>
                <li>faizaambreen2021@gmail.com</li>
                <li>03196860028</li>
        <li>bilalsaeedghoto@gmail.com</li>
                <li>Karachi, Pakistan - 05444</li>
            </ul>
            <div class="payment-icons">
                <img src="https://th.bing.com/th/id/OIP.n7h1S2OdlOsOi8O2U66o1AHaB-?rs=1&pid=ImgDetMain" alt="PayPal">
                <img src="https://logos-world.net/wp-content/uploads/2020/09/Mastercard-Symbol.jpg" alt="MasterCard">
                <img src="https://th.bing.com/th/id/OIP.7X_IPTAfmZPhNpJ1ofe_JgHaEv?rs=1&pid=ImgDetMain" alt="Visa">
            </div>
        </div>
    </div>
</footer>
  <footer>
    <div class="register">
      <h3>Register Yourself!</h3>
      <input type="email" placeholder="Enter your email">
      <button>Register</button>
    </div>
    <p>&copy; 2025 The Icon. All rights reserved.</p>
  </footer>
  
  

  <script src="project.js"></script>
</body>
</html>