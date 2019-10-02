<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php
if( isset($_GET['delete_event']) && $_GET['delete_event'] == 1) {

		extract($_GET);

		// $sub_id = clean_escape($con, $_GET['sub_id']);

		$ssql = "DELETE FROM events where id = $event_id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			 $success = 'Successfully deleted';
		} else {
			$err = 'Not deleted Successfully';
		}

	}


 ?>

<div class="row">
  <?php

      if (isset($_POST['submit'])) {

        $title = $_POST['title'];
        $des = $_POST['des'];
        $eve_date = $_POST['eve_date'];
        $eve_time = $_POST['eve_time'];

        $eve_date = date("Y-m-d");

        $target_dir = "media/";
         $target_file = $target_dir . basename($_FILES["image"]["name"]);  // media/car2.jpg
        $photo =  basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


        $sql = "SELECT * FROM events where title = '$title'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row['title'] === $title) {
          echo "Event Title already exists";

        } else {
          $query = "INSERT into events (title, des, eve_date, eve_time, photo) VALUES ('$title', '$des', '$eve_date', '$eve_time', '$photo')";

          if (mysqli_query($con, $query)) {
            echo "Succesfully Submitted";
          }

        }

      }

    ?>
</div>


            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Event</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Event</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Event</h3>
                            </div>
                        </div>
                        <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                    <input type="text" placeholder="" class="form-control" name="title">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Description *</label>
                                    <textarea name="des" class="form-control" style="height: 200px;"></textarea>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" class="form-control" name="eve_date">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Time</label>
                                    <input type="text" placeholder="" class="form-control" name="eve_time">
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Photo (150px X 150px)</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Events</h3>
                                </div>

                            </div>
                            <form class="new-added-form" action="" method="POST">
                                <div class="row">

                                  <div class="col-12 form-group">
                                    <table class="table">
                                      <?php
                                      $sql = "SELECT * FROM events";
                                      $select = mysqli_query($con, $sql);
                                      $x = 1;
                                      while ($row = mysqli_fetch_assoc($select)) {
                                        ?>
                                      <tr>
                                        <td><?= $x++; ?></td>
                                        <td><?= $row['title'] ?></td>
                                        <td><?= $row['des'] ?></td>
                                        <td><?= $row['eve_date'] ?></td>
                                        <td><?= $row['eve_time'] ?></td>
                                        <td><?= $row['photo'] ?></td>

                                          <td>
                                              <div class="dropdown">
                                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                      aria-expanded="false">
                                                      <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href= "add-event.php?event=1&delete_event=1&event_id=<?=$row['id'] ?>">Delete</a>
                                                        <a class="dropdown-item" href= "update-website.php?event=1&update_event=1&event_id=<?=$row['id'] ?>"></i>Edit
                                                        </a>
                                                  </div>
                                              </div>
                                          </td>
                                        </td>
                                      </tr>

                                                                              <?php
                                                                            }

                                                                             ?>
                                    </table>


                                  </div>
                                </div>
                            </form>
                        </div>

                      </div>
                </div>
                <!-- Add New Event Area End Here -->


                <?php include 'includes/footer.php' ?>
