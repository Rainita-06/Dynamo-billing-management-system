<?php 
include("Includes/config.php");
extract($_GET);
$get = $conn->query("SELECT * FROM user where id= ".$id)->fetch_array();
$qry = $conn->query("DELETE FROM user where id = ".$id );
$qry2 = $conn->query("DELETE FROM user where id = '".$get['id']."' ");
if($qry && $qry2)
	echo true;
?>