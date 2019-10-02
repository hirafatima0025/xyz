<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_subject']) && $_GET['delete_subject'] == 1) {

		extract($_GET);

		// $sub_id = clean_escape($con, $_GET['sub_id']);

		$ssql = "DELETE FROM subjects where id = $sub_id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			 $success = 'Successfully deleted';
		} else {
			$err = 'Not deleted Successfully';
		}

	}


 ?>

 <?php

 if ( $_SESSION['user'] == 'admin' ) {

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
                                <form class="new-added-form" action="" method="POST">
                                    <div class="row">

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Subject Name *</label>
                                            <input type="text" placeholder="" class="form-control" name="subject">
                                            <!-- <select class="select2" name="subject">
                                                <option value="">Please Select</option>
                                                <option value="Computer">Computer</option>
                                                <option value="English">English</option>
                                                <option value="Maths">Mathematics</option>
                                                <option value="Economics">Economics</option>
                                                <option value="Chemistry">Chemistry</option>
                                            </select> -->
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
                                        <!-- <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Code</label>
                                            <select class="select2" name="subcode">
                                                <option value="0">Please Select</option>
                                                <option value="00524">00524</option>
                                                <option value="00525">00525</option>
                                                <option value="00526">00526</option>
                                                <option value="00527">00527</option>
                                                <option value="00528">00528</option>
                                            </select>
                                        </div> -->
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- form end -->


                          <?php

                          if (isset($_POST['submit'])) {

                            $subject = $_POST['subject'];
                            $class = $_POST['class'];

                            $query = "INSERT into subjects (subject, class) VALUES ('$subject', '$class')";

                            if (mysqli_query($con, $query)) {
                              echo "Successfully Submitted";
                            }

                          }

                        ?>


                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Subjects</h3>
                                    </div>
                                </div>
                                <!-- <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Exam ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Subject ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="dd/mm/yyyy" class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form> -->
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Subject Name</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $query = "SELECT * FROM subjects";
                                          $select = mysqli_query($con, $query);
                                          while ($row = mysqli_fetch_assoc($select)) {
                                          ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['subject'] ?></td>
                                                <td><?= $row['class'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href= "all-subject.php?subject=1&delete_subject=1&sub_id=<?=$row['id'] ?>"><i
                                                              class="fas fa-times text-orange-red"></i>Delete</a>
                                                              <a class="dropdown-item" href= "update-subject.php?subject=1&update_subject=1&sub_id=<?=$row['id'] ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit
                                                              </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <!-- <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label">#0022</label>
                                                    </div>
                                                </td>
                                                <td>Bangla</td>
                                                <td>Theory</td>
                                                <td>6</td>
                                                <td>02/05/2001</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All Subjects Area End Here -->
	<?php

}
	 ?>


	 <?php

	 if ( $_SESSION['user'] == 'teacher' ) {
		 $id = $_SESSION['id'];
		 $sql = "SELECT * FROM teachers WHERE id = '$id'";
		 $select = mysqli_query($con, $sql);
		 $row = mysqli_fetch_assoc($select);
		 $this_subject = $row['subject'];

	 ?>

	 <div class="dashboard-content-one">
			 <!-- Breadcubs Area Start Here -->
			 <div class="breadcrumbs-area">
					 <h3>Subjects</h3>
					 <ul>
							 <li>
									 <a href="index5.php">Home</a>
							 </li>
							 <li>My Subjects</li>
					 </ul>
			 </div>
			 <!-- Breadcubs Area End Here -->
			 <!-- Class Table Area Start Here -->
			 <div class="card height-auto">
					 <div class="card-body">
							 <div class="heading-layout1">
									 <div class="item-title">
											 <h3>My Subjects</h3>
									 </div>

							 </div>

							 <div class="table-responsive">
									 <table class="table display data-table text-nowrap">
											 <thead>
													 <tr>
															 <th>Sr. No.</th>
															 <th>Subject</th>
													 </tr>
											 </thead>
											 <tbody>
												 <?php
												 $query = "SELECT * FROM subjects WHERE subject = '$this_subject'";
												 $select = mysqli_query($con, $query);
												 while ($row = mysqli_fetch_assoc($select)) {
													 $x = 1;
												 ?>
													 <tr>
															 <td><?= $x; ?></td>
															 <td><?= $row['subject'] ?></td>

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

<?php

}
 ?>


 <?php

 if ( $_SESSION['user'] == 'student' ) {
	 $id = $_SESSION['id'];
	 $sql = "SELECT * FROM students WHERE id = '$id'";
	 $select = mysqli_query($con, $sql);
	 $row = mysqli_fetch_assoc($select);
	 $this_class = $row['class'];

 ?>

 <div class="dashboard-content-one">
		 <!-- Breadcubs Area Start Here -->
		 <div class="breadcrumbs-area">
				 <h3>Subjects</h3>
				 <ul>
						 <li>
								 <a href="index5.php">Home</a>
						 </li>
						 <li>My Subjects</li>
				 </ul>
		 </div>
		 <!-- Breadcubs Area End Here -->
		 <!-- Class Table Area Start Here -->
		 <div class="card height-auto">
				 <div class="card-body">
						 <div class="heading-layout1">
								 <div class="item-title">
										 <h3>My Subjects</h3>
								 </div>

						 </div>

						 <div class="table-responsive">
								 <table class="table display data-table text-nowrap">
										 <thead>
												 <tr>
														 <th>Sr. No.</th>
														 <th>Subject</th>
												 </tr>
										 </thead>
										 <tbody>
											 <?php
											 $query = "SELECT * FROM subjects WHERE class = '$this_class'";
											 $select = mysqli_query($con, $query);
											 while ($row = mysqli_fetch_assoc($select)) {
												 $x = 1;
											 ?>
												 <tr>
														 <td><?= $x; ?></td>
														 <td><?= $row['subject'] ?></td>

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

<?php

}
?>





                <?php include 'includes/footer.php' ?>
