<?php include "../resources/db.php"; 
include "../resources/header.php"; ?>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><i class="" style="font-size: 240px;"></i> Job Applications Status !</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Hero Area End -->

<div class="container">

    <!-- TABLE -->
    <table class="table" style="min-height: 400px;">
        <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>View Job</th>
                <th>View Company</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php get_application_status_job();
            ?>
        </tbody>
    </table>
</div>
<br>


<?php include "../resources/footer.php"; ?>