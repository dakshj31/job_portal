<?php include "../resources/db.php";
include "../resources/templates/front/header.php";

/***  job details query  ***/
if (isset($_GET['id'])) {

    $jobs_data_query = query("SELECT * FROM jobs WHERE id =" . escape_string($_GET['id']));
    confirm($jobs_data_query);

    while ($row = fetch_array($jobs_data_query)) {
        
        $title = escape_string($row['title']);
        $description = escape_string($row['description']);
        $vacancy = escape_string($row['vacancy']);
        $nature = escape_string($row['nature']);
        $knowledge = escape_string($row['knowledge']);
        $skills = escape_string($row['skills']);
        $education = escape_string($row['education']);
        $experience = escape_string($row['experience']);
        $salary = escape_string($row['salary']);
        $location = escape_string($row['location']);
        $posted_on = escape_string($row['created at']);

        /*** company data ***/
        $company_name = escape_string($row['company_name']);
        $company_data_query = query("SELECT * FROM user WHERE username= '{$company_name}' ");
        confirm($company_data_query);

        while ($row = fetch_array($company_data_query)) {

            $company_id = $row['user_id'];
            // $company_description = $row['description'];
            $company_email = $row['email'];
        }
    }
}

 ?>

        <!-- Header End -->
        <div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
                        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                        <!-- <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3"><?php echo $title; ?></h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $location; ?></span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $nature; ?></span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>&#8377;<?php echo $salary; ?></span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p><li><?php echo $description; ?></li></p>
                            <h4 class="mb-3">Knowledge</h4>
                            <p><li><?php echo $knowledge; ?></li></p>
                            
                            <h4 class="mb-3">Education & Experience</h4>
                            <li><?php echo $education; ?></li>
                            <li><?php echo $experience; ?></li>
                           
                        </div>
        
                        <div class="">
                            <h4 class="mb-4"></h4>
                            <form>
                                <div class="row g-3">
                                <div class="text-center">
<a href="#" class="btn btn-primary">Apply Now</a>
</div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: <?php echo $posted_on; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: <?php echo $vacancy; ?> Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: <?php echo $nature; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: &#8377;<?php echo $salary; ?></p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: <?php echo $location; ?></p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0"> Name : <?php echo $company_name; ?></p>
                            <p class="m-0"> Email : <?php echo $company_email; ?></p>
                            <p class="m-0"><?php ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <?php include "../resources/templates/front/footer.php"; ?>