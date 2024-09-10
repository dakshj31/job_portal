 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="../index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">Jwob</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                    <?php admin_link_user_type_admin(); ?>
                    <?php profile_link_admin(); ?>
                    </div>
                    <?php show_login_logout_admin(); ?>
                   
                  
                    
                    
                </div>
            </div>
        </nav>
        <!-- Navbar End --> 