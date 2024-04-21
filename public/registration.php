
<?php include "../resources/db.php";
include "../resources/templates/front/header.php"; ?>


<?php 
if(isset($_POST['register'])) {

$username = $_POST['username'];
$email    = $_POST['email'];
$passowrd = $_POST['password'];
// $image    = $_POST['image'];
$role     = $_POST['user_type'];


// $username      = mysqli_real_escape_string($connection, $username);
// $email         = mysqli_real_escape_string($connection, $email);
// $password      = mysqli_real_escape_string($connection, $password);
// // $image         = mysqli_real_escape_string($connection, $image);
// $role          = mysqli_real_escape_string($connection, $role);




}
?> 

         <!-- Registration Form -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center"><i class="fa fa-user-plus" style="font-size: 120px;"></i></h3>
                    <h1 class="text-center">REGISTRATION</h1>
                    <form class="mt-4" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-sm" id="username" name="username" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-sm" id="password" name="password" >
                        </div>
                        <!-- <div class="mb-3">
                            <label for="image" class="form-label">User Image</label>
                            <input type="file" class="form-control form-control-sm" id="image" name="image">
                        </div> -->
                        <div class="mb-3">
                            <label for="user-type" class="form-label">User Type</label>
                            <select class="form-control form-control-sm" id="user_type" name="user_type">
                                <option value="">Select User Type</option>
                                <option value="candidate">Candidate</option>
                                <option value="company">Company</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button name="register" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<?php include "../resources/templates/front/footer.php"; ?>
        