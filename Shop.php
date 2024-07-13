<?php
session_start();
if(!isset($_SESSION['name']))
{
  header('location:Forum.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, 'Times New Roman', Times, serif;
        }

        header, footer {
            text-align: center;
            padding: 10px;
            color: #fff;
            background: linear-gradient(to right, #188097, #bae4ee);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        .product {
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .product img {
            max-width: 100%;
        }

        .product h2 {
            font-size: 24px;
            margin: 10px 0;
        }

        .product p {
            font-size: 16px;
            margin: 10px 0;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .buy-now-button,
        .add-to-cart-button {
            padding: 10px 20px;
            background-color: #00a8cc;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .buy-now-button:hover,
        .add-to-cart-button:hover {
            background-color: #00a8cc;
        }

        /* Add the .logo class styling here */
        .logo {
            display: block;
            position: absolute;
            top: 0px; /* Adjust as needed for vertical positioning */
            right: 20px; /* Adjust as needed for horizontal positioning */
            max-width: 200px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Store</h1>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="About.php">About</a></li> 
               <li><a href="Dashboard.php">Dashboard</a></li> 
               <?php

        if(isset($_SESSION['name']))
{
  


       
        echo "<li><a href='logout.php'>logout</a></li>";
        

}
else
{
  echo  "<li><a href='Forum.php'>Login</a></li>";
}
?>
               <li><a href="Shop.php">Shop</a></li> 
           </ul>
          </nav>
        <img src="logo.png" alt="Logo" class="logo"> <!-- The logo image with the .logo class -->
    </header>
    <main>
        <div class="product">
            <img src="CAD.jpeg" alt="Product Image">
            <h2>Re~Bin Home Composter</h2>
            <p> Odorless , Soundless , Produces manure in 24 hours and Easy to use  <br/></p>
            <p> <br/> Price: 7999/- </p>
            <div class="buttons">
                <button class="buy-now-button">Buy Now</button>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
    </main>
    <footer>
        <p>&copy; 2023 Re~bin Website. All rights reserved.</p>
    </footer>
</body>
</html>

