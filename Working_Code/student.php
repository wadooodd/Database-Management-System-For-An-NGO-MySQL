<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student s JOIN history h ON(h.Sid= s.Sid)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {
    ?>
    <!DOCTYPE html>
    <html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <table class="table">
            <thead>
                <th>student id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Parentid</th>
                <th>Courseid</th>
                <th>Classid</th>
                <th>Caretakerid</th>
                <th>Hid</th>
            </thead>
            <tbody>
            <tr class="table-primary">
                <td> <?php echo  $row["Sid"] ?></td>                        
                <td> <?php echo  $row["Name"] ?> </td>            
                <td> <?php echo  $row["Age"] ?></td>
                <td> <?php echo  $row["Parentid"] ?></td>
                <td> <?php echo  $row["Courseid"] ?></td>
                <td> <?php echo  $row["Classid"] ?></td>
                <td> <?php echo  $row["Caretakerid"] ?></td>
                <td> <?php echo  $row["Hid"] ?></td>
            </tr>
        </table>
    </html>

    <?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>