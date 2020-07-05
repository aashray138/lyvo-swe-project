<?php
include "connection.php";
session_start();
/*$schoolname = $_POST['sname']*/
$cid=$_SESSION['cId'];
$ename= $_POST['ename'];
$title= $_POST['title'];

$city= $_POST['city'];
$state= $_POST['state'];
$start= $_POST['start'];
$end= $_POST['end'];

$desc= $_POST['desc'];


$user_registration_query="insert into job(cid,employer,title,city,state,description,start_date, end_date) values ('$cid','$ename','$title','$city','$state','$desc','$start','$end')";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
?>
<meta http-equiv="refresh" content="3;url=template.php "/>