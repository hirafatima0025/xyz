<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_quote']) && $_GET['delete_quote'] == 1) {

		extract($_GET);

		// $sub_id = clean_escape($con, $_GET['sub_id']);

		$ssql = "DELETE FROM quote where id = $quote_id";

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

                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Quote</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class=" col-12 form-group">
                                  <label>Quote</label>
                                  <textarea name="quote" class="form-control" style="height: 200px;"></textarea>
                              </div>


                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Quote Area End Here -->

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Quote</h3>
                            </div>

                        </div>
                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                <table class="table">
                                  <?php
                                  $sql = "SELECT * FROM quote";
                                  $select = mysqli_query($con, $sql);
                                  $x = 1;
                                  while ($row = mysqli_fetch_assoc($select)) {
                                    ?>
                                  <tr>
                                    <td><?= $x++; ?></td>
                                    <td><?= $row['quote'] ?></td>

                                      <td>
                                          <div class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                  aria-expanded="false">
                                                  <!-- <span class="flaticon-more-button-of-three-dots"></span> -->
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href= "quote.php?quote=1&delete_quote=1&quote_id=<?=$row['id'] ?>">Delete</a>
                                                    <a class="dropdown-item" href= "update-website.php?quote=1&update_quote=1&quote_id=<?=$row['id'] ?>"></i>Edit
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

                  $quote = $_POST['quote'];

                  $query = "INSERT INTO quote (quote, person_name) VALUES ('$quote', '$post_name')";

                  if (mysqli_query($con, $query)) {
                    echo "Successfully Added";
                  }

                }

              ?>

                <?php include 'includes/footer.php' ?>
