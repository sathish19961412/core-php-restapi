<?php
include_once('server.php');
if(isset($_POST['submit']))
{

 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $type=$_POST['type'];
 $buy=$_POST['buy'];
 $enquire=$_POST['enquire'];
 $requirement=$_POST['requirement'];

 $sqlinsert="INSERT INTO enquire (name,phone,email,type,buy,enquire,requirement) VALUES ('$name','$phone','$email','$type','$buy','$enquire','$requirement')";

 mysqli_query($conn,$sqlinsert);

 echo "<script>window.location.href='index.php';</script>";

}

?>