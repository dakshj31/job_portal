<?php include "../resources/db.php"; 
include "../resources/header.php"; 
/*** Companies profile update ***/
if (isset($_GET['id'])) {

    $query = query("SELECT * FROM user WHERE user_id =" . ($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

        $username = $row['username'];
        $description = $row['description'];
        $location = $row['location'];
        $capacity = $row['capacity'];
        
    }
}
?>

<div class="container-xxxl py-5 bg-dark page-header mb-5">
            <div>
            <h2 class="text-center"><i class="far fa-address-book" style="font-size:240px;"></i> Update <?php echo $username; ?>'s Profile...!!</h2>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>

        <div id="page-wrapper" style="text-align: -webkit-center;">
    <br>

    <form action="" method="post" enctype="multipart/form-data">
        <?php update_profile_company_admin(); ?>

        <div class="col-md-6">

            <div class="form-group">
                <label for="job-description">DESCRIPTION</label>
                <textarea type="text" name="company_description" id="" cols="30" rows="10" class="form-control"><?php echo $description; ?></textarea>
            </div>



            <div class=" form-group">
                <label for="job-salary">EMPLOYEES</label>
                <input type="text" name="company_employees" class="form-control" value="<?php echo $capacity; ?>">
            </div>

            <div class="form-group">
                <label for="job-location">ADDRESS</label>
                <input type="text" name="company_location" class="form-control" value="<?php echo $location; ?>"></input>
            </div>

            <br>

            <div class="form-group">
                <button name="update" type="submit" class="btn btn-primary">Update Company profile !<span class="glyphicon glyphicon-ok"></span></button>
            </div>

        </div>
        <!--Main Content-->
    </form>
</div>
<!-- /#page-wrapper -->
<br>



<?php include "../resources/footer.php"; ?>