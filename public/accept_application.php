<?php include "../resources/db.php"; 

//========ACCEPT JOB APPLICATION============//

if(isset($_GET['id'])) {

    if(isset($_GET['job_id'])) {

        $query = query("SELECT * FROM application WHERE user_id =" . escape_string($_GET['id']));
        confirm($query);

        $job_id = $_GET['job_id'];

        while ($orw = fetch_array($query)) {

            $company_id = $row['company_id'];
            $status = 'Accepted';

            $accept_query = "UPDATE application SET status = '{$status}' ";
            $acceptt_query .= "WHERE job_id = '{$job_id}' AND company_id = '{$company_id}' AND user_id = '{$_GET['id']}' ";
            $query = query($accept_query);
            confirm($query);

            set_message("Application accepted");
            redirect("candidate_details.php?id={$_GET['id']}&job_id={$_GET['job_id']}");
        }

    }
}