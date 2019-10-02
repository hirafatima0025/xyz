<?php include 'includes/header.php'; ?>

        <div class="row">
          <img class="d-block w-100" src="assets/images/banner1.jpg" alt="" style="height: 500px">
        </div>
      </section>
      <!-- header end -->

      <section>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <h2 class="mb-5">Qualified Teachers</h2>
          </div>
        </div>
        <div class="row mx-5">
          <?php
            $sql = "SELECT * FROM teachers";
            $select = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($select)) {
           ?>
            <div class="col-md-4 teacher-section">
              <div class="card m-3">
                <div class="row">
                    <img src="admin/media/<?php echo $row['profile'] ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?= $row['fname'] . " " . $row['lname'] ?></h5>
                      <h5 class="card-title text-center"><?= $row['design'] ?></h5>
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
              <div class="card border-light mb-3">
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
              <div class="card border-light mb-3">
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
      </section>

      <?php include 'includes/footer.php'; ?>
