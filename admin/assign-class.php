<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Assign Class</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Assign Class</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- All classs Area Start Here -->
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Assign Class</h3>
                                    </div>
                                </div>
                                <form class="new-added-form" action="" method="POST">
                                    <div class="row">

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

                                              <option value="<?php echo $row['id'] ?>">
                                                <?php echo $row['class'] ?>
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

                                            <label>Select Teacher *</label>
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

                            $class_id = $_POST['class'];
                            $tea_id = $_POST['teacher'];


                            $query = "INSERT into assign_class (tea_id, class_id) VALUES ('$tea_id', '$class_id')";

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
                                        <h3>Assigned Classes</h3>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>

                                            <tr>

                                                <th>Sr. No.</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $query = "SELECT classes.class, teachers.fname, teachers.lname, assign_class.id FROM assign_class
                                          INNER JOIN teachers ON assign_class.tea_id = teachers.id
                                          LEFT JOIN classes ON assign_class.class_id = classes.id";
                                          $select = mysqli_query($con, $query);
                                          $x = 1;
                                          while ($row = mysqli_fetch_assoc($select)) {
                                          ?>
                                            <tr>
                                                <td><?= $x++; ?></td>
                                                <td><?= $row['fname'] . " " . $row['lname'] ?></td>
                                                <td><?= $row['class'] ?></td>

                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                          <a class="dropdown-item" href="assign-class.php?id=<?= $row['id'] ?>"><i class="fas fa-times text-orange-red" name="delete_assign_class"></i>Delete</a>
                                                          <a class="dropdown-item" href="update-subject.php?id=<?= $row['id'] ?>" name="update_assign_class"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
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
