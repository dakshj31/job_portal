<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 

/***** Candidate profile data  ******/

if(isset($_GET['id'])) {

    $username_query = query("SELECT * FROM user WHERE user_id =" . ($_GET['id']) . " ");
    confirm($username_query);

    while ($row = fetch_array($username_query)) {

        $candidate_name = $row['username'];
        $query = query("SELECT * FROM candidate WHERE name = '{$candidate_name}' ");
        confirm($query);

        while ($row = fetch_array($query)) {

            $description = $row['description'];
            $cv = $row['cv'];
            $knowledge = $row['knowledge'];
            $skill = $row['skills'];
            $education = $row['education'];
            $experience = $row['experience'];
            $image = $row['image'];
        }
    }
}

?>
<div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div>
            <h2 class="text-center"><i class="far fa-address-book" style="font-size:240px;"></i> Update <?php echo $candidate_name; ?>'s Profile...!!</h2>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>

        <div id="page-wrapper" style="text-align: -webkit-center;">



    <form action="" method="post" enctype="multipart/form-data">
        <?php update_candidate_profile_admin(); ?>

        <div class="col-md-6">

            <div class="form-group">
                <label for="candidate-description">DESCRIPTION</label>
                <textarea type="text" name="candidate_description" id="" cols="30" rows="10" class="form-control"><?php echo $description; ?></textarea>
            </div>

            <hr>
            <div class="form-group">
                <label for="cv">CV</label>
                <input type="file" name="file1"><br>
                ( User must upload cv/resume everytime while updating profile ! )
            </div>
            <hr>

            <div class=" form-group">
                <label for="candidate-knowledge">KNOWLEDGE</label>
                <input type="text" name="candidate_knowledge" class="form-control" value="<?php echo $knowledge; ?>">
            </div>

            <div class=" form-group">
                <label for="candidate-skills">SKILLS</label>
                <input type="text" name="candidate_skills" class="form-control" value="<?php echo $skill; ?>">
            </div>

            <div class=" form-group">
                <label for="candidate-education">EDUCATION</label>
                <input type="text" name="candidate_education" class="form-control" value="<?php echo $education; ?>">
            </div>

            <div class=" form-group">
                <label for="candidate-experience">EXPERIENCE</label>
                <input type="text" name="candidate_experience" class="form-control" value="<?php echo $experience; ?>">
            </div>

            <hr>
            <div class="form-group">
                <label for="image">IMAGE</label>
                <input type="file" name="file2"><br>
                <img width="100" src="images/<?php echo $image; ?>" alt="">
            </div>
            <hr>

            <div class="form-group">
                <button name="update" type="submit" class="btn btn-primary">Update Candidate profile !<span class="glyphicon glyphicon-ok"></span></button>
            </div>

        </div>
        <!--Main Content-->
    </form>
</div>
<!-- /#page-wrapper -->
<br>


<?php include "../resources/templates/front/footer.php"; ?>