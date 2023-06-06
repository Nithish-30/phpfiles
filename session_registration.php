<?php
session_start();

if (isset($_POST['submit'])) {
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];

    if(empty($username1)||empty($password1)){
        echo "Please enter username and password";
    }
    else{
        $_SESSION['uname']=$username1;
        $_SESSION['pass']=$password1;
        header("Location:session_login.php");
        exit();
    }
    
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