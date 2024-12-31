<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM products WHERE id=$id");
header('Location:tables-data.php');
?>