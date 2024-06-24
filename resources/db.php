<?php 

ob_start();

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'job_db');
// if(!$connection) {
//     die("Database connection failed: " . mysqli_error($connection));
// }

include "functions.php";

