<?php

$idB = $_GET['idB'];

require '../conn.php';
   
    $sql = "delete from branchdata where idB ={$idB}";

if($con->query($sql))
{
	header('location:orgBranchdata.php');
}
else{
    echo "Error Occoured ".$sql. $con->error;
}
?>