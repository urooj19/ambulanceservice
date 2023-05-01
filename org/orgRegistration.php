<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styleO.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
    include('../sidenav.php');
 ?>
<div class="col-12">
	<br><br><br><br>
<?php echo "<h1 style='border-bottom: solid 3px #0083ca; text-align:center;'>Organization Details </h1>" ; ?>

        <table class="table table-responsive table-hover table-striped">
                <thead>
						<th>Organization Id</th>
						<th>Organization Name</th>
						<th>Organization E-mail</th>
						<th>Organization Phone Number</th>
						<th>Organization Address</th>
						<th>Organization No. Of Branches</th>
						<th>Branch Details</th>
						<th>Branch Register</th>
						<th>Update</th>
						<th>Delete</th>
</thead>
					<tbody>
    <?php
    include('../conn.php'); ?>

	<?php
    $sql = "select * from organizationdata";    
    $contactData = $con->query($sql);
    while($row = $contactData->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['ph']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['totalbranch']."</td>";
					echo "<td>".$row['branchdetail']."</td>";
				    echo "<td><a href='branchForm.php?id=".$row['id']."' class='btn btn-primary'>Register</a></td>";
					echo "<td><a href='updateOrgRegistration.php?id=".$row['id']."' class='btn btn-success'>Update</a></td>";
					echo "<td><a href='deleteOrgRegistration.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
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