<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<!-- <script type="text/javascript">
  $(document).ready(function() {
    $("#show_stu").click(function() {
      $("#student").slideToggle(1000);
    });
  });
</script> -->

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Students Data</h3>
                            </div>
                          
                        </div>


                         <!-- all students -->

                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $query = "SELECT * FROM students";
                                  $select = mysqli_query($con, $query);
                                  while ($row = mysqli_fetch_assoc($select)) {
                                  ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                        <td><?= $row['fname'] . " " . $row['lname'] ?></td>
                                        <td><?= $row['father'] ?></td>
                                        <td><?= $row['phno'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['gender'] ?></td>
                                        <td><?= $row['class'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['dob'] ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href= "all-student.php?student=1&delete_student=1&student_id=<?=$row['id'] ?>">Delete</a>
                                                    <a class="dropdown-item" href= "update.php?student=1&update_student=1&student_id=<?=$row['id'] ?>"></i>Edit
                                                    </a>
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
                <!-- Student Table Area End Here -->

                <?php include 'includes/footer.php' ?>
