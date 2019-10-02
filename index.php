<?php include 'includes/header.php'; ?>
<?php include 'includes/connection_home.php'; ?>


        <div class="row">
          <!-- carousel -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/banner3.jpg" alt="First slide">
                <div class="carousel-caption text-center">
                  <h5>Begin your Journey</h5>
                  <p style="text-shadow: 2px 2px 5px #E39A31; font-size: 24px;">Learning through Love, Fun and Faith</p>
                  <!-- <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.</p>
                  <button type="button" name="button" class="btn"><a href="registration.html" class="text-white">Register Now</a></button> -->
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/banner1.jpg" alt="Second slide">
                <div class="carousel-caption d-block text-center">
                  <h5>Begin your Journey</h5>
                  <p style="text-shadow: 2px 2px 5px #E39A31; font-size: 24px;">Learning through Love, Fun and Faith</p>

                  <!-- <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.</p>
                  <button type="button" name="button" class="btn">Register Now</button> -->
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/banner2.jpg" alt="Third slide">
                <div class="carousel-caption text-center">
                  <h5>Begin your Journey</h5>
                  <p style="text-shadow: 2px 2px 5px #E39A31; font-size: 24px;">Learning through Love, Fun and Faith</p>

                  <!-- <p>Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.</p>
                  <button type="button" name="button" class="btn">Register Now</button> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- header end -->

      <!-- welcome section -->
      <section class="pb-5">

        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center">
                <?php
                $query = "SELECT * FROM about";
                $select = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($select)
                 ?>
                <h2 class="my-5">Learn To Education Plus</h2>
                <p><?= $row['about'] ?></p>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <div class="row my-5 py-5 about-sec">
              <div class="col-md-4 about-hover">
                <i class="fas fa-book"></i>
                <h3>Courses</h3>
                <!-- <p>Etiam vel ante ac lacus vestibulum rutrum. Aliquam vehicula, massa in auctor dapibus commodo quis vehicula lacus metus sed justo.</p> -->
              </div>
              <div class="col-md-4 about-hover">
                <i class="fas fa-graduation-cap"></i>
                <h3>Cerrtified Teachers</h3>
                <!-- <p>Every member of staff knows every single child at Education Plus – this is a real community, where we know a child’s age, their siblings and their parents.</p> -->
              </div>
              <div class="col-md-4 about-hover">
                <i class="fas fa-certificate"></i>
                <h3>Certification</h3>
                <!-- <p>Etiam vel ante ac lacus vestibulum rutrum. Aliquam vehicula, massa in auctor dapibus commodo quis vehicula lacus metus sed justo.</p> -->
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- welcome end -->

      <section class="pb-5">

        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-6 text-center px-5 border-right">
                <?php
                $query = "SELECT * FROM mission";
                $select = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($select)
                 ?>
                <h2 class="my-5">Our Mission</h2>
                <p><?= $row['mission'] ?></p>
              </div>
              <div class="col-md-6 text-center px-5">
                <?php
                $query = "SELECT * FROM vision";
                $select = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($select)
                 ?>
                <h2 class="my-5">Our Vision</h2>
                <p><?= $row['vision'] ?></p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- courses -->
      <!-- <section>
        <div class="row mt-5 mb-3">
          <div class="col-12 text-center">
            <h2 class="my-5">Offered Courses</h2>
          </div>

          <div class="row my-5">
              <div class="card-deck mx-5"> -->
                <?php
                  // $sql = "SELECT * FROM subjects LIMIT 3";
                  // $select = mysqli_query($con, $sql);
                  // while ($row = mysqli_fetch_assoc($select)) {
                 ?>
                <!-- <div class="col-md-4 my-3">
                  <div class="card teacher-section text-white">
                    <img src="assets/images/courses/course3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Contact Here</a>
                    </div>
                  </div>
                </div> -->


                <!-- <div class="col-md-4">
                  <div class="card teacher-section text-white">
                    <img src="assets/images/courses/course4.jpg" class="card-img-top" alt="..." height="200px;" width="100px;">
                    <div class="card-body">
                      <h5 class="card-title">Your Name</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Contact Here</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card teacher-section text-white">
                    <img src="assets/images/courses/course5.jpg" class="card-img-top" alt="..." height="200px;" width="100px;">
                    <div class="card-body">
                      <h5 class="card-title">Your Name</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Contact Here</a>
                    </div>
                  </div>
                </div> -->
              <!-- </div>

          </div>
        </div>
        <div class="text-center">
          <button type="button" name="button" class="btn btn-primary mb-5"><a href="courses.php" class="text-white">View More</a></button>
        </div>
      </section> -->

      <!-- courses end -->

      <!-- teacher -->
      <section>
        <div class="row teacher-section pb-5">
          <div class="col-12">
            <div class="row mt-5">
              <div class="col-12 text-center">
                <h2 class="mb-5">Qualified Teachers</h2>
              </div>
            </div>
            <div class="row mx-2">
              <?php
                $sql = "SELECT * FROM teachers LIMIT 4";
                $select = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($select)) {
               ?>
                <div class="col-md-6">
                  <div class="card m-md-3 shadow">
                    <div class="row">
                      <div class="col-6">
                        <img src="admin/media/<?php echo $row['profile'] ?>" class="card-img-top" alt="..." height="300px;" width="100px;">
                        <!-- <img src="assets/images/teachers/teacher-1.jpg" > -->
                      </div>
                      <div class="col-6">
                        <div class="card-body">
                          <h5 class="card-title"><?= $row['fname'] . " " . $row['lname'] ?></h5>
                          <p class="card-text"><?= $row['design'] ?></p>
                          <!-- <a href="#" class="btn btn-warning">Contact</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
                <!-- <div class="col-md-6">
                  <div class="card m-md-3 shadow">
                    <div class="row">
                      <div class="col-6">
                        <img src="assets/images/teachers/teacher-2.jpg" class="card-img-top" alt="..." height="300px;" width="100px;">
                      </div>
                      <div class="col-6">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Contact</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card m-md-3 shadow">
                    <div class="row">
                      <div class="col-6">
                        <img src="assets/images/teachers/teacher-3.jpg" class="card-img-top" alt="..." height="300px;" width="100px;">
                      </div>
                      <div class="col-6">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Contact</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card m-md-3 shadow">
                    <div class="row">
                      <div class="col-6">
                        <img src="assets/images/teachers/teacher-4.jpg" class="card-img-top" alt="..." height="300px;" width="100px;">
                      </div>
                      <div class="col-6">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning">Contact</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
          </div>

        </div>
        <div class="text-center">
          <button type="button" name="button" class="btn btn-primary m-5"><a href="teachers.php" class="text-white">View More</a></button>
        </div>

      </section>
      <!-- teachers end -->

      <!-- events -->
      <section class="pb-5">
        <div class="row">
          <div class="jumbotron">
            <div class="row mt-5">
              <div class="col-12 text-center">
                <h2 class="mb-5">Upcoming Events</h2>
              </div>
            </div>
            <div class="row mx-2">
              <?php
                $sql = "SELECT * FROM events LIMIT 2";
                $select = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($select)) {
               ?>
                <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="row">
                      <div class="col-3">
                        <img src="admin/media/<?= $row['photo'] ?>" alt="..." class="card-img-top event-img img-thumbnail" >
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h5 class="card-title"><?= $row['title'] ?></h5>
                          <p class="card-text"><?= $row['des'] ?></p>
                          <a href="events.php" class="btn btn-outline-primary btn-sm">See More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
                 ?>
                <!-- <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="row">
                      <div class="col-3">
                        <img src="assets/images/events/event2.jpg" class="card-img-top event-img img-thumbnail">
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="row">
                      <div class="col-3">
                        <img src="assets/images/events/event3.jpg" class="card-img-top event-img img-thumbnail">
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="row">
                      <div class="col-3">
                        <img src="assets/images/events/event4.jpg" class="card-img-top event-img img-thumbnail">
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h5 class="card-title">Your Name</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
            </div>
          </div>

        </div>
        <div class="text-center">
          <button type="button" name="button" class="btn btn-primary mb-5"><a href="events.php" class="text-white">View More</a></button>
        </div>
      </section>
      <!-- events end -->

      <!-- photo gallery -->
      <section class="pb-5">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="mb-5">Photo Gallery</h2>
          </div>
        </div>
        <div class="row gallery-row">
          <div class="col-md-6">
            <img src="assets/images/gallery/gallery1.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-6">
            <img src="assets/images/gallery/gallery2.jpg" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="row mt-3 gallery-row">
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery3.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery4.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery5.jpg" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="text-center">
          <button type="button" name="button" class="btn btn-primary mt-5"><a href="gallery.php" class="text-white">View More</a></button>
        </div>
      </section>
      <!-- photo gallery ends -->


      <!-- contact -->

      <section class="pb-5">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 my-5 text-center">
                <h2>Contact Us</h2>
              </div>
              <!-- <div class="col-md-6 mx-md-0 m-2 p-5 rounded contact-form">
                <form class="needs-validation" novalidate >
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNumber">Number</label>
                    <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter Contact Number" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <textarea name="name" rows="4" cols="80" class="form-control" placeholder="Enter Your Message" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>
              </div> -->
              <div class="col-12 mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.838272721963!2d73.06690401462829!3d31.418581659305936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242be1a3290d5%3A0x5610715934d658!2sCareer+Institute!5e0!3m2!1sen!2s!4v1560232962462!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- contact ends -->


<?php include 'includes/footer.php'; ?>
