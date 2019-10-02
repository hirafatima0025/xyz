<?php ob_start(); ?>
<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php
if(empty($_SESSION['id'])) {
	header("location:login.php");
}

 ?>
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Admin</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Students</div>

																				<?php
																				$query = "SELECT count( * ) as  total_students FROM students";
																				$select = mysqli_query($con, $query);
																				$row = mysqli_fetch_assoc($select);
																				$total_students = $row['total_students'];
																				?>

                                        <div class="item-number"><span class="counter" data-num="<?= $total_students ?>"><?= $total_students ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Teachers</div>

																				<?php
																				$query = "SELECT count( * ) as  total_teachers FROM teachers";
																				$select = mysqli_query($con, $query);
																				$row = mysqli_fetch_assoc($select);
																				$total_teachers = $row['total_teachers'];
																				?>

                                        <div class="item-number"><span class="counter" data-num="<?= $total_teachers ?>"><?= $total_teachers ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-couple text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Notices</div>

																				<?php
																				$query = "SELECT count( * ) as  total_notices FROM notices";
																				$select = mysqli_query($con, $query);
																				$row = mysqli_fetch_assoc($select);
																				$total_notices = $row['total_notices'];
																				?>

                                        <div class="item-number"><span class="counter" data-num="<?= $total_notices ?>"><?= $total_notices ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Events</div>
                                        <div class="item-number"><span class="counter" data-num="5">5</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row gutters-20">
                    <!-- <div class="col-12 col-xl-8 col-6-xxxl">
                        <div class="card dashboard-card-one pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Earnings</h3>
                                    </div>
                                    <div class="dropdown">
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
                                    </div>
                                </div>
                                <div class="earning-report">
                                    <div class="item-content">
                                        <div class="single-item pseudo-bg-blue">
                                            <h4>Total Collections</h4>
                                            <span>75,000</span>
                                        </div>
                                        <div class="single-item pseudo-bg-red">
                                            <h4>Fees Collection</h4>
                                            <span>15,000</span>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="date-dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">Jan 20, 2019</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Jan 20, 2019</a>
                                            <a class="dropdown-item" href="#">Jan 20, 2021</a>
                                            <a class="dropdown-item" href="#">Jan 20, 2020</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="earning-chart-wrap">
                                    <canvas id="earning-line-chart" width="660" height="320"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-12 col-xl-4 col-3-xxxl">
                        <div class="card dashboard-card-two pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Expenses</h3>
                                    </div>
                                    <div class="dropdown">
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
                                    </div>
                                </div>
                                <div class="expense-report">
                                    <div class="monthly-expense pseudo-bg-Aquamarine">
                                        <div class="expense-date">Jan 2019</div>
                                        <div class="expense-amount"><span>$</span> 15,000</div>
                                    </div>
                                    <div class="monthly-expense pseudo-bg-blue">
                                        <div class="expense-date">Feb 2019</div>
                                        <div class="expense-amount"><span>$</span> 10,000</div>
                                    </div>
                                    <div class="monthly-expense pseudo-bg-yellow">
                                        <div class="expense-date">Mar 2019</div>
                                        <div class="expense-amount"><span>$</span> 8,000</div>
                                    </div>
                                </div>
                                <div class="expense-chart-wrap">
                                    <canvas id="expense-bar-chart" width="100" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 col-xl-6 col-3-xxxl">
                        <div class="card dashboard-card-three pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Students</h3>
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
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
																			<h4 class="item-title">Male Students</h4>

																			<?php
																			$query = "SELECT count( * ) as  total_males FROM students WHERE gender = 'male'";
																			$select = mysqli_query($con, $query);
																			$row = mysqli_fetch_assoc($select);
																			$total_males = $row['total_males'];
																			?>

																			<div class="item-number"><?= $total_males ?></div>

                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
																			<h4 class="item-title">Female Students</h4>

																			<?php
																			$query = "SELECT count( * ) as  total_females FROM students WHERE gender = 'female'";
																			$select = mysqli_query($con, $query);
																			$row = mysqli_fetch_assoc($select);
																			$total_females = $row['total_females'];
																			?>

																			<div class="item-number"><?= $total_females ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-four pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Event Calender</h3>
                                    </div>
                                    <div class="dropdown">
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
                                    </div>
                                </div>
                                <div class="calender-wrap">
                                    <div id="fc-calender" class="fc-calender"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-five pd-b-20">
                            <div class="card-body pd-b-14">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Website Traffic</h3>
                                    </div>
                                    <div class="dropdown">
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
                                    </div>
                                </div>
                                <h6 class="traffic-title">Unique Visitors</h6>
                                <div class="traffic-number">2,590</div>
                                <div class="traffic-bar">
                                    <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct">
                                    </div>
                                    <div class="search" data-toggle="tooltip" data-placement="top" title="Search">
                                    </div>
                                    <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                                    </div>
                                    <div class="social" data-toggle="tooltip" data-placement="top" title="Social">
                                    </div>
                                </div>
                                <div class="traffic-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="t-title pseudo-bg-Aquamarine">Direct</td>
                                                <td>12,890</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-blue">Search</td>
                                                <td>7,245</td>
                                                <td>27%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-yellow">Referrals</td>
                                                <td>4,256</td>
                                                <td>8%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-red">Social</td>
                                                <td>500</td>
                                                <td>7%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Notice Board</h3>
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
                                <div class="notice-box-wrap">

																	<?php
                                  $query = "SELECT * FROM notices";
                                  $select = mysqli_query($con, $query);
                                  while ($row = mysqli_fetch_assoc($select)) {
                                  ?>

                                    <div class="notice-list">
																			<div class="post-date bg-skyblue"><?= $row['not_date'] ?></div>
																			<h5 class="notice-title"><?= $row['title'] ?></h5>
																			<h6 class="notice-title"><?= $row['detail'] ?></h6>
																			<div class="entry-meta"> <?= $row['post_name'] ?>  </div>
                                    </div>

																		<?php
                                  }

                                     ?>

                                    <!-- <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                                printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Content End Here -->
                <!-- Social Media Start Here -->
                <div class="row gutters-20">
                    <div class="col-lg-3 col-sm-6 col-12">
											<a href="https://www.facebook.com/" target="_blank">
												<div class="card dashboard-card-seven">
                            <div class="social-media bg-fb hover-fb">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Facebook</h6>
                                    </div>
                                </div>
                                <!-- <div class="social-like">30,000</div> -->
                            </div>
                        </div>
											</a>

                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
											<a href="https://twitter.com/login" target="_blank">
												<div class="card dashboard-card-seven">
                            <div class="social-media bg-twitter hover-twitter">
                                <div class="media media-none--lg">
                                        <div class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Twitter</h6>
                                        </div>
                                </div>
                                <!-- <div class="social-like">1,11,000</div> -->
                            </div>
                        </div>
											</a>

                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
											<a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank">
												<div class="card dashboard-card-seven">
                            <div class="social-media bg-gplus hover-gplus">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-google-plus-g"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">Googleplus</h6>
                                    </div>
                                </div>
                                <!-- <div class="social-like">19,000</div> -->
                            </div>
                        </div>
											</a>

                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
											<a href="https://pk.linkedin.com/" target="_blank">
												<div class="card dashboard-card-seven">
                            <div class="social-media bg-linkedin hover-linked">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <h6 class="item-title">LinkedIn</h6>
                                    </div>
                                </div>
                                <!-- <div class="social-like">45,000</div> -->
                            </div>
                        </div>

											</a>

                    </div>
                </div>
                <!-- Social Media End Here -->


<?php include 'includes/footer.php' ?>
