
<!DOCTYPE html>
<html>

<head>
	<title>Insert Caretaker Information</title>
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
$txtcaretakerID = $_POST['caretakerid'];
$txtcaretakername = $_POST['caretakername'];
$txtguardianid = $_POST['guardianid'];
$txtparentid = $_POST['parentid'];
$txtaddress = $_POST['address'];
$txtmnumber = $_POST['mnumber'];
$txthphone = $_POST['hphone'];
$txtcnic = $_POST['cnic'];
$txtemail = $_POST['email'];
$txtstaffmember = $_POST['staffmember'];
$txtfeeid = $_POST['feeid'];
$txtnumchild = $_POST['numchild'];
$txtsid = $_POST['sid'];
$txtrelation = $_POST['relation'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `caretaker`(`Caretakerid`,`CaretakerName`,`Guardianid`,`Parentid`,`address`,`number`,`phone`,`cnic`,`email`,`staff_member`,`Feeid`,`no_of_childern`,`Sid`,`Relation`) VALUES ('$txtcaretakerID', '$txtcaretakername','$txtguardianid','$txtparentid','$txtaddress', '$txtmnumber', '$txthphone', '$txtcnic', '$txtemail', '$txtstaffmember','$txtfeeid','$txtnumchild','$txtsid','$txtrelation')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$txtcaretakerID\n$txtcaretakername\n$txtguardianid\n$txtparentid\n$txtaddress\n$txtmnumber\n$txthphone\n$txtcnic\n$txtemail\n$txtstaffmember\n$txtfeeid\n$txtnumchild\n$txtsid\n$txtrelation\n ");
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




