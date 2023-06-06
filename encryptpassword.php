<?php
function encrypt($password)
{
    $pwdenc = password_hash($password, PASSWORD_DEFAULT);
    return $pwdenc;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pwdenc = encrypt($password);

    $conn = new mysqli('localhost', 'root', '', 'practice');
    if (!$conn) {
        die("Connection error:" . mysqli_connect_error());
    }
    $sql = "INSERT INTO enc VALUES('$username', '$pwdenc')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error".mysqli_error($conn);
    }
}
?>
<!-- HTML form -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" name="submit" value="Register">
</form>