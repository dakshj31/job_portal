<?php 
include "../resources/db.php";
include "../resources/header.php"; 

register_user();
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
                    <input type="text" class="form-control form-control-sm" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                </div>
               
                <div class="mb-3">
                    <label for="user-type" class="form-label">User Type</label>
                    <select class="form-control form-control-sm" id="user_type" name="user_type" required>
                        <option value="">Select User Type</option>
                        <option value="Candidate">Candidate</option>
                        <option value="Company">Company</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="text-center">
                    <button name="register" type="submit" value="register" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>

<?php include "../resources/short_footer.php"; ?>
