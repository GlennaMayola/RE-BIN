<?php include('connect.php');
session_start();
if(isset($_SESSION['name']))
{
  header('location:index.php');
}

if(isset($_POST['Sign']))
{
  $username=$_POST['signup-username'];
  $email=$_POST['signup-email'];
  $password=$_POST['signup-password'];
  $say=mysqli_query($con,"select * from `signup` where Email='$email'");

  if(mysqli_num_rows($say)>0)
  {
    echo '<script>alert("email already exists")</script>';
  }
  else{ 

  

  $ab="insert into `signup`(Username,Email,Password) values('$username','$email','$password')" ;
  $res=mysqli_query($con,$ab);
  echo '<script>alert("Signed up successfully!!")</script>';
  header('location:Forum.php');
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up section</title>
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
  background: linear-gradient(to right, #0f4c75, #00a8cc); 
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

.panel {
  background-color: #ffffff;
   border-radius: 16px;
   box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
   padding: 30px;
   width: 400px;
   max-width: 90%;
   margin: 20px auto; 
   text-align: center;
}

.panel h2 {
  margin-top: 0;
  color: #333333;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
  color: #666666;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
  color: #333333;
}

.form-group button {
  background-color: #007bff;
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
  background-color: #0056b3;
}
</style>
</head>
<body>
<header>
  <h1>Sign up section</h1>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="About.php">About</a></li> 
      <li><a href="Dashborad.php">Dashboard</a></li> 
      <li><a href="Forum.php">Forum Section</a></li> 
      <li><a href="Shop.php">Shop</a></li> 
    </ul>
  </nav>
</header>
<main>
  <div class="panel">
    <h2>Create an Account</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="signup-username">Username</label>
        <input type="text" id="signup-username" name="signup-username" required>
      </div>
      <div class="form-group">
        <label for="signup-email">Email</label>
        <input type="email" id="signup-email" name="signup-email" required>
      </div>
      <div class="form-group">
        <label for="signup-password">Password</label>
        <input type="password" id="signup-password" name="signup-password" required>
      </div>
      <div class="form-group">
        <input type="submit" name="Sign" value="Sign Up" class="btn">
      </div>
    </form>
    <div class="terms">
      <p>By signing up, you agree to our <a href="#">Terms and Conditions</a>.</p>
    </div>
    <div class="back-to-signin">
      <p>Already have an account? <a href="Forum.html">Sign In</a></p>
    </div>
  </div>
</main>
<footer>
  <p>&copy; 2023 rebin solutions Website. All rights reserved.</p>
</footer>
</body>
</html>
