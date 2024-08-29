<?php include "../resources/db.php";
include "../resources/templates/front/header.php"; ?>

        <!-- Header End -->
        <div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Jobs Start -->
        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <?php get_posted_job() ?>
                     <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                           
                    </div>
                </div>
            </div>
        </div> 
        <!-- Jobs End -->
        <!-- Jobs End -->


        <?php include "../resources/templates/front/footer.php"; ?>