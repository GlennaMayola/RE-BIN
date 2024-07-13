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
  <title>Login Page</title>
  <style>
    body {
      background-color: #ffffff;
    }

    h1 {
      color: #000000;
      font-size: 24px;
    }

    form {
      margin: 0 auto;
      width: 50%;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #000000;
    }

    input[type="submit"] {
      background-color: #000000;
      color: #ffffff;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>Login</h1>
  <form action="#" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login" name="login">
  </form>
</body>

</html>