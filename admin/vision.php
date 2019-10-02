<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_vision']) && $_GET['delete_vision'] == 1) {

		extract($_GET);

		$ssql = "DELETE FROM vision where id = $vision_id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			 $success = 'Successfully deleted';
		} else {
			$err = 'Not deleted Successfully';
		}

	}


  if( isset($_GET['delete_mission']) && $_GET['delete_mission'] == 1) {

  		extract($_GET);

  		$ssql = "DELETE FROM mission where id = $mission_id";

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
                                <h3>Add Mission</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                  <label>Mission</label>
                                  <textarea name="mission" class="form-control" style="height: 200px;"></textarea>
                              </div>


                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit_mission">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><br>


                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Vision</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                  <label>Vision</label>
                                  <textarea name="vision" class="form-control" style="height: 200px;"></textarea>
                              </div>


                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit_vision">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- show -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Vision</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                <table class="table">
                                  <?php
                                  $sql = "SELECT * FROM vision";
                                  $select = mysqli_query($con, $sql);
                                  $x = 1;
                                  while ($row = mysqli_fetch_assoc($select)) {
                                    ?>
                                  <tr>
                                    <td><?= $x++; ?></td>
                                    <td><?= $row['vision'] ?></td>

                                      <td>
                                          <div class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href= "vision.php?vision=1&delete_vision=1&vision_id=<?=$row['id'] ?>">Delete</a>
                                                    <a class="dropdown-item" href= "update-website.php?vision=1&update_vision=1&vision_id=<?=$row['id'] ?>"></i>Edit
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

                  <!-- mission -->

                  <!-- show -->
                  <div class="card height-auto">
                      <div class="card-body">
                          <div class="heading-layout1">
                              <div class="item-title">
                                  <h3>Mission</h3>
                              </div>

                          </div>
                          <form class="new-added-form" action="" method="POST">
                              <div class="row">

                                <div class="col-12 form-group">
                                  <table class="table">
                                    <?php
                                    $sql = "SELECT * FROM mission";
                                    $select = mysqli_query($con, $sql);
                                    $x = 1;
                                    while ($row = mysqli_fetch_assoc($select)) {
                                      ?>
                                    <tr>
                                      <td><?= $x++; ?></td>
                                      <td><?= $row['mission'] ?></td>

                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href= "vision.php?mission=1&delete_mission=1&mission_id=<?=$row['id'] ?>">Delete</a>
                                                      <a class="dropdown-item" href= "update-website.php?mission=1&update_mission=1&mission_id=<?=$row['id'] ?>"></i>Edit
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
              </div> <br>




                <?php


                if (isset($_POST['submit_mission'])) {

                  $mission = $_POST['mission'];

                  $query = "INSERT INTO mission (mission, person_name) VALUES ('$mission', '$post_name')";

                  if (mysqli_query($con, $query)) {
                    echo "Successfully Added";
                  }

                }

                if (isset($_POST['submit_vision'])) {

                  $vision = $_POST['vision'];

                  $query = "INSERT INTO vision (vision, person_name) VALUES ('$vision', '$post_name')";

                  if (mysqli_query($con, $query)) {
                    echo "Successfully Added";
                  }

                }

              ?>

                <?php include 'includes/footer.php' ?>
