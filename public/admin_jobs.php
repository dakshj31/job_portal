<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; ?>

<div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Jobs</h1>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>

        <div class="container">
    <h1 class="text-center"><i class="fa fa-fw fa-table"></i>
        Jobs posted by all companies...!!
    </h1>
    <h4 class="text-center bg-info"><?php display_message(); ?></h4>
    <br>

    <table class="table" style="min-height: 400px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Company Name</th>
                <th>Status</th>
                <th>View Job</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php //get_jobs_site_admin(); ?>
        </tbody>
    </table>
</div>
<br>





<?php include "../resources/templates/front/footer.php"; ?>