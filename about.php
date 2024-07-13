<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color:  #f4f4f4;
      font-family: Arial, sans-serif;
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
      padding: 20px;
      text-align: center;
    }
    .logo {
      display: block;
      position: absolute;
      top: 0px; /* Adjust as needed for vertical positioning */
      right: 20px; /* Adjust as needed for horizontal positioning */
      max-width: 200px; /* Adjust the width as needed */
    }
    .image-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .image {
      width: 200px;
      height: 200px;
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .image img {
      max-width: 100%;
      max-height: 100%;
    }

    .image p {
      margin-top: 10px;
      font-weight: bold;
    }

    /* Add the arrow CSS */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background-color: transparent;
      border: 2px solid #188097;
      border-width: 2px 2px 0 0;
      transform: rotate(45 deg);
    }

    .arrow.right {
      right: -75px;
      border-width: 2px 2px 0 0;
      transform: rotate(45deg);
    }
  </style>
</head>
<body>
  <header>
    <h1>About</h1>
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
    <img src="logo.png" alt="Logo" class="logo">
  </header>
  <main>
    <div class="image-container">
      <div class="image">
        <div class="arrow right"></div>
        <img src="image1.jpg" alt="Image 1">
        <p>1. All sorts of wet waste generated from your kitchen </p>
      </div>
      <div class="image">
        <div class="arrow right"></div>
        <img src="image2.jpg" alt="Image 2">
        <p>2. The decomposition process</p>
      </div>
      <div class="image">
        <div class="arrow right"></div>
        <img src="image3.jpg" alt="Image 3">
        <p>3.Ready Manure!!!</p>
      </div>
    </div>
  </main>
  <footer>
    <p>&copy; 2023 Re~bin Website. All rights reserved.</p>
  </footer>
</body>
</html>
