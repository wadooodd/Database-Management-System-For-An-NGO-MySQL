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
    // Sid
    // Name
    // UPDATE student SET Name='Doe' WHERE Sid=1113
    $sql = "UPDATE student SET Name = ".$_POST["Name"]." WHERE Sid=".$_POST["Sid"];

    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully";
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>