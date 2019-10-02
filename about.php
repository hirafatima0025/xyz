<?php include 'includes/header.php'; ?>
<?php include 'includes/connection_home.php'; ?>


        <div class="row">
          <img class="d-block w-100" src="assets/images/banner1.jpg" alt="" style="height: 500px">
        </div>
      </section>
      <!-- header end -->

      <section>

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

      <?php include 'includes/footer.php'; ?>
