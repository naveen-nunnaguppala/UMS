<!DOCTYPE html>

<?php

   include('session.php');
?>

<html lang="en">
<style>
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.8);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 5%;
    width:100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

/* Make sure that padding behaves as expected */
* {box-sizing:border-box;
    /*margin:0px;*/
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .clbtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-right .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student UMS</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/stylee.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <img src="images/lpu.png" width="20%" height="20%" style="margin-left:-350px;margin-top:-400px">
          <h1>Dear <span class="name"><font color="Orange"> Student</font></span></h1>
          <p><h2><font color="white">Welcome to the <font color="Orange">UMS</font></font></h2></p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">View More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->

<div id="mynav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <img src="images/lpu.png" width="20%" height="20%">
    <hr>
  <a href="#" onclick="Sideopen();">Academic Course Syllabus</a>
    <a href="#" onclick="Sideopen1();">Assignments</a>
    <a href="#" onclick="Sideopen2();">Instruction Plans</a>
    <a href="#" onclick="Sideopen3();">Make Up and Adjustments</a>
    <a href="timetable.php">View Time-Table</a>
    <a href="#" onclick="Sideopen5();">Registration of Online Courses</a>
    <a href="#" onclick="Sideopen6();">Practice Exam</a>
    <a href="stdper.html">View Report</a>
  </div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose()">&times;</a>

  <div class="overlay-content">

     <a href="#" onclick="Sideopen8();">2019-2020 Session 2</a>
    <a href="#" onclick="Sideopen9();">2019-2020 Session 1</a>
    <a href="#" onclick="Sideopen10();">2018-2019 Session 2</a>
    <a href="#" onclick="Sideopen11();">2018-2019 Session 1</a>
    <a href="#" onclick="Sideopen8();">2017-2018 Session 2</a>
    <a href="#" onclick="Sideopen9();">2017-2018 Session 1</a>
    <a href="#" onclick="Sideopen10();">2016-2017 Session 2</a>
    <a href="#" onclick="Sideopen11();">2016-2017 Session 1</a>
    <a href="#" onclick="Sideopen8();">2015-2016 Session 2</a>
    <a href="#" onclick="Sideopen10();">2015-2016 Session 2</a>
    <a href="#" onclick="Sideopen11();">2014-2014 Session 2</a>
    <a href="#" onclick="Sideopen8();">2014-2014 Session 1</a>
  </div>

</div>
<div id="mySidenav1" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose1()">&times;</a>
  <div class="overlay-content">

     <a href="#" onclick="Sideopen16();">CSE-106</a>
    <a href="#" onclick="Sideopen16();">CSE-202</a>
    <a href="#" onclick="Sideopen16();">CSE-326</a>
    <a href="#" onclick="Sideopen16();">ECE-213</a>
    <a href="#" onclick="Sideopen16();">ECE-216</a>
    <a href="#" onclick="Sideopen16();">MEC-103</a>
    <a href="#" onclick="Sideopen16();">MTH-166</a>
    <a href="#" onclick="Sideopen16();">PEL-131</a>
    <a href="#" onclick="Sideopen16();">PHY-109</a>
    <a href="#" onclick="Sideopen16();">PHY-119</a>
  </div>
</div>
<div id="mySidenav2" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose2()">&times;</a>
  <div class="overlay-content">

     <table cellpadding="10px" cellspacing="10px" border="3px" align="center">
  <thead>
        <tr>
          <th><font size="5">IP</th>
          <th><font size="5">File</th>
        </tr>
      </thead>
      <tbody>
        
      <?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * from users RIGHT JOIN Courses ON (users.Section = Courses.Section) WHERE Courses.Section='$login_section' AND users.Reg_No='$login_session'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td><font size='5'>" . $row['Course_Code'] . "</td>";
                echo "<td><font size='5'><a href=".$row['Path'].">Download</a></td>";
                echo "</tr>";         }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
  echo $login_section;
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>
      </tbody>
    </table>

  </div>
