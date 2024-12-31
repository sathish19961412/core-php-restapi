<?php

$localhost="localhost";
$username="root";
$password="";
$database="landspace";

$conn=new mysqli($localhost,$username,$password,$database);

if($conn->connect_error)
{
    die("connected failed:".$conn->connect_error);
}
?>