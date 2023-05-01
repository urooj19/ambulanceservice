<?php
session_start();
if (!isset($_SESSION['uPass'])) {
  header("Location:org/panelOrg.php"); 
}
else{
?><html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
  <link rel="stylesheet" href="styleO.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  </head>
  <body >
  <?php
  include('../sidenav.php');
 ?>
  </body>
  </html>
    <?php
    }
    ?>