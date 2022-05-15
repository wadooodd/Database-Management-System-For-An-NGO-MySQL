
<!DOCTYPE html>
<html>

<head>
	<title>Insert Student Information</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "ngo");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// get the post records
$txtStudentID = $_POST['studentid'];
$txtOrderNumber = $_POST['ordernumber'];
$txtStudentName = $_POST['studentname'];
$txtAge = $_POST['studentage'];
$txtParentID = $_POST['parentid'];
$txtCourseID = $_POST['courseid'];
$txtClassID = $_POST['classid'];
$txtCaretakerID = $_POST['caretakerid'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `student` (`Sid`, `OrderNumber`, `Name`, `Age`, `photo`,`Parentid`,`Courseid`,`Classid`,`Caretakerid`) VALUES ('$txtStudentID', '$txtOrderNumber', '$txtStudentName', '$txtAge',' ','$txtParentID','$txtCourseID','$txtClassID','$txtCaretakerID')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$txtStudentID\n $txtOrderNumber\n "
				. "$txtStudentName\n $txtAge\n $txtParentID\n "
                . "$txtCourseID\n $txtClassID\n $txtCaretakerID ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
