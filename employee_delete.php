<?php

    $servername = "localhost";
    $username = "pmauser";
    $password = "password_here";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "inventory_management_system");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $employeeId = $_POST['employee_id'];

    $sql = "DELETE FROM employee WHERE emp_id='$employeeId'";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>