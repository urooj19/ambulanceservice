<?php
require '../conn.php';
if(isset($_POST['submit'])){
$qry = "update organizationdata set name='".$_POST['name']."', email = '".$_POST['email']."'
, ph = '".$_POST['ph']."'  , address = '".$_POST['address']."' , totalbranch = '".$_POST['totalbranch']."',
branchdetail = '".$_POST['branchdetail']."' where id = '".$_POST['id']."';";
if($con->query($qry))
{
	$save = "success";
}
else
{
	$save = "warning";
}
}?>
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
    include('../sidenav.php'); ?>
   <?php
    include('../conn.php'); ?>
<div class="container">
		<div class="row">
			<div class="col-12 text-center p-3">
				<?php echo "<br><br><br><h1 style='border-bottom: solid 3px #0083ca;'> Updating Data of Id: ".$_GET['id'];" </h1>" ; ?>
			</div>
			<div class="col-12">
				<?php
				if(isset($save) && $save == 'success'){?>
				  <div class="alert alert-success alert-dismissible">
    				<button type="button" class="close" data-dismiss="alert">&times;</button>
    				<strong>Success!</strong> Data Updated successfully.
  				</div>
			<?php }else if(isset($save) && $save == 'warning'){?>
				<div class="alert alert-warning alert-dismissible">
    				<button type="button" class="close" data-dismiss="alert">&times;</button>
    				<strong>Warning!</strong> Doing something Wrong Sir.
  				</div>
			<?php } ?>
            </div>
			<div class="col-12">
				<?php
				$qry = "select * from organizationdata where id=".$_GET['id'].";";

				$data = $con->query($qry);

				if($row = $data->fetch_assoc())
				{ ?>

                <form method="POST" style="padding-bottom: 5rem;">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Organization Name</label>
                  <input type="text" id="fname" class="form-control" name="name" value="<?php echo $row['name'];?>">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Organization Phone Number</label> 
                  <input type="number" id="email" class="form-control" name="ph"  value="<?php echo $row['ph'];?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Organization Email</label> 
                  <input type="email" id="email"  class="form-control" name="email"  value="<?php echo $row['email'];?>">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Organization Address</label> 
                  <input type="text" id="subject"  class="form-control" name="address"  value="<?php echo $row['address'];?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Total Organization Branches</label> 
                  <input type="text" id="subject"  class="form-control" name="totalbranch"  value="<?php echo $row['totalbranch'];?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="note">Branch Detail</label> 
                  <textarea name="branchdetail" id="note" cols="30" rows="5" class="form-control" value="<?php echo $row['branchdetail'];?>"></textarea>
                </div>
                </div>
				 
				  <button type="submit" name="submit" class="btn btn-primary">Update</button>
				  <a href="orgRegistration.php" type="button" name="submit" class="btn btn-success">View Data</a>
				</form>
                <?php } ?>
			</div>
		</div>
	</div>
</section>

  
</body>
</html>