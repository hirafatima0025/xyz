<?php include 'includes/header.php'; ?>

        <div class="row">
          <img class="d-block w-100" src="assets/images/banner3.jpg" alt="" style="height: 500px">
        </div>
      </section>
      <!-- header end -->

      <!-- photo gallery -->
      <section>
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="m-5">Photo Gallery</h2>
          </div>
        </div>
        <div class="row">
          <?php
            $sql = "SELECT * FROM gallery";
            $select = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($select)) {
           ?>
          <div class="col-md-6 p-3">
            <img src="admin/media/<?= $row['pic_name'] ?>" alt="" class="img-fluid rounded img-hover-zoom">
          </div>

          <?php
        }
           ?>
        </div>

        <!-- <div class="row mt-3">
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery3.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery4.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-md-4">
            <img src="assets/images/gallery/gallery5.jpg" alt="" class="img-fluid rounded">
          </div>
        </div> -->
      </section>
      <!-- photo gallery ends -->

      <?php include 'includes/footer.php'; ?>
