<? 

    $servername = "localhost";
    $username = "pmauser";
    $password = "password_here";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "inventory_management_system");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM EMPLOYEE";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["emp_id"]. "; Name: " . $row["first_name"]. " " . $row["last_name"]. "; Address: ". $row["emp_address"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>