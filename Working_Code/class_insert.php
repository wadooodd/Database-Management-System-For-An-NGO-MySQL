
<!DOCTYPE html>
<html>

<head>
	<title>Insert Class Information</title>
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
$txtclassid = $_POST['classid'];
$txtsession = $_POST['session'];
$txtclassname = $_POST['classname'];
$txtsection = $_POST['section'];
$txtsessionid = $_POST['sessionid'];
$txtsid = $_POST['studentid'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `class`(`Classid`,`Session_name`,`Class_name`,`Sections`,`sessionid`,`Sid`) VALUES ('$txtclassid', '$txtsession', '$txtclassname', '$txtsection','$txtsessionid','$txtsid')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$txtclassid\n$txtsession\n$txtclassname\n$txtsection\n$txtsessionid\n$txtsid\n");
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
