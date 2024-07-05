<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 


if(!isset($_SESSION['username']) ) {
    redirect("index.php");
} ?>


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
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"><h2><i class="far fa-address-book" style="font-size:240px;"></i> <?php echo $_SESSION['username']; ?>'s Profile...!!</h2></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Form Start -->
        <div class="container mt-5 d-flex justify-content-center">
            <div class="col-md-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="candidate-description">DESCRIPTION</label>
                        <textarea type="text" name="candidate_description" id="candidate-description" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label for="cv">CV</label>
                        <input type="file" name="file1"><br>
                        <small class="form-text text-muted">User must upload cv/resume everytime while updating profile!</small>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="candidate-knowledge">KNOWLEDGE</label>
                        <input type="text" name="candidate_knowledge" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="candidate-skills">SKILLS</label>
                        <input type="text" name="candidate_skills" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="candidate-education">EDUCATION</label>
                        <input type="text" name="candidate_education" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="candidate-experience">EXPERIENCE</label>
                        <input type="text" name="candidate_experience" class="form-control">
                    </div>

                    <hr>
                    <div class="form-group">
                        <label for="image">IMAGE</label>
                        <input type="file" name="file2"><br>
                    </div>
                    <hr>

                    <div class="form-group">
                        <button name="update" type="submit" class="btn btn-primary">Complete your profile! <span class="glyphicon glyphicon-ok"></span></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Form End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>





 <?php include "../resources/templates/front/footer.php";?>