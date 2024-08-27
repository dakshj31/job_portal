<?php include "../../resources/db.php";
include "includes/header.php";
include "includes/top-nav.php";

/***getting job updating data ***/

if(isset($_GET['id'])) {

    $query = query("SELECT * FROM jobs WHERE id=" . escape_string($_GET['id']));
    confirm($query);

    while ($row = fetch_array($query)) {
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
    }

    update_jobs();
}

?>




<div id="page-wrapper" style="text-align: -webkit-center;">

    <h1 ><i class="fa fa-fw fa-table"></i>
        Update Job
    </h1>
    <h4 class="text-center bg-info"></h4>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group">
                <label for="job-title">TITLE</label>
                <input type="text" name="job_title" class="form-control" value="<?php echo $title; ?>">
            </div>

            <div class="form-group">
                <label for="job-description">DESCRIPTION</label>
                <textarea type="text" name="job_description" id="" cols="30" rows="10" class="form-control"> <?php echo $description; ?></textarea>
            </div>

            <div class="form-group">
                <label for="job-vacancy">VACANCY</label>
                <input type="text" name="job_vacancy" class="form-control" value="<?php echo $vacancy; ?>">
            </div>

            <div class="form-group">
                <label for="job-nature">NATURE</label>
                <input type="text" name="job_nature" class="form-control" value="<?php echo $nature; ?>">
            </div>

            <div class="form-group">
                <label for="job-knowledge">KNOWLEDGE</label>
                <input type="text" name="job_knowledge" class="form-control" value="<?php echo $knowledge; ?>">
            </div>


            <div class="form-group">
                <label for="job-skills">SKILLS</label>
                <input type="text" name="job_skills" class="form-control" value="<?php echo $skills; ?>">
            </div>

            <div class="form-group">
                <label for="job-education">EDUCATION</label>
                <input type="text" name="job_education" class="form-control" value="<?php echo $education; ?>">
            </div>

            <div class="form-group">
                <label for="job-experience">EXPERIENCE</label>
                <input type="text" name="job_experience" class="form-control" value="<?php echo $experience; ?>">
            </div>

            <div class="form-group">
                <label for="job-salary">SALARY ( &#8377; )</label>
                <input type="text" name="job_salary" class="form-control" required data-validation-required-message="Please Enter"value="<?php echo $salary; ?>">
            </div>

            <div class="form-group">
                <label for="job-location">LOCATION</label>
                <input type="text" name="job_location" class="form-control" value="<?php echo $location; ?>"></input>
            </div>
<br>
            <div class="form-group">
                        <button name="update" type="submit" class="btn btn-primary">Update Job <span class="glyphicon glyphicon-ok"></span></button>
                    </div>

        </div>

        <!--Main Content-->

    </form>
</div>
<!-- /#page-wrapper -->
<br>

<?php include "includes/footer.php";?>
