<?php
session_start();
include_once 'functions.php';
$user = new Users();
$id = $_SESSION['id'];
if(!$user->session()) {
    header('Location: index.php');
}
if($_GET['q'] == "logout") {
    $user->logout();
    header('Location: index.php');
}
?>
<h1>Welcome to RubyCMS!</h1>
<p>Although RubyCMS is in pre-alpha development will continue till the developer feels like the CMS is fully complete.
So expect a lot of bugs and please report any bugs to the developer. If you want to logout just click the link below.
Thanks for using RubyCMS, come back any time you want!</p>
<a href="?q=logout">Logout</a>
