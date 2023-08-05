<?php

$host ='localhost';
$user ='root';
$password ='';
$database ='registrasimhs';


$con = mysqli_connect($host, $user,$password,$database);
if ($con) {
    // echo "Connection Success";
} else{
    die('Failed connection: ' . mysqli_connect_error());

}

mysqli_select_db($con, $database)

?>