<?php include "../resources/db.php";
include "../resources/header.php"; ?>

        <!-- Header End -->
        <div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Jobs Start -->
        <!-- Jobs Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <?php //get_jobs(); ?>
                     <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                           
                    </div>
                </div>
            </div>
        </div>  -->
        <!-- Jobs End -->
        <!-- Jobs End -->


        <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">

                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                </div>
                            </div>
                            <!-- Count of Job list End -->

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Description</th>
                                        <th>Salary</th>
                                        <th>Location</th>
                                        <th>Posted At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php get_jobs(); ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
</main>


        <?php include "../resources/footer.php"; ?>