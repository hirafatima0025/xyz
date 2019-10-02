<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<?php
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);
?>


            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <!-- <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Teacher Details</li>
                    </ul>
                </div> -->
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
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
                                    <!-- <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <!-- <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">Steven Johnson</td>
                                            </tr> -->
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
                                            <!-- <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium">Steve Jones</td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="font-medium text-dark-medium">Naomi Rose</td>
                                            </tr>
                                            <tr> -->
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['religion'] ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium">07.08.2016</td>
                                            </tr> -->

                                            <tr>
                                                <td>Subject:</td>
                                                <td class="font-medium text-dark-medium"><?= $row['subject'] ?></td>
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

                <?php include 'includes/footer.php' ?>
