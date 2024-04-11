<?php
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "lab_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['query'])) {
    $query = $_GET['query'];
    
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT id, username, email, firstname, lastname, active FROM users WHERE firstname = ? AND active = 1");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Active</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["active"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results found";
    }
    
    $stmt->close();
}

$conn->close();
?>
