<?php include_once "db.php"; ?>
 <!-- Navbar Start -->

 <?php //admin_link_user_type_home(); ?> 
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">WorkHub</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                        <a href="job-list.php" class="dropdown-item">Find a Job</a>
                            <a href="category.php" class="dropdown-item">Job Category</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404</a>
                            <a href="about.php" class="dropdown-item">About</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                        </div>
                    </div>

                    <?php admin_link_user_type_home(); ?>
                    <?php profile_link_homepage(); ?>
                    <?php show_login_logout_homepage(); ?>
                </div>
                
            </div>
        </nav>
        <!-- Navbar End -->