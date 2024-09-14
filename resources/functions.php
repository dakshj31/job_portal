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

    //==================LINK FUNCTIONS=============//
function admin_link_user_type_home()
{
 
    if (IsLoggedIn()) {
        
        $user_id  = $_SESSION['user_id'];
        $username = $_SESSION['username'];

        $admin_usertype_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($admin_usertype_query);

        while ($row = mysqli_fetch_array($admin_usertype_query)) {

            $usertype = $row['role'];
        }

        if ($usertype == "Candidate") {

            $candidate_admin = <<<DELIMETER
                <a href="admin/candidate-index.php" class="nav-item nav-link active"> Admin</a>
                <a href="job-list.php" class="nav-item nav-link"> Find a Job</a>
                <a href="candidate_applications.php" class="nav-item nav-link"> Applications</a>
            DELIMETER;
            echo $candidate_admin;
        } elseif ($usertype == "Company") {

            $company_admin = <<<DELIMETER
                <a href="admin/company-index.php" class="nav-item nav-link active"> Admin</a>
                <a href="company_applications.php" class="nav-item nav-link"> Applications</a>
            DELIMETER;
            echo $company_admin;
        } else {
         
            $admin = <<<DELIMETER
                <a href="admin/admin-index.php"  class="nav-item nav-link active"> Admin</a>
                <a href="admin_jobs.php" class="nav-item nav-link"> Jobs</a>
                <a href="admin_companies.php" class="nav-item nav-link"> Companies</a>
                <a href="admin_candidates.php" class="nav-item nav-link"> Candidates</a>
            DELIMETER;
            echo $admin;
        }
    } else {
        $find_job_button = <<<DELIMETER
               <a href="job-list" class="nav-item nav-link"> Find a Job</a>
        DELIMETER;
    }
}



function admin_link_user_type_admin() {

    if (IsLoggedIn()) {
        $user_id  = $_SESSION['user_id'];
        $username = $_SESSION['username'];

        $admin_usertype_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($admin_usertype_query);

        while ($row = mysqli_fetch_array($admin_usertype_query)) {

            $usertype = $row['role'];
        }

        if ($usertype == "Candidate") {

            $candidate_admin = <<<DELIMETER
                <a href="candidate-index.php" class="nav-item nav-link active"> Admin</a>
                <a href="../job-list.php" class="nav-item nav-link"> Find a Job</a>
                <a href="../candidate_applications.php" class="nav-item nav-link"> Applications</a>
            DELIMETER;
            echo $candidate_admin;
        } elseif ($usertype == "Company") {

            $company_admin = <<<DELIMETER
                <a href="company-index.php" class="nav-item nav-link active"> Admin</a>
                <a href="../company_applications.php" class="nav-item nav-link"> Applications</a>
            DELIMETER;
            echo $company_admin;
        } else {
         
            $admin = <<<DELIMETER
                <a href="admin-index.php"  class="nav-item nav-link active"> Admin</a>
                <a href="../admin_jobs.php" class="nav-item nav-link"> Jobs</a>
                <a href="../admin_companies.php" class="nav-item nav-link"> Companies</a>
                <a href="../admin_candidates.php" class="nav-item nav-link"> Candidates</a>
            DELIMETER;
            echo $admin;
        }
    } else {
        $find_job_button = <<<DELIMETER
               <a href="job-list" class="nav-item nav-link"> Find a Job</a>
        DELIMETER;
        echo $find_job_button;
    }
}


function profile_link_homepage() {
    
    if (IsLoggedIn()) {

        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];

        $admin_usertype_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($admin_usertype_query);

        while ($row = mysqli_fetch_array($admin_usertype_query)) {

           $usertype = $row['role'];
        }

if ($usertype == "Candidate") {

    $candidate_profile = <<<DELIMETER
        <a href="candidate-profile.php?id={$user_id}" class="nav-item nav-link"> Profile</a>
  DELIMETER;
    echo $candidate_profile;

} elseif ($usertype == "Company") {

    $company_profile = <<<DELIMETER
        <a href="company_profile.php?id={$user_id}" class="nav-item nav-link"> Profile</a>
    DELIMETER;
    echo $company_profile;
        

    }
    }
}


function profile_link_admin() {

    if (IsLoggedIn()) {

        $user_id = $_SESSION['user_id'];
        $username = $_SESSION['username'];

        $admin_usertype_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($admin_usertype_query);

        while ($row = mysqli_fetch_array($admin_usertype_query)) {

           $usertype = $row['role'];
        }

if ($usertype == "Candidate") {

    $candidate_profile = <<<DELIMETER
        <a href="../candidate-profile.php?id={$user_id}" class="nav-item nav-link"> Profile</a>
  DELIMETER;
    echo $candidate_profile;

} elseif ($usertype == "Company") {

    $company_profile = <<<DELIMETER
        <a href="../company_profile.php?id={$user_id}" class="nav-item nav-link"> Profile</a>
    DELIMETER;
    echo $company_profile;
        

    }
    }

}

