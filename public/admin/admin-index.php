<?php include "../../resources/db.php";
 include "includes/header.php";
include "includes/top-nav.php";

if(!isset($_SESSION['username']) ) {
    redirect("index.php");
} ?>


<div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Company Data </h1>
                <nav aria-label="breadcrumb">
                    
                </nav>
            </div>
        </div>

<br>
<!-- Hero Area End -->

<div class="container">
    <br>

    <!-- Right Content -->
    <div class="col-xl-12 col-lg-2">
        <div class="post-details3  mb-10">
            <!-- Small Section Tittle -->
            <div class="small-section-tittle">
                <h4 class="text-center"><i class="far fa-list-alt" style="font-size: 40px;"></i> ALL DATA...!!</h4>
            </div>
            <hr>
            <ul>
                <li><i class="fas fa-briefcase" style="font-size: 80px;"></i>
                    TOTAL JOBS POSTED ===============================================> <?php count_jobs(); ?> Jobs !
                        
                            <a href="../admin_jobs.php" class="btn btn-primary">View All Jobs !</a>
                        
                    
                </li>
                <hr>
                <li><i class="fas fa-building" style="font-size: 80px;"></i>
                    TOTAL COMPANIES REGISTERED ======================================> <?php count_companies(); ?> Companies !
                        
                    <a href="../admin_companies.php" class="btn btn-primary"> View All Companies</a>
                      
                </li>
                <hr>
                <li><i class="fas fa-address-card" style="font-size: 80px;"></i>
                    TOTAL CANDIDATES REGISTERED =====================================> <?php count_candidates(); ?> Candidates !
                        
                            <a href="../admin_candidates.php" class="btn btn-primary">View All Candidates !</a>
                        
                </li>
            </ul>
        </div>
    </div>

</div>
<br>


<?php include "includes/footer.php";?>