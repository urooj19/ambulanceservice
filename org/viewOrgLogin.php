<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
  <link rel="stylesheet" href="styleO.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
    include('../sidenav.php');
 ?>
<div class="col-12">
	<br><br><br><br>
<?php echo "<h1 style='border-bottom: solid 3px #0083ca; text-align:center;'>Admin Info </h1>" ; ?>

        <table class="table table-responsive table-hover table-striped">
                <thead>
						<th>Admin Id</th>
						<th>Admin Name</th>
						<th>Admin Password</th>
						<!--<th>Details</th>-->
						<th>Update</th>
						
						<th>Delete</th>
					<tbody>
    <?php
    include('../conn.php'); ?>
	<?php
    $sql = "select * from user1 ";    
    $contactData = $con->query($sql);
    while($row = $contactData->fetch_assoc())
				{
					echo "<tr>";
          
					echo "<td>".$row['uId']."</td>";

					echo "<td>".$row['uName']."</td>";

					echo "<td>".$row['uPass']."</td>";

					//echo "<td><a href='view-each.php?myId=".$row['uId']."' class='btn btn-primary'>Details</a></td>";
					echo "<td><a href='update.php?myId=".$row['uId']."' class='btn btn-success'>Update</a></td>";
					echo "<td><a href='delete.php?myId=".$row['uId']."' class='btn btn-danger'>Delete</a></td>";
					echo "</tr>";
				}
    ?>
                    </tbody>
				</table>
			</div>
		</div>
	</div>
			</section>
</body>
</html>