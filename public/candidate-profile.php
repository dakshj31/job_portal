<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 


if(!isset($_SESSION['username']) ) {
    redirect("index.php");
} ?>

<h1 class=" text-center"><i class="fa fa-fw fa-table"></i> 
         Your Profile...!!
    </h1>


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