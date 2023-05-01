<?php

$id = $_GET['id'];

require '../conn.php';
   
    $sql = "delete from organizationdata where id ={$id}";

if($con->query($sql))
{
	header('location:orgRegistration.php');
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
?>