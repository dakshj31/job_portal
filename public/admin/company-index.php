<?php include "../../resources/db.php";
include "includes/header.php";
include "includes/top-nav.php";

if(!isset($_SESSION['username']) ) {
    redirect("company-index.php");
} ?>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><i class="fas fa-user" style="font-size: 100px;"></i> Hi , Welcome to <?php echo $_SESSION['username'] ?>'s Admin page !</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Hero Area End -->

<div class="container">
    <h1 class="text-center"><i class="fa fa-fw fa-table"></i>
        All Jobs...!!
    </h1>
    <h4 class="text-center bg-info"><?php display_message(); ?></h4>

    <table class="table" style="min-height: 400px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Company</th>
                <th>Description</th>
                <th>(&#8377;)Salary</th>
                <th>Location</th>
                <th>Posted At</th>
                <th>View Job</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php //get_jobs_company_admin(); ?>
        </tbody>
    </table>
</div>

<!-- Add Button -->
<div class="text-center">
<a href="" class="btn btn-primary">Add New Job</a>
</div>
<!-- Add Button Ends -->
<br>

<?php include "includes/footer.php";?>