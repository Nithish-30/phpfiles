<?php
function decrypt($encpassdb, $userpass)
{
    return $encpassdb;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli('localhost', 'root', '', 'practice');
    if (!$conn) {
        die("Connection error:" . mysqli_connect_error());
    }

    $username = $_POST['username'];

    $sql = "SELECT password FROM enc WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
        $row=$result->fetch_assoc();
        $encpassdb=$row['password'];
        $userpass=$_POST['upassword'];

        $decryptedpassword=decrypt($encpassdb, $userpass);

        if($decryptedpassword && password_verify($userpass, $encpassdb)){
            echo "Login Successfully";
        }
        else{
            echo "Invalid username or password";
        }
    }
    else{
        echo "Invalid username or password change";
    }

}
?>

<!-- HTML form -->
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="upassword" placeholder="Password" required><br>
    <input type="submit" value="Login">
</form>