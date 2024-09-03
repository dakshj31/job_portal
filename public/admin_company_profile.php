<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 
/*** Companies profile update ***/
if (isset($_GET['id'])) {

    $query = query("SELECT * FROM user WHERE user_id =" . ($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {
        
    }
}
?>



<?php include "../resources/templates/front/footer.php"; ?>