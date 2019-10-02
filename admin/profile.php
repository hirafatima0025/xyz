<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<?php

if ( $_SESSION['user'] == 'admin' ) {

  $sql = "SELECT * FROM users WHERE id = '$id'";
  $select = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($select);
  $id = $_SESSION['id'];


?>

            <div class="dashboard-content-one">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/teacher.jpg" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?= $row['fname'] . " " . $row['lname'] ?></h3>
                                </div>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['phno'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                            </tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['religion'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Subject:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['subject'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['class'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>ID No:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['dob'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['bgroup'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['address'] ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
<?php
  }
?>

<?php

if ( $_SESSION['user'] == 'teacher' ) {

  $sql = "SELECT * FROM teachers WHERE id = '$id'";
  $select = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($select);
  $id = $_SESSION['id'];


?>

<div class="dashboard-content-one">
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="img/figure/teacher.jpg" alt="teacher">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium"><?= $row['fname'] . " " . $row['lname'] ?></h3>
                    </div>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>E-mail:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['phno'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                </tr>
                                    <td>Religion:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['religion'] ?></td>
                                </tr>
                                <tr>
                                    <td>Subject:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['subject'] ?></td>
                                </tr>
                                <tr>
                                    <td>Class:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['class'] ?></td>
                                </tr>
                                <tr>
                                    <td>ID No:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['dob'] ?></td>
                                </tr>
                                <tr>
                                    <td>Blood Group:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['bgroup'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['address'] ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
<?php
}
?>

<?php

if ( $_SESSION['user'] == 'students' ) {

  $sql = "SELECT * FROM students WHERE id = '$id'";
  $select = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($select);
  $id = $_SESSION['id'];


?>

<div class="dashboard-content-one">
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="img/figure/teacher.jpg" alt="teacher">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium"><?= $row['fname'] . " " . $row['lname'] ?></h3>
                    </div>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                              <tr>
                                  <td>Father's Name:</td>
                                  <td class="font-medium text-dark-medium"><?= $row['father'] ?></td>
                              </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['phno'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                </tr>
                                    <td>Religion:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['religion'] ?></td>
                                </tr>
                                <tr>
                                    <td>Subject:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['subject'] ?></td>
                                </tr>
                                <tr>
                                    <td>Class:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['class'] ?></td>
                                </tr>
                                <tr>
                                    <td>Roll No:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['rollno'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['dob'] ?></td>
                                </tr>
                                <tr>
                                    <td>Blood Group:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['bgroup'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td class="font-medium text-dark-medium"><?= $row['address'] ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
<?php
}
?>


                <?php include 'includes/footer.php' ?>
