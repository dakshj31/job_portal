<?php include "../resources/db.php"; 
include "../resources/header.php"; ?>

<!-- Hero Area Start-->
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><i class="" style="font-size: 100px;"></i>Job Applications Received !</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br
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
                <th>(&#8377;)Salary</th>
                <th>Location</th>
                <th>Applied At</th>
                <th>View Candidate</th>
                <th>View Job</th>
            </tr>
        </thead>
        <tbody>
            <?php get_applied_jobs_company_admin(); ?>
        </tbody>
    </table>
</div>
<br>


<?php include "../resources/footer.php"; ?>