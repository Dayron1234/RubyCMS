<?php
/**
 * Created by PhpStorm.
 * User: Obrien
 * Date: 6/2/14
 * Time: 3:51 PM
 */
session_start();
include_once 'functions.php';
$user = new Users();
if($user->session()) {
    header('Location: homepage.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $user->login($_POST['username'], $_POST['password']);
    if($login) {
        header('Location: index.php');
    }else{
        print "Username or password is incorrect";
    }
}
?>
<form method="POST" action="" name="login">
    Username: <input type="text" name="username"/><br>
    Password: <input type="password" name="password"/><br>
    <input type="submit" value="Login"/>
</form>
