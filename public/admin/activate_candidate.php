<?php include "../../resources/db.php";

/** Activate Candidate **/

if (isset($_GET['id'])){

    $activate_candidate = "UPDATE user SET status = '0' ";
    $activate_candidate .= "WHERE user_id =" . escape_string($_GET['id']);
    $query = query($activate_candidate);
    confirm($query);

    set_message("You Activated this Candidate");
    redirect("../admin_candidates.php");

}