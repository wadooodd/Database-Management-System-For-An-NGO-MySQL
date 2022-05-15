
<!DOCTYPE html>
<html>

<head>
	<title>Insert Guardian Information</title>
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
$txtGuardianid = $_POST['Guardianid'];
$txtGender = $_POST['Gender'];
$txtReason_Absence = $_POST['Reason_Absence'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `guardian`(`Guardianid`,`Gender`,`Reason_Absence`) VALUES ('$txtGuardianid', '$txtGender', '$txtReason_Absence')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$txtGuardianid\n$txtGender\n$txtReason_Absence\n");
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
