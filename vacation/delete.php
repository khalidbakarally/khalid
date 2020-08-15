<?php 
session_start();
include("connect.php");

if(isset($_GET['delete_id'])){
	$id=$_GET['delete_id'];
	

	$sql="DELETE FROM staff where EmpId=:id";
	$stmt=$conn->prepare($sql);
	$res=$stmt->execute(array(
    "id"=>$id

	));
	
}

 ?>