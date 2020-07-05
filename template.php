<?php
include 'connection.php';
session_start();
$cid= $_SESSION['cId'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Resume Builder App</title>
    <link rel="stylesheet" type="text/css" href="./assets/template.css" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@0;1&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
    
<?php
$profile_query = "select * from personal_info where cid='$cid' ";
$profile_result = mysqli_query($con, $profile_query) or die(mysqli_query($con));
$num_rows = mysqli_num_rows($profile_result);
if($num_rows>0){
    while($row=mysqli_fetch_assoc($profile_result)){
        echo '<ul>';
           echo '<li class="name">'.$row['fname'].' '.$row['lname'].'</li>';
            echo '<li>'.$row['address'].', '.$row['city'].', '.$row['state'].'</li>';
            echo '<li>'.$row['email'].'</li>';
    
        echo '</ul>
    </header>
    
    <div>
        <p class="title">
            PROFESSIONAL SUMMARY
        </p>
        <hr />';
       echo '<p>'.$row['profile'].'</p>
    </div>';
}
}
?>

<div>
        <p class="title">EMPLOYMENT HISTORY</p>
        <hr />
        <div class="work">
            <ul class="lists">
<?php
$job_query = "select * from job where cid='$cid' ";
$job_result = mysqli_query($con, $job_query) or die(mysqli_query($con));
$job_rows = mysqli_num_rows($job_result);
if($job_rows>0){
    while($row=mysqli_fetch_assoc($job_result)){
       
               echo '<li>
                    <b>'.$row['title'].', '.$row['employer'].'</b> <span>Place</span>
                </li>';
                echo '<li class="date">'.$row['start_date'].' - '.$row['end_date'].'</li>';
                echo '<li>'.$row['description'].'</li>';
           
    }
}
?>
</ul>
</div>
    </div>
    <div>
        <p class="title">EDUCATION</p>
        <hr />
        <div class="work">
            <ul class="lists">
<?php
$edu_query = "select * from education where cid='$cid' ";
$edu_result = mysqli_query($con, $edu_query) or die(mysqli_query($con));
$edu_rows = mysqli_num_rows($edu_result);
if($edu_rows>0){
    while($row=mysqli_fetch_assoc($edu_result)){
               echo '<li><b>'.$row['name'].'</b> <span>GPA</span></li>';
                echo '<li class="date">'.$row['grad_date'].'</li>';
                echo '<li>'.$row['course'].'</li>';
    }
}
?>
            </ul>
        </div>
    </div>
    <!--honors-->
    <div>
        <p class="title">HONORS</p>
        <hr />
        <div class="work">
            <ul class="lists">
            <?php
$skill_query = "select * from skills where cid='$cid' ";
$skill_result = mysqli_query($con, $skill_query) or die(mysqli_query($con));
$skill_rows = mysqli_num_rows($skill_result);
if($skill_rows>0){
    while($row=mysqli_fetch_assoc($skill_result)){
                echo '<li>'.$row['skill'].'</li>';
    }
}
?>
            </ul>
        </div>
    </div>
</body>

</html>