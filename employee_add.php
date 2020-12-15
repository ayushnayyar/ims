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
    echo "Connected successfully";

    $employeeId = $_POST['employee_id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $employeeAddress = $_POST['address'];

    $sql = "INSERT INTO employee (emp_id, first_name, last_name, emp_address) VALUES ('$employeeId', '$firstName', '$lastName', '$employeeAddress')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<a href='employee_edit.html'>Menu</a>";

    $conn->close();


    // echo $_POST['employee_id'];

    // $host = "localhost";
    // $dbUsername = "pmauser";
    // $dbPassword = "password_here";
    // $dbName = "inventory_management_system";

    // $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    // if(mysqli_connect_error()) {
    //     die('Connection Error: '.mysqli_connect_error());
    // } else {
        
    //     $SELECT = "SELECT emp_id FROM EMPLOYEE WHERE emp_id = ? Limit 1";
    //     $INSERT = "INSERT INTO employee (emp_id, first_name, last_name, emp_address) VALUES(?, ?, ?, ?)";

    //     $stmt = $conn->prepare($SELECT);
    //     $stmt->bind_param("s", $employeeId);
    //     $stmt->execute();
    //     $stmt->bind_result($employeeId);
    //     $stmt->store_result();
    //     $rnum = $stmt->num_rows;

    //     if($rnum == 0) {
    //         $stmt->close();

    //         $stmt =  $conn->prepare($INSERT);
    //         $stmt->bind_param("ssss", $employeeId, $firstName, $lastName, $employeeAddress);
    //         $stmt->execute();
    //         echo $_POST['employee_id'];
    //         echo "New Record Inserted";
    //     } else {
    //         echo "Test";
    //     }
    //     $stmt->close();
    //     $conn->close();
    // }
?>