</div>
<div id="mySidenav3" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose3()">&times;</a>
  <div class="overlay-content">
  <p>No MakeUp's or Adjustments today.</p>
  </div>
</div>
<div id="mySidenav4" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose4()">&times;</a>
  <div class="overlay-content">
    <h2>Select The Day</h2>
    <a href="#" onclick="Sideopen36();">Monday</a>
    <a href="#" onclick="Sideopen37();">Tuesday</a>
    <a href="#" onclick="Sideopen38();">Wednesday</a>
    <a href="#" onclick="Sideopen39();">Thursday</a>
    <a href="#" onclick="Sideopen40();">Wednesday</a>
    <a href="#" onclick="Sideopen41();">Thursady</a>
    <a href="#" onclick="Sideopen42();">Friday</a>
    <a href="#" onclick="Sideopen43();">Saturday</a>
  </div>
</div>
<div id="mySidenav5" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose5()">&times;</a>
  <div class="overlay-content">
    <h2>Select The Course</h2>
    <a href="#" onclick="Sideopen44();">Ethical Hacking</a>
    <a href="#" onclick="Sideopen44();">Advanced Java & Applications</a>
    <a href="#" onclick="Sideopen44();">Machine Learning</a>
    <a href="#" onclick="Sideopen44();">Cyber Security</a>
    <a href="#" onclick="Sideopen44();">Data Science and analysis</a>
    <a href="#" onclick="Sideopen44();">Web development</a>
    <a href="#" onclick="Sideopen44();">Internet of things</a>
    <a href="#" onclick="Sideopen44();">Big data</a>
    <a href="#" onclick="Sideopen44();">Android app development</a>
  </div>
</div>

<div id="mySidenav6" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose6()">&times;</a>
  <div class="overlay-content">

     <a href="#" onclick="Sideopen53();">CSE-106</a>
    <a href="#" onclick="Sideopen53();">CSE-202</a>
    <a href="#" onclick="Sideopen53();">CSE-326</a>
    <a href="#" onclick="Sideopen53();">ECE-213</a>
    <a href="#" onclick="Sideopen53();">ECE-216</a>
    <a href="#" onclick="Sideopen53();">MEC-103</a>
    <a href="#" onclick="Sideopen53();">MTH-166</a>
    <a href="#" onclick="Sideopen53();">PEL-131</a>
    <a href="#" onclick="Sideopen53();">PHY-109</a>
    <a href="#" onclick="Sideopen53();">PHY-119</a>
  </div>
</div>

