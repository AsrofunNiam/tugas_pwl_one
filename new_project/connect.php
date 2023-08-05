<?php

$con = mysqli_connect('localhost', 'root','','registrasimhs');
if ($con) {
    echo "Connection Success";
} else{
    die('Failed connection: ' . mysqli_connect_error());

}

?>