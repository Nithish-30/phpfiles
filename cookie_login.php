<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($_COOKIE['uname']===$username && $_COOKIE['pass']===$password){
        echo "Loggedin Successfully";
    }
    else{
        echo "Invalid";
    }
    exit();
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