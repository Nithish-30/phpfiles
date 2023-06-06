<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $self=$_SERVER['PHP_SELF'];
    echo $self;
    echo "<br>";
    $software=$_SERVER['SERVER_SOFTWARE'];
    echo $software;

    date_default_timezone_set('Asia/kolkata');
    $registrationTime = date('h:i:s a');
    $registrationDate = date('Y-m-d');

    $conn = new mysqli('localhost', 'root', '', 'practice');

    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users VALUES ('$username', '$password', '$ipAddress', '$registrationTime', '$registrationDate', '$browser')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
</head>

<body>
    <h2>Login Form</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>