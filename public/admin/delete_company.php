<?php include "../../resources/db.php";

/*DELETE COMPANY BY ADMIN */
if (isset($_GET['id'])) {

    $query = query("DELETE FROM user WHERE user_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Company Deleted !");
    redirect("../admin_companies.php");
}
?>