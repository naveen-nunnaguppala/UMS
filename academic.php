<!DOCTYPE html>
<html>
<?php

include("test1.php");

?>
<head>
	
	<meta charset="utf-8">
	<title>Files to download</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

</head>

<body>
	<p><br/></p>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>File</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
			<?php

if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM academicsyllabus";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        	 	echo "<tr>";
        		echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Course_Code'] . "</td>";
                echo "<td><a href=".$row['Path'].">Download</a></td>";
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
</body>


</html>