<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>


            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add New Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Teacher</h3>
                            </div>
                           <!-- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div> -->
                        </div>
                        <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="fname">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="" class="form-control" name="lname">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker" name="dob">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>ID No</label>
                                    <input type="text" placeholder="" class="form-control" name="idno">
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Blood Group *</label>
                                    <select class="select2" name="bgroup">
                                        <option value="">Please Select Group *</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion *</label>
                                    <select class="select2" name="religion">
                                        <option value="">Please Select Religion *</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="" class="form-control" name="email">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">

                                    <label>Select Class *</label>
                                    <select class="select2" name="class">
                                      <option value="">Please Select Class *</option>
                                      <?php
                                      $query = "SELECT * FROM classes";
                                      $select = mysqli_query($con, $query);

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
                                <div class="col-xl-3 col-lg-6 col-12 form-group">

                                    <label>Select Subjects *</label>
                                    <select class="select2" name="subject">
                                      <option value="">Please Select Subject *</option>
                                      <?php
                                      $query = "SELECT * FROM subjects";
                                      $select = mysqli_query($con, $query);

                                      while ($row = mysqli_fetch_assoc($select)) {
                                       ?>

                                      <option value="<?php echo $row['subject'] ?>">
                                        <?php echo $row['subject'] ?>
                                      </option>

                                      <?php
                                    }
                                       ?>

                                    </select>
                                </div>
                                <!-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Section *</label>
                                    <select class="select2" name="section">
                                        <option value="">Please Select Section *</option>
                                        <option value="Pink" >Pink</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Bird">Bird</option>
                                        <option value="Rose">Rose</option>
                                        <option value="Red">Red</option>
                                    </select>
                                </div> -->
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <input type="text" placeholder="" class="form-control" name="address">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" class="form-control" name="phno">
                                </div>
                                <!-- <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9"></textarea>
                                </div> -->
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" name="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->


                          <?php


                              if (isset($_POST['submit'])) {

                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $gender = $_POST['gender'];
                                $dob = $_POST['dob'];
                                // $idno = $_POST['idno'];
                                $bgroup = $_POST['bgroup'];
                                $religion = $_POST['religion'];
                                $email = $_POST['email'];
                                $class = $_POST['class'];
                                $subject = $_POST['subject'];
                                // $section = $_POST['section'];
                                $address = $_POST['address'];
                                $phno = $_POST['phno'];

                                $target_dir = "media/";
                                 $target_file = $target_dir . basename($_FILES["image"]["name"]);  // media/car2.jpg
                                $profile =  basename($_FILES["image"]["name"]);
                                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


                                $sql = "SELECT * FROM teachers where email = '$email'";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);

                                if ($row['email'] === $email) {
                                  echo "Email already exists";

                                } else {
                                  $query = "INSERT into teachers (fname, lname, gender, dob, bgroup, religion, email, class, subject, address, phno, profile) VALUES ('$fname', '$lname', '$gender', '$dob', '$bgroup', '$religion', '$email', '$class', '$subject', '$address', '$phno', '$profile')";

                                  if (mysqli_query($con, $query)) {
                                    echo "Succesfully Submitted";
                                  }

                                }

                              }

                            ?>


                <?php include 'includes/footer.php' ?>
