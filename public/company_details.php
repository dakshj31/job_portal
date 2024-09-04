<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 

/******GET COMPANY DATA ******/

if(isset($_GET['id'])) {

    $query = query("SELECT * FROM user user_id =" . escape_string($_GET['id']));
    confirm($query);

    while($row = fetch_array($query)) {
        
    }
}

?>


<?php include "../resources/templates/front/footer.php"; ?>