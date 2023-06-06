<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    setcookie('uname', $username, time() +30);
    setcookie('pass', $password, time() +30);
    header("Location:cookie_login.php");
    exit();
}
?>

<form method="POST" action="">
    <label><h1>Registration page</h1></label>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" name="submit" value="Register">
</form>