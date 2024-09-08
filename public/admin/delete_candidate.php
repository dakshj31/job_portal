<?php include "../../resources/db.php";

if(isset($_GET['id'])) {

    $name_query = query("SELECT username FROM user WHERE user_id =" . escape_string($_GET['id']));
    confirm($name_query);

    while($row= fetch_array($name_query)) {
        
        $candidate_name  = $row['username'];

        $query = query("DELETE FROM user WHERE user_id =" . escape_string($_GET['id']) . " ");
        confirm($query);

        $candidate_query = query("DELETE FROM candidate WHERE name = '{$candidate_name}' ");
        confirm($candidate_query);

        set_message("Candidate Deleted");
        redirect("../admin_candidates.php");
        }
}