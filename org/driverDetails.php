
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
  <link rel="stylesheet" href="styleO.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        .cardM{
            
            padding:10px;
        }
        </style>
   </head>
<body>
<?php
include('../conn.php'); ?>
<?php
include('../sidenav.php'); ?>
<br><br><br><br>

<?php
include('../conn.php');
$query2 = "SELECT * FROM driverregister";
$result = $con->query($query2);
if ($result-> num_rows > 0){
   echo "<h1 style='border-bottom: solid 3px #0083ca; text-align:center; color:black;'>
   Driver Details of Edhi Organization </h1>" ;
  
   while($row = $result->fetch_assoc()){
    echo"<div class='card mb-3'>",
      "<div class='row no-gutters'>",
        "<div class='col-md-4'>"."<img src='male.png' class='card-img' alt='...'>"."</div>",
        "<div class='col-md-8'>",
          "<div class='card-body'>",
            "<ul class='list-group list-group-flush'>",
              "<li class='list-group-item'>".'<b>'.'ID:'. $row['idD'].'</b>'."</li>",
              "<li class='list-group-item'>".'<b>'.'Name:'. $row['nameD'].'</b>'."</li>",
              "<li class='list-group-item'>".'<b>'.'Phone:'. $row['phoneD'].'</b>'."</li>",
              "<li class='list-group-item'>".'<b>'.'CNIC NUMBER:'. $row['cnicNoD'].'</b>'."</li>",
              "<li class='list-group-item'>".'<b>'.'Organaization:'. $row['selectD'].'</b>'."</li>",
            "</ul>",
          "</div>",
        "</div>",
      "</div>",
    "</div>";
  }
}
else{
  echo "No result";
}
?>


</body>
</html>