<?php include "../../resources/db.php";

/******Deactivate Candidate ********/

if (isset($_GET['id'])) {

    $deactivate_candidate = "UPDATE user SET status = '1' ";
    $deactivate_candidate .= "WHERE user_id =" . escape_string($_GET['id']);
    $query = query($deactivate_candidate);
    confirm($query);

    set_message("You Deactivated This Candidate");
    redirect("../admin_candidates.php");
}