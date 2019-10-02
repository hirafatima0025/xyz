<?php include 'includes/header.php'; ?>

        <div class="row">
          <img class="d-block w-100" src="assets/images/gallery/gallery2.jpg" alt="" style="height: 500px">
        </div>
      </section>
      <!-- header end -->

      <section>
        <div class="">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="m-5">Upcoming Events</h2>
            </div>
          </div>
          <div class="row mx-2">
            <?php
              $sql = "SELECT * FROM events";
              $select = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_assoc($select)) {
             ?>
              <div class="col-md-12">
                <div class="card border-light mb-3">
                  <div class="row">
                    <div class="col-3">
                      <img src="assets/images/events/event1.jpg" class="card-img-top event-img" >
                    </div>
                    <div class="col-9">
                      <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                        <p class="card-text"><?= $row['des'] ?></p>
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
      </section>
      <!-- events end -->

      <?php include 'includes/footer.php'; ?>
