<?php
include_once 'functions.php';
$user = new Users();
if($user->session()) {
    header('Location: homepage.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $reg = $user->register($_POST['username'], $_POST['password'],$_POST['email']);
    if($reg) {
        echo 'You have successfully registered <a href="login.php">Login here</a>';
    }else{
        echo 'Username or email is already taken, try again';
    }
}
?>
<html>
<form method="POST" action="register.php" name="register">
    Username: <input type="text" name="username"/><br>
    Password: <input type="password" name="password"/><br>
    E-mail: <input type="text" name="email"/><br>
    <input type="submit" value="Register"/>
</form>
</html>
