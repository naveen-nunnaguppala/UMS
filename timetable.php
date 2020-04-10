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
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Timings</th>
								<th class="column2">Monday</th>
								<th class="column3">Tuesday</th>
								<th class="column4">Wednesday</th>
								<th class="column5">Thursday</th>
								<th class="column6">Friday</th>
								<th class="column7">Saturday</th>
							</tr>
						</thead>
						<tbody>
								
											<?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * from users RIGHT JOIN timetable ON (users.Section = timetable.Section) WHERE timetable.Section='$login_section' AND users.Reg_No='$login_session' ORDER BY ordering DESC";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        	 	echo "<tr>";
        		echo "<td class='column1'>" . $row['Timings'] . "</td>";
                echo "<td class='column1'>" . $row['Monday'] . "</td>";
                echo "<td class='column1'>" . $row['Tuesday']. "</td>";
                echo "<td class='column1'>" . $row['Wednesday'] . "</td>";
                echo "<td class='column1'>" . $row['Thursday'] . "</td>";   
                echo "<td class='column1'>" . $row['Friday'] . "</td>";
                echo "<td class='column1'>" . $row['Saturday'] . "</td>";
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