
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $password;

    $conn = new mysqli('localhost', 'root', '', 'practice');
    if (!$conn) {
        die("Connection error:" . mysqli_connect_error());
    }
    
    // Retrieve the hashed password from the database for the given username
    $sql = "SELECT password FROM enc WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
        echo $storedPassword;
        $result=password_verify($password, $storedPassword);
        echo $result;
        // Verify the password
        if ($result) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" name="submit" value="login">
</form>
