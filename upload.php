<?php


<?php

include "test1.php";
include "session.php";

if(isset($_POST['submit']))
			{
				if(empty($_POST['course']))
				{
					?>

					<script>window.alert("Enter the Course Code")</script>

					<?php
				}

				else

				{

					$course=$_POST['course'];
					$file=addslashes(S_FILES['file']['tmp_name']);
					$file=file_get_contents($file);
					$file=base64_encode($file);

					$query=mysqli_query($db,"INSERT INTO uploadedFiles(ID,Reg_No,Course_Code,UploadedFile) values ("",$login_session,$course,$file)") or die("Query Error");
					?>

					<script>window.alert("Record saved");</script>

					<?php
				}
			}

?>