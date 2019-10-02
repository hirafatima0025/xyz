<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>


<?php
if(isset ( $_GET['update_teacher'] ) && $_GET['update_teacher'] == 1){
$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = '$id'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);
?>

<div class="dashboard-content-one">

  <!-- Add New Teacher Area Start Here -->
  <div class="card height-auto">
      <div class="card-body">
          <div class="heading-layout1">
              <div class="item-title">
                  <h3>Add New Teacher</h3>
              </div>
          </div>
          <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>First Name *</label>
                      <input type="text" placeholder="" class="form-control" name="fname" value="<?php echo $row['fname']; ?>">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Last Name *</label>
                      <input type="text" placeholder="" class="form-control" name="lname" value="<?php echo $row['lname']; ?>">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Gender *</label>
                      <select class="select2" name="gender">

                        <option value="<?php echo $row['gender'];?>" selected><?php echo $row['gender'];?></option>

                          <option value="">Please Select Gender *</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>

                      </select>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Date Of Birth *</label>
                      <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="dob" value="<?php echo $row['dob']; ?>">
                      <i class="far fa-calendar-alt"></i>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Blood Group *</label>
                      <select class="select2" name="bgroup">
                        <option value="<?php echo $row['bgroup'];?>" selected><?php echo $row['bgroup'];?></option>

                          <option value="">Please Select Group *</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                      </select>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Religion *</label>
                      <select class="select2" name="religion">
                        <option value="<?php echo $row['religion'];?>" selected><?php echo $row['religion'];?></option>

                          <option value="">Please Select Religion *</option>
                          <option value="Islam">Islam</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Christian">Christian</option>
                          <option value="Others">Others</option>
                      </select>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>E-Mail</label>
                      <input type="email" placeholder="" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">

                      <label>Select Class *</label>
                      <select class="select2" name="class">
                        <option value="<?php echo $row['class'];?>" selected><?php echo $row['class'];?></option>

                        <option value="">Please Select Class *</option>
                        <?php
                        $query = "SELECT * FROM classes";
                        $select = mysqli_query($con, $query);

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
                  <div class="col-xl-3 col-lg-6 col-12 form-group">

                      <label>Select Subjects *</label>
                      <select class="select2" name="subject">
                        <option value="<?php echo $row['subject'] ?>" selected><?php echo $row['subject'] ?></option>

                        <option value="">Please Select Subject *</option>
                        <?php
                        $query = "SELECT * FROM subjects";
                        $select = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($select)) {
                         ?>

                        <option value="<?php echo $row['subject'] ?>">
                          <?php echo $row['subject'] ?>
                        </option>

                        <?php
                      }
                         ?>

                      </select>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Address</label>
                      <input type="text" placeholder="" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12 form-group">
                      <label>Phone</label>
                      <input type="text" placeholder="" class="form-control" name="phno" value="<?php echo $row['phno']; ?>">
                  </div>
                  <div class="col-lg-6 col-12 form-group mg-t-30">
                      <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                      <input type="file" name="image" class="form-control-file" value="<?php echo $row['profile']; ?>">
                  </div>
                  <div class="col-12 form-group mg-t-8">
                      <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit" value="update">Update</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!-- Add New Teacher Area End Here -->
  <?php
}
   ?>

<?php
if (isset($_POST['submit'])) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $bgroup = $_POST['bgroup'];
  $religion = $_POST['religion'];
  $email = $_POST['email'];
  $class = $_POST['class'];
  $subject = $_POST['subject'];
  $address = $_POST['address'];
  $phno = $_POST['phno'];

  $target_dir = "media/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $profile =  basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$sql = "UPDATE teachers SET fname = '$fname', lname = '$lname', gender = '$gender', dob = '$dob', bgroup = '$bgroup', religion = '$religion', email = '$email', class = '$class', subject = '$subject', address = '$address', phno = '$phno' WHERE id = '$id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "Successfully Updated";
    }


}


?>

<?php
if(isset ( $_GET['update_student'] ) && $_GET['update_student'] == 1){
  $id = $_GET['student_id'];
  $query = "SELECT * FROM students WHERE id ='$id'";
  $select = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($select);

?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Update Student</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Update Students</h3>
                </div>
            </div>
            <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" placeholder="" class="form-control" name="fname" value="<?= $row['fname'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" placeholder="" class="form-control" name="lname" value="<?= $row['lname'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Father's Name *</label>
                        <input type="text" placeholder="" class="form-control" name="father" value="<?= $row['father'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="select2 form-control" name="gender">
                          <option value="<?php echo $row['gender'];?>" selected><?php echo $row['gender'];?></option>
                            <option value="">Please Select Gender *</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                            data-position='bottom right' name="dob" value="<?= $row['dob'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Roll No.</label>
                        <input type="text" placeholder="" class="form-control" name="rollno" value="<?= $row['rollno'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Blood Group *</label>
                        <select class="select2 form-control"  name="bgroup">
                          <option value="<?php echo $row['bgroup'];?>" selected><?php echo $row['bgroup'];?></option>

                            <option value="">Please Select Group *</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Religion *</label>
                        <select class="select2 form-control"  name="religion">
                          <option value="<?php echo $row['religion'];?>" selected><?php echo $row['religion'];?></option>

                            <option value="">Please Select Religion *</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" placeholder="" class="form-control" name="email" value="<?= $row['email'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">

                        <label>Select Class *</label>
                        <select class="select2 form-control" name="class">
                          <option value="<?php echo $row['class'];?>" selected><?php echo $row['class'];?></option>

                          <option value="">Please Select Class *</option>
                          <?php
                          $query = "SELECT * FROM classes";
                          $select = mysqli_query($con, $query);

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
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="" class="form-control" name="phno" value="<?= $row['phno'] ?>">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" placeholder="" class="form-control" name="address" value="<?= $row['address']; ?>">
                    </div>
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                        <input type="file" name="image" class="form-control-file" value="<?= $row['profile']; ?>">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_student">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php } ?>

<?php
if (isset($_POST['update_student'])) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $father = $_POST['father'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $rollno = $_POST['rollno'];
  $bgroup = $_POST['bgroup'];
  $religion = $_POST['religion'];
  $email = $_POST['email'];
  $class = $_POST['class'];
  $address = $_POST['address'];
  $phno = $_POST['phno'];

  $target_dir = "media/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $profile =  basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$sql = "UPDATE students SET fname = '$fname', lname = '$lname', father = '$father', gender = '$gender', dob = '$dob', rollno = '$rollno', bgroup = '$bgroup', religion = '$religion', email = '$email', class = '$class', phno = '$phno', address = '$address', profile = '$profile' WHERE id = '$id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "Successfully Updated";
    }

}


?>
