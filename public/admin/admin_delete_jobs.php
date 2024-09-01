<?php include "../../resources/db.php";

if (isset($_GET['id'])) {

    $query = query("DELETE FROM jobs WHERE id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Job Deleted !");
    redirect("../admin_jobs.php");
}