function login_find_add_job_link() {

    if(IsLoggedIn()) {

        $username = $_SESSION['username'];

        $query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($query);

        while($row = mysqli_fetch_array($query)) {
            $usertype = $row['role'];
        }
        if ($usertype == "Candidate") {

            $candidate_homepage = <<<DELIMETER
                <a href="job-list.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> Search A Job</a>
          DELIMETER;
            echo $candidate_homepage;
        
        } elseif ($usertype == "Company") {
        
            $company_profile = <<<DELIMETER
                <a href="admin/add_jobs.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> Post A New Job</a>
            DELIMETER;
            echo $company_profile;
                
        
            } else {
                $admin_homepage = <<<DELIMETER
                    <a href="admin/admin_index.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> View Data</a>
                DELIMETER;
                echo $admin_homepage;
            } 
    } else {
        $login_link = <<<DELIMETER
                 <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> Login To Apply</a>
        DELIMETER;
        echo $login_link;
    }
} 

function show_login_logout_admin() {
    
    if(IsLoggedIn()) {
        $logout = <<<DELIMETER
           <a href="../logout.php" class="nav-item nav-link"> Log Out</a>
        DELIMETER;
        echo $logout;
    
    } else {

        $login = <<<DELIMETER

            <a href="registration" class="nav-item nav-link">Register</a>
            <a href="login" class="nav-item nav-link">Login</a>
        DELIMETER;
    }
}

function show_login_logout_homepage() {
    
    if(IsLoggedIn()) {

    }else {
        $login = <<<DELIMETER
            
            <a href="login.php" class="nav-item nav-link">Login</a>

        DELIMETER;
        echo $login;
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
<a href="../job-detail.php?id={$row['id']}" class="">View</a>
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



function apply_button_in_job_details() {

    if(IsLoggedIn()) {

        $username = $_SESSION['username'];

        $user_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($user_query);

        while ($row = fetch_array($user_query)) {

            $usertype = $row['role'];
        }

        $job_query = query("SELECT id FROM jobs WHERE id =" . escape_string($_GET['id']));
        confirm($job_query);

        if ($usertype == 'Candidate') {

            $candidate_button = <<<DELIMETER
                <div class="apply-btn2 job_apply">
                <a href="apply_job.php?id={$_GET['id']}"><button name="apply" type="submit" class="btn btn-primary">Apply Now !</button></a>
                </div>

            DELIMETER;
            echo $candidate_button;
        }
    } else {

        $apply_login_button = <<<DELIMETER
        
            <div class="apply-btn2">
            <a href="login.php"><button name="apply" type="submit" class="btn btn-primary">Apply Now !</button></a>
            </div>

        DELIMETER; 
        echo $apply_login_button;
    }
}


function view_button_job_detail() {

     if(IsLoggedIn()){

        $username = $_SESSION['username'];
        
        $user_query = query("SELECT role FROM user WHERE username = '{$username}' ");
        confirm($user_query);

        while ($row = fetch_array($user_query)) {
            $usertype = $row['role'];
        }

        $job_query = query("SELECT company_id FROM jobs WHERE id =" . escape_string($_GET['id']));
        confirm($job_query);

        while ($row = fetch_array($job_query)) {
            $company_id = $row['company_id'];
        }

        if ($usertype == 'Candidate') {

            $candidate_button = <<<DELIMETER
            <div class="company-details">
            <a href="company_details.php?id=$company_id"><button name="company_details" type="submit" class="btn btn-primary">View Details !</button></a>
            </div>
            DELIMETER;
            echo $candidate_button;
        }
     } else {
        $apply_login_button = <<<DELIMETER
                <div class="company-details">
                <a href="login.php"><button name="company_details" type="submit" class="btn btn-primary">View Details !</button></a>
                </div>
            DELIMETER;
            echo $apply_login_button;
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

        $user_query = query("SELECT * FROM user where user_id =" . escape_string($_GET['id']));
        confirm($user_query);

        while( $row = fetch_array($user_query)) {
            $candidate_id = $row['user_id'];
            $candidate_name = $row['username'];




            $query = query("SELECT cv FROM candidate WHERE name = '{$candidate_name}' ");
            confirm($query);

            while ($row = fetch_array($query)) {

                $candidate_cv = $row['cv'];
            }

            if ($user_type == 'Company' ) {

                $company_link = <<<DELIMETER

                 <div class="candidate-details">
                        <a href="candidate_cv/$candidate_cv"><button name="candidate_details" type="submit" class="btn btn-primary">View CV</button></a>
                    </div>
                    <br>
                    <div class="send-accept">
                        <a href="accept_application.php?id=$candidate_id&job_id={$_GET['job_id']}"><button name="accept_application" type="accept-application" class="btn btn-primary">Accept Application !</button></a>
                    </div>
                    <br>
                    <div class="send-reject">
                        <a href="reject_application.php?id=$candidate_id&job_id={$_GET['job_id']}"><button name="reject_application" type="reject-application" class="btn btn-primary">Reject Application !</button></a>
                    </div>
                    <br>
                    <div class="send-message">
                        <a href="candidate_message.php?id=$candidate_id"><button name="message_candidate" type="message_candidate" class="btn btn-primary">Message Candidate !</button></a>
                    </div>

                DELIMETER;
                echo $company_link;
           
            } elseif ($user_type = 'Admin') {
                
                $admin_link = <<<DELIMETER

                    <div class="candidate-details">
                        <a href="candidate_cv/$candidate_cv"><button name="candidate_details" type="submit" class="btn btn-primary">View CV</button></a>
                    </div>
                    <br>
                    <div class="send-message">
                        <a href="candidate_message.php?id=$candidate_id"><button name="message_candidate" type="message_candidate" class="btn btn-primary">Message Candidate !</button></a>
                    </div>

                DELIMETER;
                echo $admin_link;
               }
          
           }
      
        }
   
    }

}
    
 
function get_jobs_candidate_admin() {

    $job_id_query = query("SELECT job_id FROM application WHERE user_id = '{$_SESSION['user_id']}' ");

    while ($row = fetch_array($job_id_query)) {
        $job_id = $row['job_id'];

        $query = query("SELECT * FROM jobs WHERE id = '{$job_id}' AND status = '0' ");
        confirm($query);

        while ($row = fetch_array($query)) {

            $candidate_selected_job = <<<DELIMETER
            <tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['company_name']}</td>
            <td>{$row['description']}</td>
            <td>&#8377;{$row['salary']}</td>
            <td>{$row['location']}</td>
            <td>{$row['created at']}</td>
            <td>
            <div class="header-btn d-none d-lg-block">
            <a href="../job-detail.php?id={$row['id']}" class="btn btn-primary">View</a>
            </div>
            </td>
            </tr>

            DELIMETER;
            echo $candidate_selected_job;
        }
    }
}
    

