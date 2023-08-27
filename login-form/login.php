<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="login.css" />
</head>

<body>
  <div class="admin-form">
    <div class="form-section">
      <form action="#" method="post">
        <div class="half-circle"></div>
        <h2 class="form-heading">Login</h2>
        <span class="underline"></span>
        <div class="form_input-box">
          <input type="name" placeholder="Username" class="name" name="username" required />
        </div>
        <div class="form_input-box">
          <input type="password" placeholder="Password" class="password" name="password" />
        </div>
        <div class="form_rememberMe">
          <input type="checkbox" class="checkbox" /><span>Remember Me</span>
        </div>
        <input type="submit" value="Login" class="login-btn" name="login">
      </form>
    </div>
  </div>
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbn = "news portal";
$conn = mysqli_connect($servername, $username, $password, $dbn);
if (isset($_POSt['login'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query = "select * from reg_form where UserName='$user' AND Password='$pas'";
  $data = mysqli_query($conn, $query);
  if ($total == 1) {
    header('index.php');
  } else {
    echo "<script>alert('login failed</script>";
  }
}
?>