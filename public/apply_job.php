<?php include "../resources/db.php"; 

//========= APPLY JOB ============//

if(isset($_GET['id'])) {

    $jobs_data_query = query("SELECT * FROM jobs WHERE id =" . escape_string($_GET['id']));
    confirm($jobs_data_query);

    while ($row = fetch_array($jobs_data_query)) {
        
        $job_id = $_GET['id'];
        $company_id = $row['company_id'];
    }

    $user_id =  $_SESSION['user_id'];
    $username = $_SESSION['username'];

    $job_apply_query = "INSERT INTO apllication( job_id , user_id , company_id ) VALUES( '{$job_id}' , '{$user_id}' , '{$company_id}' ) ";
    $query = query($job_apply_query);
    confirm($query);

    set_message("You applied for this job");
    redirect("admin/candidate-index.php?id={$user_id}");
}