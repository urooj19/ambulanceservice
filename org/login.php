<?php
session_start();
require('../conn.php');
if (isset($_POST['login'])) {
  $qry = "select uId,uName, uPass from user1 where uName = '" . $_POST['uName'] . "' and uPass = '" . $_POST['uPass'] . "' and uStatus = 0;";
  $data = $con->query($qry);
  if ($row = $data->fetch_assoc()) {
    $_SESSION['uName'] = $row['uName'];
    $_SESSION['uPass'] = $row['uPass'];
    header('Location:panelOrg.php');
  } else {
    $save = "Invalid";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="stylelogin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="logo.jpeg" alt="Enter your Id and Password to Login">
        <div class="text">
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form action="login.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your name" name="uName">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="uPass">
              </div>
              <div class="button input-box">
                <input name="login" type="submit" value="Login">
              </div>
              <?php
              if (isset($save) && $save == 'Invalid') { ?>
                <div class="invalid-login"><strong style="color:#0083ca;">Access failed to admin !</strong> </div>
              <?php } ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>