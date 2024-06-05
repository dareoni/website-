<!DOCTYPE html>
<html>
<head>
    <title>View the Available Users</title>
</head>
<body>
    <h1>View the list of users</h1>
    <?php
    include('includes/db.php');

    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);
    if ($result-> num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                </tr>";
        while($row = result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
    $conn->close();
    ?>
    <br>
    <a href="home.php">Go to homepage</a>
</body>
</html>