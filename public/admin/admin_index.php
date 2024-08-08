<?php include "../../resources/db.php";
 include "includes/header.php";
include "includes/top-nav.php";
?>
<?php 
if(!isset($_SESSION['username']) ) {
    redirect("index.php");
} ?>



<?php include "includes/footer.php";?>