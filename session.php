<?php
   include('test1.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select Reg_No from users where Reg_No = '$user_check' ");
   $ses_sq = mysqli_query($db,"select Section from users where Reg_No = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $ro = mysqli_fetch_array($ses_sq,MYSQLI_ASSOC);
   $login_session = $row['Reg_No'];
   $login_section = $ro['Section'];
   if(!isset($_SESSION['login_user'])){
      header("Location: login.php");
      die();
   }
?>
