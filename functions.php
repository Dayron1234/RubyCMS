<?php
include 'config.php';
class Users{
    public function __construct(){
        $db = new Database();
         }
    public function register($username, $password, $email)
    {
        $db = new Database();
        $password = SHA1($password);
        $check = mysqli_num_rows(mysqli_query(mysqli, "SELECT FROM users id WHERE username= '$username'"));
        if($check == 0) {
            $result = mysqli_query(mysqli, "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')");
            return true;
        }else{
            return false;
        }
    }
    public function login($username, $password){
        $password = SHA1($password);
        $result = mysqli_query(mysli, "SELECT FROM users WHERE username = '$username' AND password = '$password'");
        $user = mysqli_fetch_array($result);
        $no_rows = mysqli_num_rows($result);
        if ($no_rows == 1){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            return true;
        }
else{
    return false;
}
    }
    public function session(){
        return $_SESSION['login'];

    }
    public function logout(){
        $_SESSION['login'] = false;
        session_destroy();
    }
}
?>
