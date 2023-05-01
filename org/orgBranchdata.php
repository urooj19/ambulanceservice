<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../org/styleO.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
    include('../sidenav.php');
 ?>
<div class="col-12">
	<br><br><br><br>
<?php echo "<h1 style='border-bottom: solid 3px #0083ca; text-align:center;'>Organization Branch Details </h1>" ; ?>

        <table class="table table-responsive table-hover table-striped">
                <thead>
						<th>Organization Branch Id</th>
						<th>Organization Branch Code</th>
						<th>Organization Branch Email</th>
						<th>Organization Branch Phone Number</th>
						<th>Organization Branch Address</th>
						<th>Avaible Ambulance</th>
						<th>Avaible Drivers</th>
						<th>Drivers Details</th>
						<!--<th>Organization Branch Agreement Status</th>
						<th>Details</th>-->
						<th>Update</th>
						<th>Delete</th>
</thead>
					<tbody>
    <?php
    include('../conn.php'); ?>

<?php
    $sql = "select * from branchdata";    
    $contactData = $con->query($sql);
    while($row = $contactData->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['idB']."</td>";
					echo "<td>".$row['codeB']."</td>";
					echo "<td>".$row['emailB']."</td>";
					echo "<td>".$row['phB']."</td>";
					echo "<td>".$row['addressB']."</td>";
					echo "<td>".$row['totalAmbB']."</td>";
					echo "<td>".$row['totalDriverB']."</td>";
				    echo "<td><a href='driverDetails.php?idB=".$row['idB']."' class='btn btn-primary'>Details</a></td>";
					echo "<td><a href='updateOrgRegistration.php?idB=".$row['idB']."' class='btn btn-success'>Update</a></td>";
					echo "<td><a href='deleteBranchData.php?idB=".$row['idB']."' class='btn btn-danger'>Delete</a></td>";
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