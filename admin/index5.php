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
$this_class = $row['class'];

 ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Info</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Dashboard summery Start Here -->
                    <div class="col-12 col-4-xxxl">
                        <div class="row">
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-magenta">
                                        <i class="flaticon-classmates text-magenta"></i>
                                    </div>
                                    <div class="item-content">
																			<?php
																			$query = "SELECT count( * ) as  total_students FROM students";
																			$select = mysqli_query($con, $query);
																			$row = mysqli_fetch_assoc($select);
																			$total_students = $row['total_students'];
																			?>
                                        <div class="item-number"><span class="counter" data-num="<?= $total_students ?>"><?= $total_students ?></span></div>
                                        <div class="item-title">Total Students</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-shopping-list text-blue"></i>
                                    </div>
                                    <div class="item-content">
																			<?php
																			$query = "SELECT count( * ) as  total_students FROM students WHERE class = '$this_class'";
																			$select = mysqli_query($con, $query);
																			$row = mysqli_fetch_assoc($select);
																			$total_students = $row['total_students'];
																			?>
                                        <div class="item-number"><span class="counter" data-num="<?= $total_students ?>"><?= $total_students ?></span></div>
                                        <div class="item-title">My Students</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-mortarboard text-orange"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span class="counter" data-num="23890">23,890</span></div>
                                        <div class="item-title">Graduate Studes</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                <div class="dashboard-summery-two">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-number"><span>$</span><span class="counter" data-num="2102050">21,02,050</span></div>
                                        <div class="item-title">Total Income</div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Dashboard summery End Here -->
                    <!-- Students Chart End Here -->
                    <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-three">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Students</h3>
                                    </div>

                                </div>
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                </div>
                                <!-- <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Female Students</h4>
                                        <div class="item-number">10,500</div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Male Students</h4>
                                        <div class="item-number">24,500</div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Students Chart End Here -->
                    <!-- Notice Board Start Here -->
                    <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-six">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Notifications</h3>
                                    </div>

                                </div>
                                <div class="notice-box-wrap">
																	<?php
																	$query = "SELECT * FROM notices";
																	$select = mysqli_query($con, $query);
																	while ($row = mysqli_fetch_assoc($select)) {
																	?>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue"><?= $row['not_date'] ?></div>
                                        <h6 class="notice-title"><?= $row['title'] ?></h6>
																				<h6 class="notice-title"><?= $row['detail'] ?></h6>
                                        <div class="entry-meta">  <?= $row['post_name'] ?></div>
                                    </div>
																		<?php
																	}
																		 ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Notice Board End Here -->
                </div>
                <!-- Student Table Area Start Here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>My Students</h3>
                                    </div>
                                </div>
                                <div class="table-box-wrap">
                                    <div class="table-responsive student-table-box">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>

																												<th>ID</th>
				                                                <th>Photo</th>
				                                                <th>Name</th>
				                                                <th>Father's Name</th>
				                                                <th>Phone</th>
				                                                <th>E-mail</th>
				                                                <th>Gender</th>
				                                                <th>Class</th>
				                                                <th>Address</th>
				                                                <th>Date Of Birth</th>
                                                </tr>
                                            </thead>
                                            <tbody>
																							<?php
																							$query = "SELECT * FROM students WHERE class = '$this_class'";
																							$select = mysqli_query($con, $query);
																							while ($row = mysqli_fetch_assoc($select)) {
																							?>
                                                <tr>
																									<td><?= $row['id'] ?></td>
																									<td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
																									<td><?= $row['fname'] . " " . $row['lname'] ?></td>
																									<td><?= $row['father'] ?></td>
																									<td><?= $row['phno'] ?></td>
																									<td><?= $row['email'] ?></td>
																									<td><?= $row['gender'] ?></td>
																									<td><?= $row['class'] ?></td>
																									<td><?= $row['address'] ?></td>
																									<td><?= $row['dob'] ?></td>

                                                </tr>
																								<?php
		                                            }
		                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->


                <?php include 'includes/footer.php' ?>
