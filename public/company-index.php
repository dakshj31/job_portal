<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 


if(!isset($_SESSION['username']) ) {
    redirect("index.php");
}

include "../resources/templates/front/footer.php";?>