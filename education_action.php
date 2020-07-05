<?php
include "connection.php";
session_start();
$cid= $_SESSION['cId'];
$school= $_POST['school'];
$city= $_POST['city'];
$state= $_POST['state'];
$degree=$_POST['edu_form'];
$study= $_POST['study'];
$grad_date= $_POST['date'];

$user_registration_query="insert into education(cid,name,city, state,degree,course,grad_date) values ('$cid','$school','$city','$state','$degree','$study','$grad_date')";
$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
?>
<meta http-equiv="refresh" content="3;url=skills.html" />
