<?php include "../../resources/db.php";

/** Deactivate company **/

if (isset($_GET['id'])){

    $deactivate_company = "UPDATE user SET status = '1' ";
    $deactivate_company .= "WHERE user_id =" . escape_string($_GET['id']);
    $query = query($deactivate_company);
    confirm($query);

    set_message("You Deactivated this Company");
    redirect("../admin_companies.php");

}