<div id="mySidenav8" class="sidenav">
  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose8()">&times;</a>
  <div class="overlay-content">
  <table cellpadding="10px" cellspacing="10px" border="3px" align="center">
  <thead>
        <tr>
         
          <th><font size="5">File</th>
          <th><font size="5">Action</th>
        </tr>
      </thead>
      <tbody>
        
      <?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM academicsyllabus WHERE Session='S1'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
         
                echo "<td><font size='5'>" . $row['Course_Code'] . "</td>";
                echo "<td><font size='5'><a href=".$row['Path'].">Download</a></td>";
                echo "</tr>";         }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
  echo $login_section;
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>
      </tbody>
    </table>
  </div>
  </div>
  <div id="mySidenav9" class="sidenav">
    <a href="javascript:void(0)" class="clbtn" onclick="Sideclose9()">&times;</a>
    <div class="overlay-content">

       <table cellpadding="10px" cellspacing="10px" border="3px" align="center">
  <thead>
        <tr>
         
          <th><font size="5">File</th>
          <th><font size="5">Action</th>
        </tr>
      </thead>
      <tbody>
        
      <?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM academicsyllabus where Session='S2'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
                echo "<td><font size='5'>" . $row['Course_Code'] . "</td>";
                echo "<td><font size='5'><a href=".$row['Path'].">Download</a></td>";
                echo "</tr>";         }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
  echo $login_section;
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>
      </tbody>
    </table>
    </div>
    </div>
    <div id="mySidenav10" class="sidenav">
      <a href="javascript:void(0)" class="clbtn" onclick="Sideclose10()">&times;</a>
      <div class="overlay-content">

   
       <table cellpadding="10px" cellspacing="10px" border="3px" align="center">
  <thead>
        <tr>
         
          <th><font size="5">File</th>
          <th><font size="5">Action</th>
        </tr>
      </thead>
      <tbody>
        
      <?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM academicsyllabus where Session='S3'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
                echo "<td><font size='5'>" . $row['Course_Code'] . "</td>";
                echo "<td><font size='5'><a href=".$row['Path'].">Download</a></td>";
                echo "</tr>";         }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
  echo $login_section;
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>
      </tbody>
    </table>
      </div>
      </div>
      <div id="mySidenav11" class="sidenav">
        <a href="javascript:void(0)" class="clbtn" onclick="Sideclose11()">&times;</a>
        <div class="overlay-content">

        
       <table cellpadding="10px" cellspacing="10px" border="3px" align="center">
  <thead>
        <tr>
          
          <th><font size="5">File</th>
          <th><font size="5">Action</th>
        </tr>
      </thead>
      <tbody>
        
      <?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM academicsyllabus where Session='S4'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
           
                echo "<td><font size='5'>" . $row['Course_Code'] . "</td>";
                echo "<td><font size='5'><a href=".$row['Path'].">Download</a></td>";
                echo "</tr>";         }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
  echo $login_section;
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>
      </tbody>
    </table>
        </div>
        </div>
        <div id="mySidenav26" class="sidenav">
          <a href="javascript:void(0)" class="clbtn" onclick="Sideclose26()">&times;</a>
          <div class="overlay-content">
            <form method="post" enctype="multipart/form-data">
             <button name="btn">Download</button>
           </form>
          </div>
          </div>
          <div id="mySidenav16" class="sidenav">
            <a href="javascript:void(0)" class="clbtn" onclick="Sideclose16()">&times;</a>
            <div class="overlay-content">
              <form action="upload.php" method="post" enctype="multipart/form-data">
              <input type="text" name="course" id="course" placeholder="Course_Code" /><br> 
              <input align="center" type="file" name="file" id="file" /><br>
              <input type="submit" name="submit" value="submit" id="submit"/>
              
              </form>
            </div>
            </div>
            <div id="mySidenav36" class="sidenav">
              <a href="javascript:void(0)" class="clbtn" onclick="Sideclose36()">&times;</a>
              <div class="overlay-content">

                 <a href="#">09-10:</a>
                <a href="#">10-11</a>
                <a href="#">11-12</a>
                <a href="#">12-01</a>
                <a href="#">01-02</a>
                <a href="#">02-03</a>
                <a href="#">03-04</a>
                <a href="#">04-05</a>
              </div>
              </div>
              <div id="mySidenav37" class="sidenav">
                <a href="javascript:void(0)" class="clbtn" onclick="Sideclose37()">&times;</a>
                <div class="overlay-content">

                   <a href="#">09-10:</a>
                  <a href="#">10-11</a>
                  <a href="#">11-12</a>
                  <a href="#">12-01</a>
                  <a href="#">01-02</a>
                  <a href="#">02-03</a>
                  <a href="#">03-04</a>
                  <a href="#">04-05</a>
                </div>
                </div>
                <div id="mySidenav38" class="sidenav">
                  <a href="javascript:void(0)" class="clbtn" onclick="Sideclose38()">&times;</a>
                  <div class="overlay-content">

                     <a href="#">09-10:</a>
                    <a href="#">10-11</a>
                    <a href="#">11-12</a>
                    <a href="#">12-01</a>
                    <a href="#">01-02</a>
                    <a href="#">02-03</a>
                    <a href="#">03-04</a>
                    <a href="#">04-05</a>
                  </div>
                  </div>
                  <div id="mySidenav39" class="sidenav">
                    <a href="javascript:void(0)" class="clbtn" onclick="Sideclose39()">&times;</a>
                    <div class="overlay-content">

                       <a href="#">09-10:</a>
                      <a href="#">10-11</a>
                      <a href="#">11-12</a>
                      <a href="#">12-01</a>
                      <a href="#">01-02</a>
                      <a href="#">02-03</a>
                      <a href="#">03-04</a>
                      <a href="#">04-05</a>
                    </div>
                    </div>
                    <div id="mySidenav40" class="sidenav">
                      <a href="javascript:void(0)" class="clbtn" onclick="Sideclose40()">&times;</a>
                      <div class="overlay-content">

                         <a href="#">09-10:</a>
                        <a href="#">10-11</a>
                        <a href="#">11-12</a>
                        <a href="#">12-01</a>
                        <a href="#">01-02</a>
                        <a href="#">02-03</a>
                        <a href="#">03-04</a>
                        <a href="#">04-05</a>
                      </div>
                      </div>
                      <div id="mySidenav41" class="sidenav">
                        <a href="javascript:void(0)" class="clbtn" onclick="Sideclose41()">&times;</a>
                        <div class="overlay-content">

                           <a href="#">09-10:</a>
                          <a href="#">10-11</a>
                          <a href="#">11-12</a>
                          <a href="#">12-01</a>
                          <a href="#">01-02</a>
                          <a href="#">02-03</a>
                          <a href="#">03-04</a>
                          <a href="#">04-05</a>
                        </div>
                        </div>
                        <div id="mySidenav42" class="sidenav">
                          <a href="javascript:void(0)" class="clbtn" onclick="Sideclose42()">&times;</a>
                          <div class="overlay-content">

                             <a href="#">09-10:</a>
                            <a href="#">10-11</a>
                            <a href="#">11-12</a>
                            <a href="#">12-01</a>
                            <a href="#">01-02</a>
                            <a href="#">02-03</a>
                            <a href="#">03-04</a>
                            <a href="#">04-05</a>
                          </div>
                          </div>
                          <div id="mySidenav43" class="sidenav">
                            <a href="javascript:void(0)" class="clbtn" onclick="Sideclose43()">&times;</a>
                            <div class="overlay-content">

                               <a href="#">09-10:</a>
                              <a href="#">10-11</a>
                              <a href="#">11-12</a>
                              <a href="#">12-01</a>
                              <a href="#">01-02</a>
                              <a href="#">02-03</a>
                              <a href="#">03-04</a>
                              <a href="#">04-05</a>
                            </div>
                            </div>
                            <div id="mySidenav44" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="Sideclose44()">&times;</a>
                              <div class="overlay-content">
                                <form action="#" name="StudentRegistration" onSubmit="return(validate());">

                              <table cellpadding="4" width="50%" bgcolor="transparent"  align="center"

                                cellspacing="3">


                              <tr>

                                <td colspan=2>

                                <center><font size=7><b>Course Registration Form</b></font></center>

                                </td>

                                </tr>

                              <tr>

                                <td><h3><font color="white">Name</font></h3></td>

                                <td margin-left="50px"><input type=text name=textnames id="textname" size="50"></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">Father Name</font></h3></td>

                                <td><input type="text" name="fathername" id="fathername"

                                size="50"></td>

                                </tr>

                                <tr>

                                <td><h3><font color="white">Postal Address</font></h3></td>

                                <td><input type="text" name="paddress" id="paddress" size="50"></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">Personal Address</font></h3></td>

                                <td><input type="text" name="personaladdress"

                                id="personaladdress" size="50"></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">Sex</font></h3></td>

                                <td><input type="radio" name="sex" value="male" size="10"><h3><font color="white">Male</h3></font>

                                <input type="radio" name="sex" value="Female" size="10"><h3><font color="white">Female</h3></font></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">State</font></h3></td>

                                <td><select name="State">

                                <option value="-1" selected><h3><font color="black">Select Where You Want to do this Course</font></h3></option>

                                <option value="New Delhi"><h3><font color="black">NEW DELHI</font></h3></option>

                                <option value="Mumbai"><h3><font color="black">MUMBAI</font></h3></option>

                                <option value="Goa"><h3><font color="black">GOA</font></h3></option>

                                <option value="Patna"><h3><font color="black">PATNA</font></h3></option>

                                </select></td>

                                </tr>

                                <tr>

                                <td><h3><font color="white">PinCode</font></h3></td>

                                <td><input type="text" name="pincode" id="pincode" size="50"></td>


                              </tr>

                                <tr>

                                <td><h3><font color="white">Email Id</font></h3></td>

                                <td><input type="text" name="emailid" id="emailid" size="50"></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">DOB</font></h3></td>

                                <td><input type="text" name="dob" id="dob" size="50"></td>

                                </tr>


                              <tr>

                                <td><h3><font color="white">Mobile No</font></h3></td>

                                <td><input type="text" name="mobileno" id="mobileno" size="50"></td>

                                </tr>

                                <tr>

                                <td><input type="reset"></td>

                                <td colspan="4"><input type="submit" value="Submit Form" /></td>

                                </tr>

                                </table>

                                </form>


                              </div>
                            </div>
                            <div id="mySidenav53" class="sidenav">
                              <a href="javascript:void(0)" class="clbtn" onclick="Sideclose53()">&times;</a>
                              <div class="overlay-content">

                                 <a href="#" onclick="Sideopen26();">Practice Exam-1</a>
                                <a href="#" onclick="Sideopen26();">Practice Exam-2</a>
                                <a href="#" onclick="Sideopen26();">Practice Exam-3</a>
                                <a href="#" onclick="Sideopen26();">Practice Exam-4</a>
                                <a href="#" onclick="Sideopen26();">Practice Exam-5</a>
                                <a href="#" onclick="Sideopen26();">Practice Exam-6</a>
                              </div>
                            </div>
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="images/ums_logo.png" width="250px" style="margin-left:-300px"></img></a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">Details</a> </li>
          <li> <a class="page-scroll" href="#skills">Attendence</a> </li>
          <li> <a class="page-scroll" href="#resume">Time Table</a> </li>
          <li> <a class="page-scroll" href="#" onclick="openNav()">LMS</a></li>
          <li> <a class="page-scroll" href="logout.php"><font color="black"><B>Log Out</B></font></a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <?php

        $im = "SELECT Images from users where Reg_No = '$login_session'";
        $res = mysqli_query($db,$im);
        while ($rows=mysqli_fetch_array($res)) {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows[0] ).'"/>';
        echo '<p></p>';
        }
        
        ?>
      </div>
      <div>
        <div>
          <iframe src="about.php" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;"></iframe>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Attendence</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
        <h4>HTML</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
        <h4>C++</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>PEL</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>ECE</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
        <h4>MEC</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
        <h4>MTH</h4>
      </div>
    </div>
  </div>
