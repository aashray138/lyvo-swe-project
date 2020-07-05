<!DOCTYPE html>
<?php
            include('connection.php');
            session_start();
            $cId = $_SESSION['cId'];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/resumeFresher.css">

    <script src="./assets/resumeFresher.js"></script>
    <script src="./assets/resumeJS_load.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <div class="container">
        <div class="row">
            <div class="col-md-9">  
                <!-- Personal Information -->
            <?php
            $sql=" SELECT * FROM personal_info WHERE cId = '$cId'";
            $result = query ($conn, $sql);
            if (mysqli_num_rows($result) < 0)
            {
                die('Could not connect: ' . mysql_error());
            }

            while($row = mysqli_fetch_array($result)){
                echo "<h1>" . $row['fname'] . ' ' . "</h1>";
                echo "<h3>" . $row['profile'] . "</h3>";
                echo '<h4 id="address">' . $row['address']. ' ' . $row['city'] . ' ' . $row['state']. '</h4>';
            }
                ?>
            </div>


            <!-- Contact Information -->
            <div class="col-md-3">
                <h4 id="Contact" style="margin-top: 7%;"> Contact</h4>

                <?php
            $sql=" SELECT * FROM personal_info WHERE cId = '$cId'";
            $result = query ($conn, $sql);
            if (mysqli_num_rows($result) < 0)
            {
                die('Could not connect: ' . mysql_error());
            }

            while($row = mysqli_fetch_array($result)){
                echo '<h5 id="emailAddress" class="fa fa-envelope padNone">' . $row['email'].  '</h5> <br/>';
                echo '<h5 id="phoneNumber" class="fa fa-phone">' . $row['phone'] . '</h5><br/>';
                echo '<h5 id="gitHub" class="fa fa-github">' . $row['zcode'] . '</h5><br/>';
                echo ' <h5 id="linkedIn" class="fa fa-linkedin">' . $row['lname'] . '</h5><br/>';
            }
            ?>
            </div>
        </div>
    </div>

    <hr width="80%" />

    <!-- Education, Skills and Awards -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://img.icons8.com/ios-filled/30/000000/library.png" class="iconSet " />
                <h4 id="education" class="fa iconButton "> EDUCATION </h4> <br/>
                <div class="padZero">
                    <?php
                     while($row = mysqli_fetch_array($result)){
                        $sql=" SELECT * FROM education WHERE cId = '$cId'";
                        $result = query ($conn, $sql);
                        if (mysqli_num_rows($result) < 0)
                        {
                            die('Could not connect: ' . mysql_error());
                        }
            
                    echo ' <h4 id="collegeName1">' . $row['name'] . " " . '</h4>';
                    echo ' <h5 id="degree">' . $row['degree'] . " " . $row['course']. '</h5>';
                    echo ' <p class="fa fa-calendar">' . $row['grad_date'] . '</p>';
                     }
                     ?>
                </div>
            </div>
             <!-- Skills  -->
            <div class="col-md-4">
                <img src="https://img.icons8.com/ios-filled/30/000000/training.png" class="iconSet" />
                <h4 id="skills" class="fa iconButton "> SKILLS </h4>
                <div class="skillList">

                    <div class="col-md-6 ">
                        <h5> Communication </h5>
                    </div>
                    <div class="col-md-6 ">
                        <h5> Writing </h5>
                    </div>

                    <div class="col-md-6 ">
                        <h5> Law </h5>
                    </div>
                    <div class="col-md-6 ">
                        <h5> Interpersonal Skills</h5>
                    </div>
                    
                    <div class="col-md-6 ">
                        <h5> Friendly</h5>
                    </div>
                    <div class="col-md-6 ">
                        <h5> Frank </h5>
                    </div>
                    <div class="col-md-6 ">
                        <h5> Honest </h5>
                    </div>
                    <div class="col-md-6 ">
                        <h5> Cool </h5>
                    </div>
                </div>
            </div>
                 <!-- Awards  -->
            <div class="col-md-4">
                <img src="https://img.icons8.com/ios-filled/30/000000/medal.png" class="iconSet " />
                <h4 id="awards " class="fa iconButton "> AWARDS </h4>
                <ul>
                    <li>
                        <h4> Funniest Employer of the Month </h4>
                    </li>
                    <li>
                        <h4> Sexiest Person in the House  </h4>
                    </li>
                    <li>
                        <h4> Beat Corona Twice!</h4>
                    </li>
                    <li>
                        <h4> Coolest Friend Ever!</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  

    <hr width="80% " />

    <!-- Projects and Work Experience -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://img.icons8.com/ios-filled/48/000000/services.png" class="iconSet2" />
                <h4 id=" education " class="fa iconButton "> PROJECTS </h4> <br/>
                <div class="padZero">
                    <h4 id="projectName1 "> Build Your Resume  </h4>
                    <p class="fa fa-calendar"> 2020 </p>
                    <ul class="padZero">
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app. </li>
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                    </ul>
                </div>
                <div class="padZero">
                    <h4 id="projectName1 "> Build Your Resume  </h4>
                    <p class="fa fa-calendar"> 2020 </p>
                    <ul class="padZero">
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app. </li>
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://img.icons8.com/metro/26/000000/toolbox.png" class="iconSet2" />
                <h4 id=" education " class="fa iconButton "> WORK EXPERIENCE </h4> <br/>
                <div class="padZero ">
                    <h4 id="jobPosition " class="center "> Position </h4>
                    <h5 id="jobCompany " class="center "> Company </h5>
                    <p class="fa fa-calendar "> YYYY </p>
                    <ul class=" padZero ">
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                    </ul>
                </div>
                <div class="padZero ">
                    <h4 id="jobPosition " class="center "> Position </h4>
                    <h5 id="jobCompany " class="center "> Company </h5>
                    <p class="fa fa-calendar "> YYYY </p>
                    <ul class=" padZero ">
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                        <li> Builiding your resume has never been easier using this app. Builiding your resume has never been easier using this app.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>


</html>