<?php 

ob_start();

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'job_db');

include "functions.php";

