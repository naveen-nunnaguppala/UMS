<?php
   include('test1.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select Reg_No from users where Reg_No = '$user_check' ");
   $ses_sq = mysqli_query($db,"select Section from users where Reg_No = '$user_check' ");
   $ses_s = mysqli_query($db,"select Roll_No from users where Reg_No = '$user_check' ");
   $ses = mysqli_query($db,"select First_Name from users where Reg_No = '$user_check' ");
   $se = mysqli_query($db,"select Last_Name from users where Reg_No = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $ro = mysqli_fetch_array($ses_sq,MYSQLI_ASSOC);
   $roll= mysqli_fetch_array($ses_s,MYSQLI_ASSOC);
   $first= mysqli_fetch_array($ses,MYSQLI_ASSOC);
   $last= mysqli_fetch_array($se,MYSQLI_ASSOC);
   $login_session = $row['Reg_No'];
   $login_section = $ro['Section'];
   $login_roll = $roll['Roll_No'];
   $login_first = $first['First_Name'];
   $login_last = $last['Last_Name'];
   if(!isset($_SESSION['login_user'])){
      header("Location: login.php");
      die();
   }
?>
