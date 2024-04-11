<!DOCTYPE html>
<html>
<head>
    <title>Get Users</title>
</head>
<body>
    <form method="GET" action="">
        <label for="query">Enter First Name:</label>
        <input type="text" id="query" name="query">
        <input type="submit" value="Search">
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Active</th>
        </tr>
        <?php
        // Establish connection to the database
        $servername = "localhost";
        $username = "root";
        $password = "your_password";
        $dbname = "your_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if(isset($_GET['query'])) {
            $query = $_GET['query'];
            $sql = "SELECT * FROM users WHERE firstname = '$query' AND active = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["active"]."</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>0 results found</td></tr>";
            }
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