function get_applied_jobs_company_admin() {

    $company_id = $_SESSION['user_id'];

    $company_id_query = query("SELECT * FROM application WHERE company_id = '{$company_id}' ");
    confirm($company_id_query);

    while ($row = fetch_array($company_id_query)) {
        $job_id = $row['job_id'];
        $user_id = $row['user_id'];
        $applied_at = $row['created_at'];

        $select_job_query = query("SELECT * FROM jobs WHERE id = '{$job_id}' AND status = '0' ");
        confirm($select_job_query);

        while($row = fetch_array($select_job_query)) {

            $applied_job_id = $row['id'];
            $applied_job_title = $row['title'];
            $applied_job_description = $row['description'];
            $applied_job_salary = $row['salary'];
            $applied_job_location = $row['location'];

            $select_user_query = query("SELECT * FROM user WHERE user_id = '{$user_id}' ");
            confirm($select_user_query);

            while ($row = fetch_array($select_user_query)) {

                $applied_job_username = $row['username'];

                $show_applied_job_details = <<<DELIMETER
                        <tr>
                        <td>{$applied_job_id}</td>
                        <td>{$applied_job_title}</td>
                        <td>{$applied_job_description}</td>
                        <td>&#8377;{$applied_job_salary}</td>
                        <td>{$applied_job_location}</td>
                        <td>{$applied_at}</td>
                        <td>
                            <div class="header-btn d-none d-lg-block">
                                <a href="candidate_details.php?id={$user_id}&job_id={$applied_job_id}" class="btn btn-primary">{$applied_job_username}</a>
                            </div>
                        </td>
                        <td>
                            <div class="header-btn d-none d-lg-block">
                                <a href="job-detail.php?id={$job_id}&job_id={$applied_job_id}" class="btn btn-primary">View</a>
                            </div>
                        </td>
                    </tr>

                DELIMETER;
                   echo $show_applied_job_details;
            }

        }
    }
}
    

function get_application_status_job() {

    $job_query = query("SELECT * FROM application WHERE user_id = '{$_SESSION['user_id']}' ");

    while ($row = fetch_array($job_query)) {
        $job_id = $row['job_id'];
        $status = $row['status'];

        $query = query("SELECT * FROM jobs WHERE id = '{$job_id}' AND status = '0' ");
        confirm($query);

        while($row = fetch_array($query)) {

            $job_title = $row['title'];
            $job_description = $row['description'];
            $job_company_id = $row['company_id'];

            $status_job = <<<DELIMETER

                    <tr>
                    <td>{$job_id}</td>
                    <td>{$job_title}</td>
                    <td>{$job_description}</td>
                    <td>
                    <div class="header-btn d-none d-lg-block">
                    <a href="job-detail.php?id={$row['id']}" class="btn btn-primary">View</a>
                    </div>
                    </td>
                    <td>
                    <div class="header-btn d-none d-lg-block">
                    <a href="company_details.php?id={$job_company_id}" class="btn btn-primary">View</a>
                    </div>
                    </td>
                    <td>{$status}</td>
                    </tr>

            DELIMETER;
            echo $status_job;
        }
    }
}
    
    ?>