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
                  redirect("admin/admin_index.php");
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
            move_uploaded_file($temp_image, "images/$image");

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
            redirect("candidate-index.php");
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
<td>&#8377{$row['salary']}</td>
<td>{$row['location']}</td>
<td>
<div class="header-btn d-none d-lg-block">
<a href="job_details.php?id={$row['id']}" class="">View</a>
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
?>