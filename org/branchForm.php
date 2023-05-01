<?php
require '../conn.php';
if(isset($_POST['submit'])){
$qry = "insert into branchdata values(null, '".$_POST['codeB']."', '".$_POST['emailB']."','".$_POST['phB']."','".$_POST['addressB']."'
, '".$_POST['totalAmbB']."','".$_POST['totalDriverB']."' );";
if($con->query($qry)===true)
{
$save = "success";
echo "success";
echo "<script>alert('Thankyou..! Will Get In Tounch Soon.')</script>";
}
else
{
    $save = "warning";
    echo "Failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Branch Regsitration</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<!--<h2>Organaization regsiteration</h2>-->
						</div>
						<form method="POST" action="branchForm.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Organaization Branch ID</span>
										<input class="form-control" type="text" name="idB" placeholder="Enter Organaization Branch ID" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Organaization Branch Code</span>
										<input class="form-control" type="text" name="codeB" placeholder="Enter Organaization Branch Code" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Organaization Branch Email</span>
										<input class="form-control" type="email" name="emailB" placeholder="Enter Organaization Branch Email" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Organaization Branch Phone Number</span>
								<input class="form-control"   type="number" name="phB"  placeholder="03XX-XXXXXXX" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Organaization Branch Address</span>
								<input class="form-control" type="text" name="addressB" placeholder="Enter Organaization Branch Address" required>
							</div>
							<div class="form-group">
								<span class="form-label">Total Ambulance</span>
								<input class="form-control" type="number" name="totalAmbB" placeholder="Enter total number of Ambulance" required>
							</div>
                            <div class="form-group">
								<span class="form-label">Total Drivers</span>
								<input class="form-control" type="number" name="totalDriverB" placeholder="Enter total number of Drivers" required>
							</div>
							
							<div class="form-group">
								<input type="checkbox" id="terms" name="terms">
  								<label for="terms" style="color: white" required>I agree to <a href="terms.html">Terms and condition</a></label>
							</div>
							<div class="form-btn">
								<button type="submit" class="submit-btn" name="submit" >Register</button>

							</div>
							<a href="orgBranchdata.php">show data</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>