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
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $employeeAddress = $_POST['address'];

    $sql = "UPDATE employee SET first_name='$firstName', last_name='$lastName', emp_address='$employeeAddress' WHERE emp_id=$employeeId";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>