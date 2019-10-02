<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_about']) && $_GET['delete_about'] == 1) {

		extract($_GET);

		// $sub_id = clean_escape($con, $_GET['sub_id']);

		$ssql = "DELETE FROM about where id = $about_id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			 $success = 'Successfully deleted';
		} else {
			$err = 'Not deleted Successfully';
		}

	}

 ?>

<?php
$id = $_SESSION['id'];
$sql = "SELECT fname, lname FROM users WHERE id = '$id'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);
$post_name = $row['fname'] . " " . $row['lname'];
 ?>
            <div class="dashboard-content-one">

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add About</h3>
                            </div>

                            <?php
                            // if (isset($_POST['submit'])) {
                            //   $id = $_SESSION['about_id'];
                            //   $sql = "SELECT * FROM about WHERE id = '$id'";
                            //   $select = mysqli_query($con, $sql);
                            //   $row = mysqli_fetch_assoc($select);
                            //
                            // }

                             ?>

                        </div>

                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                  <label>About</label>
                                  <textarea name="about" class="form-control" style="height: 200px;"></textarea>

                              </div>

                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                <table class="table">
                                  <?php
                                  $sql = "SELECT * FROM about";
                                  $select = mysqli_query($con, $sql);
                                  $x = 1;
                                  while ($row = mysqli_fetch_assoc($select)) {
                                    ?>
                                  <tr>
                                    <td><?= $x++; ?></td>
                                    <td><?= $row['about'] ?></td>

                                      <td>
                                          <div class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href= "about.php?about=1&delete_about=1&about_id=<?=$row['id'] ?>">Delete</a>
                                                    <a class="dropdown-item" href= "update-website.php?about=1&update_about=1&about_id=<?=$row['id'] ?>"></i>Edit
                                                    </a>
                                              </div>
                                          </div>
                                      </td>
                                    </td>
                                  </tr>
                                </table>

                                    <?php
                                  }

                                   ?>

                              </div>
                            </div>
                        </form>
                    </div>

                  </div>
              </div><br>

                <?php

                if (isset($_POST['submit'])) {

                  $about = $_POST['about'];

                  $query = "INSERT INTO about (about, person_name) VALUES ('$about', '$post_name')";

                  if (mysqli_query($con, $query)) {
                    echo "Successfully Added";
                  }

                }

              ?>
                <?php include 'includes/footer.php' ?>
