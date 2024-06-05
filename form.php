<!DOCTYPE html>
<html>
    <head>
        <title>Adding a User</title>
</head>
<body>
    <h1>A form to get a user's information.</h1>
    <form action="form.php" method="POST">
        <label for="id">ID: </label>
        <input type="number" id="id" name="id" required><br>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email" required><br>
        <label for="age">Age: </label/>
        <input type="number" id="age" name="age" required><br>
        <input type="submit" value="Submit">
        

    </form>
    <?php
    include('includes/db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $mysql = "INSERT INTO people (id, name, email, age) VALUES ('$id', '$name', '$email', '$age')";

        if ($conn->query($mysql) === TRUE) {
            echo "User information added successfully!";
        } else {
            echo "Error: " . $mysql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <br>
    <a href="home.php">Go to Homepage</a>
</body>
</html>