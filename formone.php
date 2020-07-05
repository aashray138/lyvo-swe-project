<html>

<head>
    <title>Freshers Resume Form</title>
    <script src="./assets/resumeFresher.js" E="JavaScript" type="text/javascript"></script>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/resumeFresher.css">
    <link rel="stylesheet" href="./assets/form1.css">

    <script src="./assets/resumeFresher.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Actual Form Fill Up Option-->


<body>
<div class = "card">
    <div class="headerInstruction">
        <h3> Please fill up all the sections according to the given instructions!</h3>
    </div>
    <hr/>

    <!-- Row for FirstName and LastName-->
    <form action="resumeFresher.php" method="POST">
    <p style="text-align:center"><b> Full Name  </b><br/> <input TYPE="text " SIZE="50 " name="firstname" placeholder="" >
        <p style="text-align:center"><b> Job Title  </b><br/> <input TYPE="text " SIZE="50 " name="jobTitle" placeholder="" >
            <p style="text-align:center"><b> Profile  </b><br/> <textarea rows="3 " cols="60 " name="profile" placeholder="" >
                </textarea><br> </p>



        <!-- Row for Contact Details -->
        <div class="row " style="margin-left: 1in; margin-right:1in; ">
            <div class=" col-md-3 centerAlign ">
                <p><b>Email Address</b><br/> <input TYPE="email " SIZE="40 " name="email"> </p>
            </div>
            <div class=" col-md-3 centerAlign ">
                <p><b>Phone Number</b><br/> <input TYPE="number " SIZE="10 " name="phone"> </p>
            </div>
            <div class=" col-md-3 centerAlign ">
                <p><b>LinkedIn UserName</b><br/> <input TYPE="text " SIZE="35 " name="linkedin"> </p>
            </div>
            <div class=" col-md-3 centerAlign ">
                <p><b>GitHub UserName</b><br/><input TYPE="text " SIZE="35 " name="github"> </p>
            </div>
        </div>
        <br/>
        <!-- Row for Education Details -->
        <h4>Education Detail</h4>

        <div class="row " style="margin-left: 1in; margin-right:1in; ">
            <div class=" col-md-1 centerAlign "></div>
            <div class=" col-md-5 centerAlign ">
                <p><b> Name of College or Univeristy</b><br/> <input TYPE="text " SIZE="40 " name="collegeName1"> </p>
                <p><b>Dates Attended </b><br/> <input TYPE="month " SIZE="5" name="collegeStart1" placeholder="YYYY ">  </p>
                </br>
            </div>
            <div class=" col-md-5 centerAlign ">
                <p><b> Name of College or Univeristy</b><br/> <input TYPE="text " SIZE="40 " NAME="collegeName2"> </p>
                <p><b>Dates Attended </b><br/> <input TYPE="month " SIZE="5" NAME="collegeStart2" placeholder=" YYYY "> </p>
                </br>
            </div>
            <div class=" col-md-1 centerAlign "></div>
        </div>

        <!-- Skill -->
        <h4>Let's List Your Top 8 Skills</h4>
        <div class="row " style="margin-left: 1in; margin-right:1in; ">
            <div class=" col-md-1 "> </div>
            <div class=" col-md-5 centerAlign ">
                <p> <input TYPE="text " SIZE="30 " NAME="skill1"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill2"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill3"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill4"> </p>
            </div>
            <div class=" col-md-5 centerAlign ">
                <p> <input TYPE="text " SIZE="30 " NAME="skill5"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill6"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill7"> </p>
                <p> <input TYPE="text " SIZE="30 " NAME="skill8"> </p>
            </div>
            <div class=" col-md-1 "> </div>
        </div>
        <br/>
        <h4>Awards and Honors</h4>
        <div class="row centerAlign" style="margin-left: 1in; margin-right:1in; ">
          
                <p> <input TYPE="text " SIZE="30 " name="award1"> </p>
                <p> <input TYPE="text " SIZE="30 " name="award2"> </p>
                <p> <input TYPE="text " SIZE="30 " name="award3"> </p>
                <p> <input TYPE="text " SIZE="30 " name="award4"> </p>

        </div>
        <br/>
        <!-- Project -->
        <h4>Showoff Your Projects </h4>
        <div class="row " style="margin-left: 1in; margin-right:1in; ">
            <!-- Project 1 -->
            <div class="col-md-4 centerAlign ">
                <p><b> Project Title </b><br/> <input TYPE="text " SIZE="40 " NAME="projectName1"> </p>
                <p><b> Year of Project </b><br/> <input TYPE="number " SIZE="4 " NAME="monthYear1"> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
            </div>

            <!-- Project 2 -->
            <div class="col-md-4 centerAlign ">
                <p><b> Project Title </b><br/> <input TYPE="text " SIZE="40 " NAME="projectName2"> </p>
                <p><b> Year of Project </b><br/> <input TYPE="number " SIZE="4 " NAME="monthYear2"> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
            </div>

            <!-- Project 3 -->
            <div class="col-md-4 centerAlign ">
                <p><b> Project Title </b><br/> <input TYPE="text " SIZE="40 " NAME="projectName3"> </p>
                <p><b> Year of Project </b><br/> <input TYPE="number " SIZE="4 " NAME="monthYear3"> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>

                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
            </div>
        </div>
        <br/>

        <!-- Employment History -->
        <h4>Employment History </h4>
        <div class="row " style="margin-left: 1in; margin-right:1in; ">
            <!-- Work 1 -->
            <div class="col-md-6 centerAlign ">
                <p><b> Project Title </b><br/> <input TYPE="text " SIZE="40 " NAME="projectName1"> </p>
                <p><b> Year of Project </b><br/> <input TYPE="number " SIZE="4 " NAME="monthYear1"> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
            </div>

            <!-- Work 2 -->
            <div class="col-md-6 centerAlign ">
                <p><b> Project Title </b><br/> <input TYPE="text " SIZE="40 " NAME="projectName2"> </p>
                <p><b> Year of Project </b><br/> <input TYPE="number " SIZE="4 " NAME="monthYear2"> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
                <p><b> Responsibility  </b><br/> <textarea rows="3 " cols="60 " name="responsibility3_2" placeholder="What did you achieve? ">
                </textarea><br> </p>
            </div>
        </div>

        </br>
        <h5> Did You Complete All the Sections? </h5>

        <input type="submit">
  </div>
    </form>
</body>

</html>