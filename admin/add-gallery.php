<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_photo']) && $_GET['delete_photo'] == 1) {

		extract($_GET);

		// $sub_id = clean_escape($con, $_GET['sub_id']);

		$ssql = "DELETE FROM gallery where id = $photo_id";

		$qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

		if( $qr ) {
			 $success = 'Successfully deleted';
		} else {
			$err = 'Not deleted Successfully';
		}

	}

 ?>



            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Gallery</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Photo</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Photo</h3>
                            </div>
                        </div>
                        <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">

                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Photo (150px X 150px)</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Add</button>
                                </div>
                            </div>
                        </form>

                    </div>


                    <!-- show gallery -->

                    <!-- Add New Teacher Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Gallery</h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
                              <table class="table">
                                <?php
                                $sql = "SELECT * FROM gallery";
                                $select = mysqli_query($con, $sql);
                                $x = 1;
                                while ($row = mysqli_fetch_assoc($select)) {
                                  ?>
                                  <tr>
                                    <td><?= $x++; ?></td>
                                    <td><img src="media/<?= $row['pic_name'] ?>" alt="photo" width="150px" height="150px"></td>

                                      <td>
                                          <div class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href= "add-gallery.php?photo=1&delete_photo=1&photo_id=<?=$row['id'] ?>">Delete</a>
                                                    <!-- <a class="dropdown-item" href= "update-website.php?photo=1&update_photo=1&photo_id=<?=$row['id'] ?>"></i>Edit
                                                    </a> -->
                                              </div>
                                          </div>
                                      </td>
                                    </td>
                                  </tr>
                                <?php } ?>
                              </table>
                            </form>

                        </div>
                </div>
                <!-- Add New Teacher Area End Here -->


                          <?php


                              if (isset($_POST['submit'])) {

                                $target_dir = "media/";
                                 $target_file = $target_dir . basename($_FILES["image"]["name"]);  // media/car2.jpg
                                $profile =  basename($_FILES["image"]["name"]);
                                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


                                $sql = "SELECT * FROM gallery where pic_name = '$profile'";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);

                                if ($row['pic_name'] === $profile) {
                                  echo "Photo already exists";

                                } else {
                                  $query = "INSERT into gallery (pic_name) VALUES ('$profile')";

                                  if (mysqli_query($con, $query)) {
                                    echo "Succesfully Added";
                                  }

                                }

                              }

                            ?>


                <?php include 'includes/footer.php' ?>
