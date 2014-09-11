<?php
define('localhost', 'root');
define('username', 'root');
define('password', 'root');
define('database', 'Ruby');

class Database{
    function __construct() {
        $conn = mysqli_connect(localhost, username, password, database) or
        die('Something went wrong with RubyCMS' . mysqli_connect_errno());
    }
}
?>
