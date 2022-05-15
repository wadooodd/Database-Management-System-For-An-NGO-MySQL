<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbproject";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT COUNT(Sid) student_count
    FROM student
    GROUP BY Classid";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        
        // output data of each row
        while($row = $result->fetch_assoc())
        {
           ?> 
            <!DOCTYPE html>
            <html>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
            <table class="table"> 
                <thead> 
                    student count 
                </thead> 
                <tr class="table-primary">
                    <td>class wise values = <?php echo $row["student_count"]; ?></td>
                </tr>
            </table>

           <?php
        }

    } 
    else
    {
    echo "0 results";
    }

    $conn->close();
    
?>