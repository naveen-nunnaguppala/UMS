<!DOCTYPE html>
<html lang="en">
<?php

include('session.php');

?>
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/tableutil.css">
	<link rel="stylesheet" type="text/css" href="css/tablemain.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		
			<div class="wrap-table100">
				<div class="table100">
					
		<?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM users where Reg_No = $login_session";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table align = 'center'>";
            echo "<p>";

            echo "</p>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<th>Registration No:</th>";
                echo "<td>" . $row['Reg_No'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th >Name:</th>";
                echo "<td>" . $row['First_Name']." ".$row['Last_Name'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Section:</th>";
                echo "<td>" . $row['Section'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>Roll No:</th>";
                echo "<td>" . $row['Roll_No'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
          ?>

				</div>
			</div>
		
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/tablemain.js"></script>

</body>
</html>