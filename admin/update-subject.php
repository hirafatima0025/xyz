<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>


<?php
if( isset($_POST['submit'])) {

  $id = $_GET['sub_id'];

  $subject = $_POST['subject'];
  $class = $_POST['class'];

  $ssql = "UPDATE subjects SET subject = '$subject', class = '$class' where id = $id";

  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

  if( $qr ) {
     echo $success = 'Subject has been successfully updated';
  } else {
    echo $err = 'Subject was not updated Successfully';
  }

}


	if( isset($_POST['update_assign_sub']) && $_POST['update_assign_sub'] == 'Update Assign Sub') {

    $id = $_GET['update_sub_id'];

	   $teacher = $_POST['teacher'];
     $subject = $_POST['subject'];

		$ssql = "UPDATE assign_sub SET sub_id = $subject, tea_id = $teacher WHERE id = $id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			$success = 'New Assignment has been successfully updated';
		} else {
			$err = 'New Assignment was not updated Successfully';
		}

	}


?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>All Subjects</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Subjects</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- All Subjects Area Start Here -->
    <div class="row">
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add New Subject</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="" method="POST">
                        <div class="row">

                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Subject Name *</label>
                                <?php
                                $id = $_GET['sub_id'];
                                $query = "SELECT * FROM subjects WHERE id ='$id'";
                                $select = mysqli_query($con, $query);
                                $row = mysqli_fetch_assoc($select);
                                 ?>
                                <input type="text" placeholder="" class="form-control" name="subject" value="<?php echo $row['subject'] ?>">

                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">

                              <?php
                              $query = "SELECT * FROM classes";
                              $select = mysqli_query($con, $query);
                              // $row = mysqli_fetch_assoc($select);
                               ?>

                                <label>Select Class *</label>
                                <select class="select2 form-control" name="class">
                                  <option value="">Please Select Class *</option>
                                  <?php

                                  while ($row = mysqli_fetch_assoc($select)) {
                                   ?>

                                  <option value="<?php echo $row['class'] ?>">
                                    <?php echo $row['class'] ?>
                                  </option>

                                  <?php
                                }
                                   ?>

                                </select>
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- form end -->

    </div>
    <!-- All Subjects Area End Here -->


<!-- for update assign subjects -->

<?php
if(isset ( $_GET['update_assign_sub'] ) && $_GET['update_assign_sub'] == 1){

?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Assigned Subjects</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Subjects</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- All Subjects Area Start Here -->
    <div class="row">
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Assign New Subject</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="" method="POST">
                        <div class="row">

                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                              <?php
                              $query = "SELECT * FROM subjects";
                              $select = mysqli_query($con, $query);
                              // $row = mysqli_fetch_assoc($select);
                               ?>

                                <label>Select Subjects *</label>
                                <select class="select2 form-control" name="subject">
                                  <option value="">Please Select Subjects *</option>
                                  <?php

                                  while ($row = mysqli_fetch_assoc($select)) {
                                   ?>

                                  <option value="<?php echo $row['id'] ?>">
                                    <?php echo $row['subject'] ?>
                                  </option>

                                  <?php
                                }
                                   ?>

                                </select>

                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">

                              <?php
                              $query = "SELECT * FROM teachers";
                              $select = mysqli_query($con, $query);
                              // $row = mysqli_fetch_assoc($select);
                               ?>

                                <label>Select Teacher *</label>
                                <select class="select2 form-control" name="teacher">
                                  <option value="">Please Select Teacher *</option>
                                  <?php

                                  while ($row = mysqli_fetch_assoc($select)) {
                                   ?>

                                  <option value="<?php echo $row['id'] ?>">
                                    <?php echo $row['fname'] . " " . $row['lname'] ?>
                                  </option>

                                  <?php
                                }
                                   ?>

                                </select>
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_assign_sub" value="Update Assign Sub">Update</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- form end -->
<?php

}
 ?>
