
<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 
// include "../resources/functions.php"; ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <!-- Include your navbar here just like in the main page -->
        <!-- Navbar End -->

        <!-- Login Form Start -->
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="card px-5 py-4" style="max-width: 400px;">
                <h2 class="text-center mb-4">Login</h2>
                <h2><?php display_message(); ?></h2>
                <form action="" method="post">
                    <?php login_user(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#">Forgot password?</a>
                </div>  
            </div>
        </div>
        <!-- Login Form End -->
    </div>
    <!-- Include any JS files needed for Bootstrap and other libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>


<?php include "../resources/templates/front/footer.php"; ?>