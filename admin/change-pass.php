<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php
$id = $_SESSION['id'];
$sql = "SELECT * FROM students WHERE id = '$id'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);
$this_pass = $row['pass'];
 ?>

<div class="dashboard-content-one">

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Chanage Password</h3>
                </div>
            </div>
            <form class="new-added-form" action="change-pass.php" method="POST">
                <div class="row">

                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Old Password</label>
                      <input type="text" placeholder="" class="form-control" name="old_pass">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>New Password</label>
                      <input type="text" placeholder="" class="form-control" name="new_pass">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Retype New Password</label>
                      <input type="text" placeholder="" class="form-control" name="retype_pass">
                  </div>

                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <?php

  if (isset($_POST['submit'])) {

    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $retype_pass = $_POST['retype_pass'];

    if ($this_pass == $old_pass) {

      if ($new_pass == $retype_pass) {
        $query = "UPDATE students SET pass = '$new_pass' WHERE id = $id";

        if (mysqli_query($con, $query)) {
          echo "Successfully Changed";
        }
      }

    } else {
      echo "Old password did not match";
    }


  }

?>


<?php include_once 'includes/footer.php' ?>
