<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($_SESSION['uname']===$username && $_SESSION['pass']===$password){
        echo "loggedin Successfully";
        exit();
    }
    else{
        echo "Invalid username or password";
    }
}
?>
<form method="POST" action="">
<label><h1>Login page</h1></label>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" name="submit" value="login">
</form>