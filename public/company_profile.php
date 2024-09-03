<?php include "../resources/db.php"; 
include "../resources/templates/front/header.php"; 

/**** Updating company profile by company******/

if(isset($_SESSION['username'])) {

    $username = $_SESSION['username'];

    $query= query("SELECT * FROM user WHERE username = '{$username}' ");
    confirm($query);

    while($row = fetch_array($query)) {
        $username = $row['username'];
        $description = $row['description'];
        $capacity = $row['capacity'];
        $location = $row['location'];
    }
}
?>

<h2 class="text-center" ><i class="far fa-address-book" style="font-size:240px;"></i> <?php echo $_SESSION['username']; ?>'s Profile...!!</h2>

<div id="page-wrapper" style="text-align: -webkit-center;">
    <br>

    <form action="" method="post" enctype="multipart/form-data">
        <?php company_profile_update(); ?>

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
                <button name="update" type="submit" class="btn btn-primary">Complete your profile !<span class="glyphicon glyphicon-ok"></span></button>
            </div>

        </div>
        <!--Main Content-->
    </form>
</div>
<!-- /#page-wrapper -->
<br>



<?php include "../resources/templates/front/footer.php";?>