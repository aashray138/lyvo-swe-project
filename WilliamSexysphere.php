<?php
include 'connection.php';
session_start();
$cid= $_SESSION['cId'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sexysphere</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/sexysphere.css">
</head>

<body>
	<div class="content_body">
    <div class="resume_pt1">
        <div class="intro">

<?php
$profile_query = "select * from personal_info where cid='$cid' ";
$profile_result = mysqli_query($con, $profile_query) or die(mysqli_query($con));
$num_rows = mysqli_num_rows($profile_result);
if($num_rows>0){
    while($row=mysqli_fetch_assoc($profile_result)){
         echo '<h2 class="name">'.$row['fname'].' '.$row['lname'].'</h2>';
            echo '<p class="address">
                <i class="fas fa-location-arrow"></i>'.$row['address'].','.$row['city'].','.$row['state'];
                 echo '<p>
                    <p class="email">
                        <i class="fas fa-envelope"></i>'.$row['email'];
                    echo '</p>
                    <p class="phone">
                        <i class="fas fa-phone-alt"></i>'.$row['phone'];
                    echo '</p>
        </div>

        <div class="bio">
            <h3 class="topic"><i class="fas fa-edit"></i>Professional summary</h3>
            <p class="bio_text">'.$row['profile'];
            echo '</p>
           
        </div>';
    }
}
?>
        <div class="job_history">
            <h3 class="topic"><i class="fas fa-briefcase"></i> Employment history
            </h3>
<?php
$job_query = "select * from job where cid='$cid' ";
$job_result = mysqli_query($con, $job_query) or die(mysqli_query($con));
$job_rows = mysqli_num_rows($job_result);
if($job_rows>0){
    while($row=mysqli_fetch_assoc($job_result)){
            echo '<div class="jobs">
                <h4 class="job_head">'.$row['employer'].'</h4>';
                echo '<h5 class="job_date">'.$row['start_date'].' - '. $row['end_date'].'</h5>';
                echo '<ul class="job_desc">
                    <li>'.$row['description'].'</li>
                </ul>
            </div>
            
        </div>';
    }
}
?>
        <div class="education_history">
            <h3 class="topic"><i class="fas fa-graduation-cap"></i>Education</h3>
<?php
$edu_query = "select * from education where cid='$cid' ";
$edu_result = mysqli_query($con, $edu_query) or die(mysqli_query($con));
$edu_rows = mysqli_num_rows($edu_result);
if($edu_rows>0){
    while($row=mysqli_fetch_assoc($edu_result)){
           echo '<div class="edu">
                <h4 class="job_head">'.$row['degree'].', '.$row['name'].'</h4>';
               echo '<h5 class="job_date">'.$row['grad_date']. ' - ' .$row['attend'].'</h5>';
            echo '</div>

        </div>
    </div>';
    }
}
?>
    <div class="resume_pt2">
        <div class="honors_history">
            <h3 class="topic"><i class="fas fa-award"></i>Honors</h3>
            <div class="his1">
                <h4 class="job_head">President of Eco Club</h4>
                <h5 class="job_date">June 2015 - Current</h5>
            </div>
        </div>

        <div class="skills_history">
            <h3 class="topic"><i class="fas fa-user-cog"></i>Skills</h3>

            <div class="skills_set">
<?php
$skill_query = "select * from skills where cid='$cid' ";
$skill_result = mysqli_query($con, $skill_query) or die(mysqli_query($con));
$skill_rows = mysqli_num_rows($skill_result);
if($skill_rows>0){
    while($row=mysqli_fetch_assoc($skill_result)){
                echo '<ul class="skills">
                  <li>'.$row['skill'].' -> '.$row['level'].'</li>';
                    echo '<li>JavaScript</li>
                    <li>Java</li>
                    <li>CSS</li>
                </ul>';
    }
}
?> 
 </div>
        </div>

        <div class="hobbies_history">
            <h3 class="topic"><i class="fas fa-heart"></i>Hobbies</h3>

            <div class="hobbies_set">
                <ul class="hobbies">
                    <li>Photography</li>
                    <!-- <progress value = "65" min = "0" max = "100"/> -->
                    <li>Video Editing</li>
                    <li>Chess</li>
                    <li>CallBreak</li>
                   
                </ul>
            </div>
        </div>

        <div class="lang_history">
            <h3 class="topic"><i class="fas fa-globe-americas"></i>Languages</h3>

            <div class="lan_set">
                <ul class="languages">
                    <li>English</li>
                    <li>Nepali</li>
                    <li>Hindi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
</body>
</html