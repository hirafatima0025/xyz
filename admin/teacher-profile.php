<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<?php
if(empty($_SESSION['id'])) {
	header("location:../login.php");
}

$id = $_SESSION['id'];
$sql = "SELECT * FROM teachers WHERE id = '$id'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);

 ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>My Profile</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Student Info Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card dashboard-card-ten">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>About Me</h3>
                                    </div>
                                    <!-- <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="student-info">
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                            <img src="img/figure/student.png" class="media-img-auto" alt="student">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="item-title"><?= $row['fname'] . " " . $row['lname'] ?></h3>
                                        </div>
                                    </div>
                                    <div class="table-responsive info-table">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['father'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Birth:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['dob'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Religion:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['religion'] ?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>Father Occupation:</td>
                                                    <td class="font-medium text-dark-medium">Graphic Designer</td>
                                                </tr> -->
                                                <tr>
                                                    <td>E-Mail:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Admission Date:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Class:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['class'] ?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>Section:</td>
                                                    <td class="font-medium text-dark-medium">Pink</td>
                                                </tr> -->
                                                <tr>
                                                    <td>Roll:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['rollno'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['address'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone:</td>
                                                    <td class="font-medium text-dark-medium"><?= $row['phno'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
