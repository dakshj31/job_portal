<?php include "../../resources/db.php"; 
include "includes/header.php";
include "includes/top-nav.php";


if(!isset($_SESSION['username']) ) {
    redirect("index.php");
}?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4"></h1>
                                    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><i class="fas fa-user" style="font-size: 100px;"></i> Welcome to <?php echo $_SESSION['username'] ?>'s Admin page !</h2>
     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Carousel End -->


<br>

<div class="container">
    <h1 class=" text-center"><i class="fa fa-fw fa-table"></i> 
         Your Applied Jobs...!!
    </h1>
     <h4 class="text-center"><?php display_message(); ?></h4> 

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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php get_jobs_candidate_admin(); ?>
        </tbody>
    </table>
</div>
<br>


                <div class="text-center">
<a href="../candidate-profile.php" class="btn btn-primary">Update your profile</a>
</div>


<?php include "includes/footer.php";?>