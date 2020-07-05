<?php
include "connection.php";
session_start();
/*$schoolname = $_POST['sname']*/
$cid=$_SESSION['cId'];
$levels=array('Select your skill level','Novice','Beginner','Skilled','Experienced','Expert');
//$selected_key1 = $_POST['//\\\'];
$level1 = $_POST['level1'];
$skill1= $_POST['skill1'];
$skill2= $_POST['skill2'];
//$selected_key2 = $_POST['select_form2'];
$level2 = $_POST['select_form2'];
$skill3= $_POST['skill3'];
//$selected_key3 = $_POST['select_form3'];
$level3 = $_POST['select_form3'];
// echo '<p>Your skills is'.$level3.'</p>';
// echo '<p>Your skills is'.$level2.'</p>';
// echo '<p>Your skills is'.$level1.'</p>';



 $user_registration_query="insert into skills(cid,skill,level) values ('$cid','$skill1','$level1')";
 $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
// /////////////////
 $user_registration_query2="insert into skills(cid,skill,level) values ('$cid','$skill2','$level2')";
 $user_registration_result2=mysqli_query($con,$user_registration_query2) or die(mysqli_error($con));
// //////////
 $user_registration_query3="insert into skills(cid,skill,level) values ('$cid','$skill3','$level3')";
 $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

?>
<meta http-equiv="refresh" content="3;url=experience.html" />