</div>

<!-- Achievements Section -->
<div id="achievements" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Some Stats</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
        <div class="achievement-box"> <span class="count"><font color="white">8.5</font></span>
          <h4>CGPA</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
        <div class="achievement-box"> <span class="count"><font color="white">8.32</font></span>
          <h4>TGPA</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
        <div class="achievement-box"> <span class="count"><font color="white">83</font></span>
          <h4>Total Attendence</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
        <div class="achievement-box"> <span class="count"><font color="white">25</font></span>
          <h4>Assignments</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Resume Section -->
<div id="resume" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Time-Table</h2>
      <hr>
    </div>
     <iframe src="timetable.php" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="height:200px;width:100%;border:none;overflow:hidden;" scrolling="no"></iframe>
  </div>

</div>
<script>
function openNav() {
    document.getElementById("mynav").style.width = "25%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav1").style.width = "0";
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("mySidenav3").style.width = "0";
  document.getElementById("mySidenav4").style.width = "0";
  document.getElementById("mySidenav5").style.width = "0";
  document.getElementById("mySidenav6").style.width = "0";
  document.getElementById("mySidenav8").style.width = "0";
  document.getElementById("mySidenav9").style.width = "0";
  document.getElementById("mySidenav10").style.width = "0";
  document.getElementById("mySidenav11").style.width = "0";
  document.getElementById("mySidenav16").style.width = "0";
  document.getElementById("mySidenav26").style.width = "0";
  document.getElementById("mySidenav36").style.width = "0";
  document.getElementById("mySidenav37").style.width = "0";
  document.getElementById("mySidenav38").style.width = "0";
  document.getElementById("mySidenav39").style.width = "0";
  document.getElementById("mySidenav40").style.width = "0";
  document.getElementById("mySidenav41").style.width = "0";
  document.getElementById("mySidenav42").style.width = "0";
  document.getElementById("mySidenav43").style.width = "0";
  document.getElementById("mySidenav44").style.width = "0";
  document.getElementById("mySidenav53").style.width = "0";
    document.getElementById("mynav").style.width = "0%";
}
function Sideopen() {
  document.getElementById("mySidenav1").style.width = "0";
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("mySidenav3").style.width = "0";
  document.getElementById("mySidenav4").style.width = "0";
  document.getElementById("mySidenav5").style.width = "0";
  document.getElementById("mySidenav6").style.width = "0";
  document.getElementById("mySidenav8").style.width = "0";
  document.getElementById("mySidenav9").style.width = "0";
  document.getElementById("mySidenav10").style.width = "0";
  document.getElementById("mySidenav11").style.width = "0";
  document.getElementById("mySidenav16").style.width = "0";
  document.getElementById("mySidenav26").style.width = "0";
  document.getElementById("mySidenav36").style.width = "0";
  document.getElementById("mySidenav37").style.width = "0";
  document.getElementById("mySidenav38").style.width = "0";
  document.getElementById("mySidenav39").style.width = "0";
  document.getElementById("mySidenav40").style.width = "0";
  document.getElementById("mySidenav41").style.width = "0";
  document.getElementById("mySidenav42").style.width = "0";
  document.getElementById("mySidenav43").style.width = "0";
  document.getElementById("mySidenav44").style.width = "0";
  document.getElementById("mySidenav53").style.width = "0";
    document.getElementById("mySidenav").style.width = "25%";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function Sideclose() {
  document.getElementById("mySidenav8").style.width = "0";
  document.getElementById("mySidenav9").style.width = "0";
  document.getElementById("mySidenav10").style.width = "0";
  document.getElementById("mySidenav11").style.width = "0";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
  function Sideopen1() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav2").style.width = "0";
      document.getElementById("mySidenav3").style.width = "0";
      document.getElementById("mySidenav4").style.width = "0";
      document.getElementById("mySidenav5").style.width = "0";
      document.getElementById("mySidenav6").style.width = "0";
      document.getElementById("mySidenav8").style.width = "0";
      document.getElementById("mySidenav9").style.width = "0";
      document.getElementById("mySidenav10").style.width = "0";
      document.getElementById("mySidenav11").style.width = "0";
      document.getElementById("mySidenav16").style.width = "0";
      document.getElementById("mySidenav26").style.width = "0";
      document.getElementById("mySidenav36").style.width = "0";
      document.getElementById("mySidenav37").style.width = "0";
      document.getElementById("mySidenav38").style.width = "0";
      document.getElementById("mySidenav39").style.width = "0";
      document.getElementById("mySidenav40").style.width = "0";
      document.getElementById("mySidenav41").style.width = "0";
      document.getElementById("mySidenav42").style.width = "0";
      document.getElementById("mySidenav43").style.width = "0";
      document.getElementById("mySidenav44").style.width = "0";
      document.getElementById("mySidenav53").style.width = "0";
      document.getElementById("mySidenav2").style.width = "0";
      document.getElementById("mySidenav3").style.width = "0";
      document.getElementById("mySidenav1").style.width = "25%";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  function Sideclose1() {
      document.getElementById("mySidenav1").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
    function Sideopen2() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav1").style.width = "0";
      document.getElementById("mySidenav3").style.width = "0";
      document.getElementById("mySidenav4").style.width = "0";
      document.getElementById("mySidenav5").style.width = "0";
      document.getElementById("mySidenav6").style.width = "0";
      document.getElementById("mySidenav8").style.width = "0";
      document.getElementById("mySidenav9").style.width = "0";
      document.getElementById("mySidenav10").style.width = "0";
      document.getElementById("mySidenav11").style.width = "0";
      document.getElementById("mySidenav16").style.width = "0";
      document.getElementById("mySidenav26").style.width = "0";
      document.getElementById("mySidenav36").style.width = "0";
      document.getElementById("mySidenav37").style.width = "0";
      document.getElementById("mySidenav38").style.width = "0";
      document.getElementById("mySidenav39").style.width = "0";
      document.getElementById("mySidenav40").style.width = "0";
      document.getElementById("mySidenav41").style.width = "0";
      document.getElementById("mySidenav42").style.width = "0";
      document.getElementById("mySidenav43").style.width = "0";
      document.getElementById("mySidenav44").style.width = "0";
      document.getElementById("mySidenav53").style.width = "0";
        document.getElementById("mySidenav2").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose2() {
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen3() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
          document.getElementById("mySidenav3").style.width = "25%";
          document.getElementById("main").style.marginLeft = "250px";
          document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }
      function Sideclose3() {
          document.getElementById("mySidenav3").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.body.style.backgroundColor = "white";
        }
      function Sideopen4() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav4").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose4() {
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen8() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav8").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose8() {
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen9() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav9").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose9() {
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen10() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav10").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose10() {
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen11() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav11").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose11() {
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen26() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav26").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose26() {
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen16() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav16").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose16() {
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen36() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav36").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose36() {
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen37() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav37").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose37() {
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen38() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav38").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose38() {
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen39() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav39").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose39() {
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen40() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav40").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose40() {
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen41() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav41").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose41() {
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen42() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav42").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose42() {
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen43() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav43").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose43() {
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen5() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav5").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose5() {
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen6() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav6").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose6() {
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen44() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav53").style.width = "0";
            document.getElementById("mySidenav44").style.width = "100%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose44() {
        document.getElementById("mySidenav44").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
      function Sideopen53() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav1").style.width = "0";
        document.getElementById("mySidenav2").style.width = "0";
        document.getElementById("mySidenav3").style.width = "0";
        document.getElementById("mySidenav4").style.width = "0";
        document.getElementById("mySidenav5").style.width = "0";
        document.getElementById("mySidenav6").style.width = "0";
        document.getElementById("mySidenav8").style.width = "0";
        document.getElementById("mySidenav9").style.width = "0";
        document.getElementById("mySidenav10").style.width = "0";
        document.getElementById("mySidenav11").style.width = "0";
        document.getElementById("mySidenav16").style.width = "0";
        document.getElementById("mySidenav26").style.width = "0";
        document.getElementById("mySidenav36").style.width = "0";
        document.getElementById("mySidenav37").style.width = "0";
        document.getElementById("mySidenav38").style.width = "0";
        document.getElementById("mySidenav39").style.width = "0";
        document.getElementById("mySidenav40").style.width = "0";
        document.getElementById("mySidenav41").style.width = "0";
        document.getElementById("mySidenav42").style.width = "0";
        document.getElementById("mySidenav43").style.width = "0";
        document.getElementById("mySidenav44").style.width = "0";
            document.getElementById("mySidenav53").style.width = "25%";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function Sideclose53() {
        document.getElementById("mySidenav53").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
</script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/validate.js"></script>


</body>
</html>
