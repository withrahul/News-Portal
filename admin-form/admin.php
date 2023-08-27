<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbn = "news portal";
$conn = mysqli_connect($servername, $username, $password, $dbn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $u_name = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $query = "INSERT INTO `reg_form` (`Sl_No`, `UserName`, `Email`, `Password`) VALUES (NULL, '$u_name', '$email', '$password')";
  $data = mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="form.css" />
</head>

<body>
  <div class="admin-form">
    <div class="form-section">
      <form action="admin.php" method="POST">
        <div class=" half-circle">
        </div>
        <h2 class="form-heading">Register</h2>
        <span class="underline"></span>
        <div class="form_input-box">
          <input type="name" placeholder="Username" class="name" name="uname" required />
        </div>
        <div class=" form_input-box">
          <input type="email" placeholder="Email" class="email" name="email" required />
        </div>
        <div class="form_input-box">
          <input type="password" placeholder="Password" class="password" name="pass" required />
        </div>
        <div class="form_rememberMe">
          <input type="checkbox" class="checkbox" /><span>Remember Me</span>
        </div>
        <button class="login-btn">Register</button>
      </form>
    </div>
  </div>

</body>

</html>