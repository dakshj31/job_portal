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
                  redirect("company-index.php");
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
                  redirect("candidate-index.php");
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

            if(!$register_user_query) {
                        die("Query failed: " . mysqli_error($connection));
                     } else {
                         echo "Registration successful!";
                     }

                     redirect("login.php");
                     set_message("Registration successful!");
        }

    }

 
?>