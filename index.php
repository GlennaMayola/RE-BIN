<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Re~Bin</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background1-color: #f4f4f4;
    }

    header, footer {
      text-align: center;
      padding: 20px 0;
      color: #fff;
      background: linear-gradient(to right, #188097, #bae4ee);
      position: relative;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    nav li {
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #00a8cc;
    }

    @media screen and (max-width: 600px) {
      nav ul {
        flex-direction: column;
      }

      nav li {
        margin-right: 0;
        margin-bottom: 10px;
      }
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 160px); /* Adjust as needed */
    }

    .logo {
      display: block;
      position: absolute;
      top: 0px; /* Adjust as needed for vertical positioning */
      right: 20px; /* Adjust as needed for horizontal positioning */
      max-width: 200px; /* Adjust the width as needed */
    }

    main img {
      max-width: 100%;
      height: auto;
      border: 5px solid #188097;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #188097;
      padding: 10px 0;
    }

    footer p {
      margin: 0;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Re~bin - Wet waste to black gold</h1>
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
        <!-- <li><a href="cart.php">Cart</a></li> -->
      </ul>
    </nav>
    
    <img src="logo.png" alt="Logo" class="logo">
  </header>
  <main>
    <img src="i1.png" alt="Centered Image">
  </main>
  <footer>
    <p>&copy; 2023 Re~Bin solutions Website. All rights reserved.</p>
  </footer>
</body>
</html>

