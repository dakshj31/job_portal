<?php 


///******************Helper Function********************************///

function set_message($msg) {

    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message() {
    
    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);
        
    }
    }


function redirect($location){

    header("Location: $location ");
}

function query($sql){
global $connection;

return mysqli_query($connection, $sql);

}

function confirm($result) {
global $connection;

if(!$result) {
    die("QUERY FAILED" . mysqli_error($connection));
}
}

function escape_string($string) {
global $connection;

return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}

function IsLoggedIn()
{
    if (isset($_SESSION['username'])) {

        return true;
    } else {

        return false;
    }
}





    //=========================Front End Function=====================================//

    function login_user() {

        if(isset($_POST['login'])) {

            $username = escape_string($_POST['username']);
            $password = escape_string($_POST['password']);

            $loginquery = ("SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' ");
            $query = query($loginquery);
            confirm($query);

            while ($row = mysqli_fetch_array($query))  {

                $db_userid = $row['user_id'];
                $db_username = $row['username'];
                $db_password = $row['password'];
                $db_role = $row['role'];

        if($db_role == 'Admin') {
            if(mysqli_num_rows($query) == 0) {
                set_message("Your password or username is wrong");
                redirect("login.php");
            } else {
                $_SESSION['username'] = $db_username;
                $_SESSION['user_id'] = $db_userid;
                $_SESSION['role'] = $db_role;
                $_SESSION['password'] = $db_password;
                  redirect("admin/admin-index.php");
            } 
        } elseif ($db_role == 'Company') {
            if(mysqli_num_rows($query) == 0) {
                set_message("Your password or username is wrong");
                redirect("login.php");
            } else {
                $_SESSION['username'] = $db_username;
                $_SESSION['user_id'] = $db_userid;
                $_SESSION['role'] = $db_role;
                $_SESSION['password'] = $db_password;
                  redirect("admin/company-index.php");
            } 
        } elseif ($db_role == 'Candidate') {
            if(mysqli_num_rows($query) == 0) {
                set_message("Your password or username is wrong");
                redirect("login.php");
            } else {
                $_SESSION['username'] = $db_username;
                $_SESSION['user_id'] = $db_userid;
                $_SESSION['role'] = $db_role;
                $_SESSION['password'] = $db_password;
                  redirect("admin/candidate-index.php");
            } 
        }

        } 
    }

    }
    

    function send_message() {

        if(isset($_POST['submit'])) {

            $to        = "dakshjoshi1355@gmail.com";
            $from_name = $_POST['name'];
            $subject   = $_POST['subject'];
            $email     = $_POST['email'];
            $message   = $_POST['message'];
    
            $headers = "From: {$from_name} {$email}";
    
            $result = mail($to, $subject, $message, $headers);
    
            if(!$result) {
                set_message("Sorry we could not send your message");
                redirect("contact.php");
            } else {
                set_message("Your Message has been sent");
                redirect("contact.php");
            }
        }
    }

    // ============================ BACKEND FUNCTIONS========================= //

    function register_user(){

        global $connection;

        if (isset($_POST['register'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['user_type'];

            //move_uploaded_file($temp_image, "uploads/$image");


            $sql = "INSERT INTO user (username, email, password, role) VALUES ('{$username}', '{$email}', '{$password}', '{$role}')"; 
            $register_user_query = mysqli_query($connection, $sql);

            if($role == 'Candidate') {

                $candidate_query = "INSERT INTO candidate (name) VALUES ('{$username}' )";
                $query = query($candidate_query);
                confirm($query);
            }

            if(!$register_user_query) {
                        die("Query failed: " . mysqli_error($connection));
                     } else {
                         redirect("login.php");
                         set_message("Registration successful!");
                     }
        }

    }

    function candidate_profile_update() {

        if (isset($_POST['update'])) {

            $username = $_SESSION['username'];
            $description = $_POST['candidate_description'];
            $cv = $_FILES['file1']['name'];
            $temp_cv = $_FILES['file1']['tmp_name'];
            $knowledge = $_POST['candidate_knowledge'];
            $skills = $_POST['candidate_skills'];
            $education = $_POST['candidate_education'];
            $experience = $_POST['candidate_experience'];
            $image = $_FILES['file2']['name'];
            $temp_image = $_FILES['file2']['tmp_name'];
            
            move_uploaded_file($temp_cv, "candidate_cv/$cv");
            move_uploaded_file($temp_image, "uploads/$image");

            if(empty($image)) {

                $username = $_SESSION['username'];
                $query = query("SELECT * FROM user WHERE username ='{$username}' ");

                while ($row = fetch_array($query)) {
                   $image = $row['image'];
                }
            }

            $profile_query = "UPDATE candidate SET description = '{$description}', cv = '{$cv}', knowledge = '{$knowledge}', skills = '{$skills}', education = '{$education}', experience = '{$experience}', image = '{$image}' ";
            $profile_query .= "WHERE name = '{$username}' ";
            $query = query($profile_query);
            confirm($query);

            set_message("Your profile has been submitted");
            redirect("admin/candidate-index.php");
        }

    }

    function company_profile_update() {

        if (isset($_POST['update'])) {

            $description = $_POST['company_description'];
            $capacity = $_POST['company_employees'];
            $location = $_POST['company_location'];      

            $query = "UPDATE user SET description = '{$description}', capacity = '{$capacity}', location = '{$location}' ";
            $query .= "WHERE username = '{$_SESSION['username']}' ";
            $update_profile_query = query($query);
            confirm($update_profile_query);

            set_message("Your profile has been updated");
            redirect("admin/company-index.php");
        }
    }

    function add_jobs(){

        if(isset($_POST['submit'])){
            $company_id = $_SESSION['user_id'];
            $company_name = $_SESSION['username'];
            $title = $_POST['job_title'];
            $description = $_POST['job_description'];
            $vacancy = $_POST['job_vacancy'];
            $nature = $_POST['job_nature'];
            $knowledge = $_POST['job_knowledge'];
            $skills = $_POST['job_skills'];
            $education = $_POST['job_education'];
            $experience = $_POST['job_experience'];
            $salary = $_POST['job_salary'];
            $location = $_POST['job_location'];

           
            $query = query("INSERT INTO jobs( title , company_id , company_name , description , vacancy , nature , knowledge , skills, education , experience , salary , location) VALUES( '{$title}' , '{$company_id}' , '{$company_name}' , '{$description}' , '{$vacancy}' , '{$nature}' , '{$knowledge}' , '{$skills}' , '{$education}' , '{$experience}' , '{$salary}' , '{$location}') ");
            confirm($query);

            set_message("New job created");
            redirect("company-index.php");

        }
    }

    function update_profile_company_admin(){

        if(isset($_POST['update'])) {

            $company_id = $_GET['id'];
            $description = $_POST['company_description'];
            $capacity= $_POST['company_employees'];
            $location = $_POST['company_location'];

            $query = query("SELECT * FROM user WHERE user_id = '{$company_id}' ");
            while ($row = fetch_array($query)) {
                $company_name = $row['username'];
            }

            $query = "UPDATE user SET description = '{$description}', capacity = '{$capacity}', location = '{$location}' ";
            $query .= "WHERE user_id = '{$company_id}' ";
            $update_profile_query = query($query);
            confirm($update_profile_query);

            set_message("Company profile has been updated");
            redirect("admin_companies.php");
        }

    }

 
function update_candidate_profile_admin() {

    if(isset($_POST['update'])) {
        $candidate_id = $_GET['id'];
        $description = $_POST['candidate_description'];
        $cv = $_FILES['file1']['name'];
        $temp_cv = $_FILES['file1']['tmp_name'];
        $knowledge = $_POST['candidate_knowledge'];
        $skills = $_POST['candidate_skills'];
        $education = $_POST['candidate_education'];
        $experience = $_POST['candidate_experience'];
        $image = $_FILES['file2']['name'];
        $temp_image = $_FILES['file2']['tmp_name'];

        move_uploaded_file($temp_cv, "uploads/$cv");
        move_uploaded_file($temp_image, "uploads/$image");

        $query = query("SELECT * FROM user WHERE user_id = '{$candidate_id}' ");
        while ($row = fetch_array($query)) {
            $candidate_name = $row['username'];
        }

        $profile_update = "UPDATE candidate SET description = '{$description}' , cv = '{$cv}' , knowledge = '{$knowledge}' , skills = '{$skills}' , education = '{$education}' , experience = '{$experience}' , image = '{$image}' ";
        $profile_update .= "WHERE name = '{$candidate_name}' ";
        $query = query($profile_update);
        confirm($query);

        set_message("Profile Updated !");
        redirect("admin_candidates.php");
    }
}


    function get_jobs_company_admin()
    {

        $username = $_SESSION['username'];

        $query = query("SELECT * FROM jobs WHERE company_name = '{$username}' ");
        confirm($query);

        while ($row = fetch_array($query)) {

            $user_admin_job = <<<DELIMETER

<tr>
<td>{$row['id']}</td>
<td>{$row['title']}</td>
<td>{$row['company_name']}</td>
<td>{$row['description']}</td>
<td>&#8377;{$row['salary']}</td>
<td>{$row['location']}</td>
<td>
<div class="header-btn d-none d-lg-block">
<a href="job-detail.php?id={$row['id']}" class="">View</a>
</div>
</td>
<td>
<div class="header-btn d-none d-lg-block">
<a href="edit_jobs.php?id={$row['id']}" class="">Update</a>
</div>
</td>
<td>
<div class="header-btn d-none d-lg-block">
<a href="delete_jobs.php?id={$row['id']}" class="">Delete</a>
</div>
</td>

</tr>

DELIMETER;

echo $user_admin_job;

        }

    } 

    function update_jobs() {

        if(isset($_POST['update'])) {

        $title =  $_POST['job_title'];
        $description = $_POST['job_description'];
        $vacancy = $_POST['job_vacancy'];
        $nature = $_POST['job_nature'];
        $knowledge = $_POST['job_knowledge'];
        $skills = $_POST['job_skills'];
        $education = $_POST['job_education'];
        $experience = $_POST['job_experience'];
        $salary = $_POST['job_salary'];
        $location = $_POST['job_location'];

            $query = "UPDATE jobs SET title = '{$title}', description = '{$description}', vacancy = '{$vacancy}', nature = '{$nature}', knowledge = '{$knowledge}', skills = '{$skills}', education = '{$education}', experience = '{$experience}', salary = '{$salary}', location = '{$location}' ";
            $query .= "WHERE id =" . escape_string($_GET['id']);
            $update_job_query = query($query);
            confirm($update_job_query);

            set_message("Job has been updated");
            redirect("company-index.php");





        }

    }

    function get_jobs() {

        $query = query("SELECT * FROM jobs WHERE status ='0' ");
        confirm($query);

        while ($row = fetch_array($query)) {

            $user_admin_jobs = <<<DELIMETER
            
            <tr>
    <td>{$row['id']}</td>
    <td>{$row['title']}</td>
    <td>{$row['company_name']}</td>
    <td>{$row['description']}</td>
    <td>&#8377;{$row['salary']}</td>
    <td>{$row['location']}</td>
    <td>{$row['created at']}</td>
    <td>
        <div class="header-btn d-none f-right d-lg-block">
            <a href="job-detail.php?id={$row['id']}" class="btn btn-primary">View</a>
        </div>
    </td>
</tr>
            
DELIMETER;
            echo $user_admin_jobs;
        }


    }



    function get_posted_job() {

        $query = query("SELECT * FROM jobs WHERE status ='0' LIMIT 4");
        confirm($query);

        while ($row = fetch_array($query)) {

            $company_id = $row['company_id'];
            $job_company_name = $row['company_name'];
            $job_id = $row['id'];
            $job_title = $row['title'];
            $job_location = $row['location'];
            $job_salary = $row['salary'];
            $job_nature = $row['nature'];
            $job_created_at = $row['created at'];

            $featured_jobs = <<<DELIMETER
 <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{$job_title}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{$job_location}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{$job_nature}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>&#8377;{$job_salary}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>{$job_created_at}</small>
                                    </div>
                                </div>
                            </div>

DELIMETER;
echo $featured_jobs;

        }
    }
    
function count_jobs() {
    $query = query("SELECT id FROM jobs");
    confirm($query);

    $jobs_count = mysqli_num_rows($query);

    echo $jobs_count;
}



function count_companies() {
    $query = query("SELECT user_id FROM user");
    confirm($query);

    $company_count = mysqli_num_rows($query);

    echo $company_count;
}


function count_candidates() {
    $query = query("SELECT user_id FROM user");
    confirm($query);

    $candidate_count = mysqli_num_rows($query);

    echo $candidate_count;
}

function get_jobs_site_admin(){
    
    $query = query("SELECT * FROM jobs");
    confirm($query);

    while ($row = fetch_array($query)) {

        $admin_all_job = <<<DELIMETER
<tr>
<td>{$row['id']}</td>
<td>{$row['title']}</td>
<td>{$row['description']}</td>
<td>{$row['company_name']}</td>
<td>
        <div class="send-activate activate_job">
            <a href="admin/activate_job.php?id={$row['id']}"><button name="activate_job" type="activate-job" class="btn btn-primary">Activate !</button></a>
        </div>
        <br>
         <div class="send-activate activate_job">
            <a href="admin/deactivate_job.php?id={$row['id']}"><button name="deactivate_job" type="deactivate-job" class="btn btn-primary">Deactivate !</button></a>
        </div>
        <td>
        <div class="header-btn d-none d-lg-block">
            <a href="job-detail.php?id={$row['id']}" class="btn btn-primary">View</a>
        </div>
    </td>
     <td>
        <div class="header-btn d-none d-lg-block job_delete">
            <a href="admin/admin_delete_jobs.php?id={$row['id']}" class="btn btn-primary">Delete</a>
        </div>
    </td>
</tr>


DELIMETER;

echo $admin_all_job;
    }
}

function get_all_companies_admin() {
    
    $query = query("SELECT * FROM user WHERE role = 'Company' ");
    confirm($query);

    while ($row = fetch_array($query)) {

        $company_id = $row['user_id'];
        $admin_all_companies = <<<DELIMETER

<tr>
<td>{$row['username']}</td>
<td>{$row['email']}</td>
<td>{$row['description']}</td>                  
 <td>
        <div class="send-activate activate_company">
            <a href="admin/activate_company.php?id={$company_id}"><button name="activate_company" type="activate-company" class="btn btn-primary">Activate !</button></a>
        </div>
        <br>
        <div class="send-deactivate deactivate_company">
            <a href="admin/deactivate_company.php?id={$company_id}"><button name="deactivate_company" type="deactivate-company" class="btn btn-primary">Deactivate !</button></a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block">
            <a href="admin_company_profile.php?id={$company_id}" class="btn btn-primary">Update</a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block">
            <a href="company_details.php?id={$company_id}" class="btn btn-primary">View</a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block company_delete">
            <a href="admin/delete_company.php?id={$company_id}" class="btn btn-primary">Delete</a>
        </div>
    </td>
</tr>
DELIMETER;

echo $admin_all_companies;
    

}
}

function get_all_candidates_admin() {

    $query = query("SELECT * FROM user Where role = 'Candidate' ");
    confirm($query);

    while ($row = fetch_array($query)) {

        $candidate_id = $row['user_id'];
        $admin_all_candidates = <<<DELIMETER

        <tr>
<td>{$row['username']}</td>
<td>{$row['email']}</td>
<td>{$row['description']}</td>                  
 <td>
        <div class="send-activate activate_candidate">
            <a href="admin/activate_candidate.php?id={$candidate_id}"><button name="activate_candidate" type="activate-candidate" class="btn btn-primary">Activate !</button></a>
        </div>
        <br>
        <div class="send-deactivate deactivate_candidate">
            <a href="admin/deactivate_candidate.php?id={$candidate_id}"><button name="deactivate_candidate" type="deactivate-candidate" class="btn btn-primary">Deactivate !</button></a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block">
            <a href="admin_candidate_profile.php?id={$candidate_id}" class="btn btn-primary">Update</a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block">
            <a href="candidate_details.php?id={$candidate_id}" class="btn btn-primary">View</a>
        </div>
    </td>
    <td>
        <div class="header-btn d-none d-lg-block company_delete">
            <a href="admin/delete_candidate.php?id={$candidate_id}" class="btn btn-primary">Delete</a>
        </div>
    </td>
</tr>

DELIMETER;

        echo $admin_all_candidates;
    }



}




function job_company_details()
{

    $job_company_query = query("SELECT title FROM jobs WHERE company_id =" . escape_string($_GET['id']));
    confirm($job_company_query);

    while ($row = fetch_array($job_company_query)) {

        $company_job = $row['title'];


        $company_all_job = <<<DELIMETER
            <li>{$company_job}</li>
        DELIMETER;
        echo $company_all_job;
    }
}


function job_detail_page_link(){

if(IsLoggedIn()) {

    $user_type = $_SESSION['role'];
}

if(isset($_GET['id'])) {

    if(isset($_GET['job_id'])) {

    }
}

}
    
    
    
    
    
    ?>