<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['delete_assign_sub']) && $_GET['delete_assign_sub'] == 1) {

		extract($_GET);

  $ssql = "DELETE FROM assign_sub where id = $delete_sub_id";

  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

  if( $qr ) {
     echo $success = 'Subject has been successfully updated';
  } else {
    echo $err = 'Subject was not updated Successfully';
  }

}

 ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Assign Subject</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Assign Subject</li>
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
                                        <h3>Assign Subject</h3>
                                    </div>
                                </div>
                                <form class="new-added-form" action="" method="POST">
                                    <div class="row">

                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                          <?php
                                          $query = "SELECT * FROM subjects";
                                          $select = mysqli_query($con, $query);
                                          // $row = mysqli_fetch_assoc($select);
                                           ?>

                                            <label>Select Subject *</label>
                                            <select class="select2 form-control" name="subject">
                                              <option value="">Please Select Subject *</option>
                                              <?php

                                              while ($row = mysqli_fetch_assoc($select)) {
                                               ?>

                                              <option value="<?php echo $row['id'] ?>">
                                                <?php echo $row['subject'] ?>
                                              </option>

                                              <?php
                                            }
                                               ?>

                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">

                                          <?php
                                          $query = "SELECT * FROM teachers";
                                          $select = mysqli_query($con, $query);
                                          // $row = mysqli_fetch_assoc($select);
                                           ?>

                                            <label>Select Class *</label>
                                            <select class="select2 form-control" name="teacher">
                                              <option value="">Please Select Teacher *</option>
                                              <?php

                                              while ($row = mysqli_fetch_assoc($select)) {
                                               ?>

                                              <option value="<?php echo $row['id'] ?>">
                                                <?php echo $row['fname'] . " " . $row['lname'] ?>
                                              </option>

                                              <?php
                                            }
                                               ?>

                                            </select>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- form end -->

                          <?php

                          if (isset($_POST['submit'])) {

                            $sub_id = $_POST['subject'];
                            $tea_id = $_POST['teacher'];
                            $query = "INSERT into assign_sub (tea_id, sub_id) VALUES ('$tea_id', '$sub_id')";

                            if (mysqli_query($con, $query)) {
                              echo "Successfully Assigned";
                            }

                          }


                          ?>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Assigned Subjects</h3>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Sr. No.
                                                </th>
                                                <th>Subjects Names</th>

                                                <th>Teachers Names</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <?php
                                              $query = "SELECT subjects.subject, teachers.fname, teachers.lname, assign_sub.id FROM assign_sub
                                              INNER JOIN teachers ON assign_sub.tea_id = teachers.id
                                              LEFT JOIN subjects ON assign_sub.sub_id = subjects.id";
                                              $select = mysqli_query($con, $query);
                                              $x = 1;
                                              while ($row = mysqli_fetch_assoc($select)) {
                                              ?>
                                                <td>
                                                  <?= $x++; ?>
                                                </td>
                                                <td><?= $row['subject'] ?></td>
                                                <td><?= $row['fname'] . " " . $row['lname'] ?></td>

                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                          <a class="dropdown-item" href="assign-subject.php?assign_sub=1&delete_assign_sub=1&delete_sub_id=<?= $row['id'] ?>"><i class="fas fa-times text-orange-red" name="delete_assign_sub"></i>Delete</a>
                                                          <a class="dropdown-item" href="update-subject.php?assign_sub=1&update_assign_sub=1&update_sub_id=<?= $row['id'] ?>" name="update_assign_sub"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                        </div>
                                                    </div>
                                                </td>
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
                <!-- All Subjects Area End Here -->

                <?php include 'includes/footer.php' ?>
