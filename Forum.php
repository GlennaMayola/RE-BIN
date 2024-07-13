<?php include('connect.php');
session_start();

if(isset($_POST['login']))
{
  //$username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $say=mysqli_query($con,"select * from `signup` where Email='$email' and Password='$password'");
  if(mysqli_num_rows($say)>0)
  {
    $row=mysqli_fetch_assoc($say);
    $_SESSION['name']=$row['Email'];
    $_SESSION['avail']=$row['Password'];
    $_SESSION['id']=$row['User Id'];
  echo '<script>alert("Logged in successfully!!")</script>';
    
    header('location:index.php');
    

  }
  else{ 

  echo '<script>alert("Incorrect Email or password")</script>';

  
}
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum Section</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    header, footer {
      text-align: center;
      padding: 10px;
      color: #fff;
      background-color: #53db00;
    }

    .panel-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 60px - 60px); /* Adjust based on header and footer height */
      padding: 20px;
    }

    .panel {
      background-color: rgba(255, 255, 255, 0.95);
      border-radius: 16px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
      padding: 40px;
      width: 350px;
      text-align: center;
    }

    .panel h2 {
      margin-top: 0;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      color: #333;
    }

    .form-group button {
      background-color: #188097;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      transition: background-color 0.3s;
    }

    .form-group button:hover {
      background-color: #188097;
    }

    .signup-link {
      margin-top: 15px;
      color: #555;
    }

    .signup-link a {
      color: #188097;
      text-decoration: none;
    }

    header,
    footer {
      text-align: center;
      padding: 10px;
      color: #fff;
      background: linear-gradient(to right, #188097, #bae4ee);
      /* header color code */
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

    /* Add the following .logo CSS code */
    .logo {
      display: block;
      position: absolute;
      top: 0px;
      right: 20px;
      max-width: 200px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Login Page</h1>
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
    <div class="panel-container">
      <div class="panel">
        <h2>Welcome Back!</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="login">Sign In</button>
          </div>
        </form>
        <p class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </div>
  </main>
  <footer>
    <p>&copy; 2023 Re~Bin Website. All rights reserved.</p>
  </footer>
</body>
</html>
