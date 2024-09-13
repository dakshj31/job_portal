<?php include "../resources/db.php"; 

//========REJECT JOB APPLICATION============//

if(isset($_GET['id'])) {

    if(isset($_GET['job_id'])) {

        $query = query("SELECT * FROM application WHERE user_id =" . escape_string($_GET['id']));
        confirm($query);

        $job_id = $_GET['job_id'];

        while ($orw = fetch_array($query)) {

            $comapny_id = $row['company_id'];
            $status = 'Rjected';

            $reject_query = "UPDATE application SET status = '{$status}' ";
            $reject_query .= "WHERE job_id = '{$job_id}' AND comapny_id = '{$company_id} AND user_id = '{$_GET['id']}' ";
            $query = query($reject_query);
            confirm($query);

            set_message("Application rejected");
            redirect("candidate_details.php?id={$_GET['id']}&job_id={$_GET['job_id']}");
        }

    }
}