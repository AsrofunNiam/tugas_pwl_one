<?php
// $server   = '127.0.0.1';
// $username = 'root';
// $password = '';
// $database = 'mahasiswa';

$con = new mysqli('localhost', 'root','','test');
if ($con) {
    echo "Connection Success";
} else{
    die('Failed connection: ' . mysqli_connect_error());
}

?>