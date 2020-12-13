<?php
    $employeeId = $_POST['employee-id'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $employeeAddress = $_POST['address'];

    $host = "localhost";
    $dbUsername = "pmauser";
    $dbPassword = "password_here";
    $dbName = "inventory_management_system";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if(mysqli_connect_error()) {
        die('Connection Error: '.mysqli_connect_error());
    } else {
        $SELECT = "SELECT emp_id FROM EMPLOYEE WHERE emp_id = ? Limit 1";
        $INSERT = "INSERT INTO employee (emp_id, first_name, last_name, emp_address) VALUES(?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $employeeId);
        $stmt->execute();
        $stmt->bind_result($employeeId);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0) {
            $stmt->close();

            $stmt =  $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $employeeId, $firstName, $lastName, $employeeAddress);
            $stmt->execute();
            echo "New Record Inserted";
        } else {
            echo "Test";
        }
        $stmt->close();
        $conn->close();
    }
?>