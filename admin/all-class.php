<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php
if ( $_SESSION['user'] == 'admin' ) {
	if(empty($_SESSION['id'])) {
		header("location:login.php");
	}

		// $id = $_SESSION['id'];
		// $sql = "SELECT * FROM classes";
		// $select = mysqli_query($con, $sql);
		// $row = mysqli_fetch_assoc($select);

		 ?>

		            <div class="dashboard-content-one">
		                <!-- Breadcubs Area Start Here -->
		                <div class="breadcrumbs-area">
		                    <h3>Classes</h3>
		                    <ul>
		                        <li>
		                            <a href="index.php">Home</a>
		                        </li>
		                        <li>All Classes</li>
		                    </ul>
		                </div>
		                <!-- Breadcubs Area End Here -->
		                <!-- Class Table Area Start Here -->
		                <div class="card height-auto">
		                    <div class="card-body">
		                        <div class="heading-layout1">
		                            <div class="item-title">
		                                <h3>All Classes</h3>
		                            </div>

		                        </div>

		                        <div class="table-responsive">
		                            <table class="table display data-table text-nowrap">
		                                <thead>
		                                    <tr>
		                                        <th>Sr. No.</th>
		                                        <th>Class</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                  <?php
		                                  $query = "SELECT * FROM classes";
		                                  $select = mysqli_query($con, $query);
																			$x = 1;
		                                  while ($row = mysqli_fetch_assoc($select)) {

		                                  ?>
		                                    <tr>
		                                        <td><?= $x++; ?></td>
		                                        <td><?= $row['class'] ?></td>

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
		                <!-- Class Table Area End Here -->

<?php } ?>

<?php
if ( $_SESSION['user'] == 'teacher' ) {
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
		                    <h3>Classes</h3>
		                    <ul>
		                        <li>
		                            <a href="index5.php">Home</a>
		                        </li>
		                        <li>My Classes</li>
		                    </ul>
		                </div>
		                <!-- Breadcubs Area End Here -->
		                <!-- Class Table Area Start Here -->
		                <div class="card height-auto">
		                    <div class="card-body">
		                        <div class="heading-layout1">
		                            <div class="item-title">
		                                <h3>My Classes</h3>
		                            </div>

		                        </div>

		                        <div class="table-responsive">
		                            <table class="table display data-table text-nowrap">
		                                <thead>
		                                    <tr>
		                                        <th>Sr. No.</th>
		                                        <th>Class</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                  <?php
		                                  $query = "SELECT * FROM classes WHERE class = '$this_class'";
		                                  $select = mysqli_query($con, $query);
		                                  while ($row = mysqli_fetch_assoc($select)) {
		                                    $x = 1;
		                                  ?>
		                                    <tr>
		                                        <td><?= $x; ?></td>
		                                        <td><?= $row['class'] ?></td>

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
		                <!-- Class Table Area End Here -->

<?php } ?>


                <?php include 'includes/footer.php' ?>
