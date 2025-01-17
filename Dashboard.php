<?php
session_start();
if(!isset($_SESSION['name']))
{
  header('location:Forum.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
 <style>
 body {
  margin: 0;
  padding: 0;
  background-color: white;
  font-family: Arial, sans-serif;
 background-color: #f4f4f4;
}

header,footer {
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

    .button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background: linear-gradient(to right, #0f4c75, #00a8cc);
      color: white;
      border: none;
      border-radius: 5px;
      margin: 5px;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #3ca200;
    }

    #top-button {
      margin-top: 50px;
      margin-left:107px;
    }

    .button-group {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    .button-group .button {
      margin: 0 10px;
    }

    #decompose-button {
      margin-top: 20px;
      margin-left:80px;
    }

    #number-buttons {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

.panel {
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      margin: 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }

    .panel:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .panel h2 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
    }

    .panel p {
      color: #666;
    }
h2{
 padding: 10px;
 color: #fff;
  background: linear-gradient(to right, #0f4c75, #00a8cc);
    margin: 0;
 text-align: center;
}
 main {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 140px);
    }
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
    <h1>Dashboard</h1>
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
<div class="panel">
<h2> Control Panel</h2>
    <button class="button" id="top-button">On</button>
    <div class="button-group">
      <button class="button">Start</button>
      <button class="button">Yes</button>
      <button class="button">No</button>
    </div>
    <button class="button" id="decompose-button">Decompose</button>
    <div id="number-buttons">
      <button class="button">1</button>
      <button class="button">2</button>
      <button class="button">3</button>
      <button class="button">4</button>
      <button class="button">5</button>
    </div>
</div>
 </main>
  <footer>
    <p>&copy; 2023 Re~bin Website. All rights reserved.</p>
  </footer>
</body>
</html>