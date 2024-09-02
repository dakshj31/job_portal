<?php include "../../resources/db.php";

/** Activate company **/

if (isset($_GET['id'])){

    $activate_company = "UPDATE user SET status = '0' ";
    $activate_company .= "WHERE user_id =" . escape_string($_GET['id']);
    $query = query($activate_company);
    confirm($query);

    set_message("You Activated this Company");
    redirect("../admin_companies.php");

}