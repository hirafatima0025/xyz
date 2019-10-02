<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php

if( isset($_GET['del_not']) && $_GET['del_not'] == 1) {

  extract($_GET);

  $not_id = clean_escape($con, $_GET['not_id']);

  $ssql = "DELETE FROM announcement where ann_id = $ann_id";

  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

  if( $qr ) {
    echo 'Announcement has been successfully deleted';
  } else {
    echo 'Announcement was not deleted Successfully';
  }

}


 ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Notice Board</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                </div>
                                <form class="new-added-form" action="" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" class="form-control" name="title">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Details</label>
                                            <input type="text" placeholder="" class="form-control" name="detail">
                                        </div>
                                        <!-- <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <input type="text" placeholder="" class="form-control" name="post_name">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Date</label>
                                            <input type="text" placeholder="" class="form-control air-datepicker">
                                            <i class="far fa-calendar-alt"></i>
                                        </div> -->
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->

                    <?php

                    $id = $_SESSION['id'];
                    $sql = "SELECT fname, lname FROM users WHERE id = '$id'";
                    $select = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($select);
                    $post_name = $row['fname'] . " " . $row['lname'];

                    $date = date("Y-m-d");

                    if (isset($_POST['submit'])) {


                      $title = $_POST['title'];
                      $detail = $_POST['detail'];

                      $query = "INSERT INTO notices (title, detail, post_name, not_date) VALUES ('$title', '$detail', '$post_name', '$date')";

                      if (mysqli_query($con, $query)) {
                        echo "Succesfully Added";
                      }

                    }

                     ?>

                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Notice Board</h3>
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
                                <!-- <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Title ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form> -->
                                <div class="notice-board-wrap">

                                  <?php
                                  $query = "SELECT * FROM notices";
                                  $select = mysqli_query($con, $query);
                                  while ($row = mysqli_fetch_assoc($select)) {
                                  ?>

                                    <div class="notice-list">

                                      <div class="dropdown" style="float:right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                          <span class="flaticon-more-button-of-three-dots"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="delete-notice.php?id=<?php echo $row['id'] ?>"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                        </div>
                                      </div>

                                        <div class="post-date bg-skyblue"><?= $row['not_date'] ?></div>
                                        <h5 class="notice-title"><?= $row['title'] ?></h5>
                                        <h6 class="notice-title"><?= $row['detail'] ?></h6>
                                        <div class="entry-meta"> <?= $row['post_name'] ?>  </div>

                                    </div>

                                    <?php
                                  }

                                     ?>

                                    <!-- <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom
                                            text of the printing Great School manag mene esom  text of the printing manag
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Notice Area End Here -->
                </div>

                <?php

                if (isset($_POST['delete'])) {
                  $id = $_GET['id'];

                  $query = "DELETE FROM notices WHERE id = '$id'";
                  $delete = mysqli_query($con, $query);

                  if ($delete) {
                    echo "Succesfully Deleted";
                    header("Location: notice-board.php");
                  }
                }



                 ?>

                <?php include 'includes/footer.php' ?>
