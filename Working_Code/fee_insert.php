
<!DOCTYPE html>
<html>

<head>
	<title>Insert Fees Information</title>
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
$txtfeeid = $_POST['feeid'];
$txtreason = $_POST['reason'];
$txtfee = $_POST['fee'];
$txtdiscount = $_POST['discount'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `fee`(`Feeid`,`Reason`,`Fee_amount`,`discount_amount`) VALUES ('$txtfeeid', '$txtreason', '$txtfee', '$txtdiscount')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$txtfeeid\n$txtreason\n$txtfee\n$txtdiscount\n");
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
