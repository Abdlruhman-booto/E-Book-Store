
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
 
  <div class="container">
    <h2>Login</h2>
    <form method="post">
      <input type="email" placeholder="Email" name="email">
      <input type="password" placeholder="Password" name="password" >
      <button type="submit" name="Login">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register Now</a></p>
  </div>

<?php

session_start();

if (isset($_SESSION['vaild'])){
  header("Location: home.php");
  exit();
}



if(isset($_POST["Login"])){
  include('config.php');
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";

  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  if(is_array($row) && !empty($row)){
    $_SESSION['vaild'] = $row['Username'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['age'] = $row['Age'];
    $_SESSION['password'] = $row['Password'];
    
    header('location: home.php');
    

  }else{
    echo "wrong email or password";
  }
}

?>
</body>
</html>
