<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<?php
if(isset ( $_GET['update_about'] ) && $_GET['update_about'] == 1){

?>

            <div class="dashboard-content-one">

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Update About</h3>
                            </div>
                        </div>

                        <form class="new-added-form" action="" method="POST">
                            <div class="row">

                              <div class="col-12 form-group">
                                  <label>About</label>
                                  <?php
                                  $id = $_GET['about_id'];
                                  $query = "SELECT * FROM about WHERE id ='$id'";
                                  $select = mysqli_query($con, $query);
                                  $row = mysqli_fetch_assoc($select);
                                   ?>

                                  <textarea name="about" class="form-control" style="height: 200px;"><?php echo $row['about'] ?></textarea>

                              </div>

                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              </div>
<?php

}
 ?>


 <!-- vision -->

 <?php
 if(isset ( $_GET['update_vision'] ) && $_GET['update_vision'] == 1){

 ?>

             <div class="dashboard-content-one">

                 <div class="card height-auto">
                     <div class="card-body">
                         <div class="heading-layout1">
                             <div class="item-title">
                                 <h3>Update Vision</h3>
                             </div>
                         </div>

                         <form class="new-added-form" action="" method="POST">
                             <div class="row">

                               <div class="col-12 form-group">
                                   <label>Vision</label>
                                   <?php
                                   $id = $_GET['vision_id'];
                                   $query = "SELECT * FROM vision WHERE id ='$id'";
                                   $select = mysqli_query($con, $query);
                                   $row = mysqli_fetch_assoc($select);
                                    ?>

                                   <textarea name="vision" class="form-control" style="height: 200px;"><?php echo $row['vision'] ?></textarea>

                               </div>

                                 <div class="col-md-6 form-group"></div>
                                 <div class="col-12 form-group mg-t-8">
                                     <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_vision">Update</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>

               </div>
 <?php

 }
  ?>


<!-- mission -->
  <?php
  if(isset ( $_GET['update_mission'] ) && $_GET['update_mission'] == 1){

  ?>

              <div class="dashboard-content-one">

                  <div class="card height-auto">
                      <div class="card-body">
                          <div class="heading-layout1">
                              <div class="item-title">
                                  <h3>Update Mission</h3>
                              </div>
                          </div>

                          <form class="new-added-form" action="" method="POST">
                              <div class="row">

                                <div class="col-12 form-group">
                                    <label>Mission</label>
                                    <?php
                                    $id = $_GET['mission_id'];
                                    $query = "SELECT * FROM mission WHERE id ='$id'";
                                    $select = mysqli_query($con, $query);
                                    $row = mysqli_fetch_assoc($select);
                                     ?>

                                    <textarea name="mission" class="form-control" style="height: 200px;"><?php echo $row['mission'] ?></textarea>

                                </div>

                                  <div class="col-md-6 form-group"></div>
                                  <div class="col-12 form-group mg-t-8">
                                      <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_mission">Update</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

                </div>
  <?php

  }
   ?>

   <!-- quote -->
     <?php
     if(isset ( $_GET['update_quote'] ) && $_GET['update_quote'] == 1){

     ?>

                 <div class="dashboard-content-one">

                     <div class="card height-auto">
                         <div class="card-body">
                             <div class="heading-layout1">
                                 <div class="item-title">
                                     <h3>Update Quote</h3>
                                 </div>
                             </div>

                             <form class="new-added-form" action="" method="POST">
                                 <div class="row">

                                   <div class="col-12 form-group">
                                       <label>Mission</label>
                                       <?php
                                       $id = $_GET['quote_id'];
                                       $query = "SELECT * FROM quote WHERE id ='$id'";
                                       $select = mysqli_query($con, $query);
                                       $row = mysqli_fetch_assoc($select);
                                        ?>

                                       <textarea name="quote" class="form-control" style="height: 200px;"><?php echo $row['quote'] ?></textarea>

                                   </div>

                                     <div class="col-md-6 form-group"></div>
                                     <div class="col-12 form-group mg-t-8">
                                         <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_quote">Update</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>

                   </div>
     <?php

     }
      ?>


<!-- event -->
<?php
if(isset ( $_GET['update_event'] ) && $_GET['update_event'] == 1){

?>

            <div class="dashboard-content-one">

                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Update Event</h3>
                            </div>
                        </div>

                        <form class="new-added-form" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                              <?php
                              $id = $_GET['event_id'];
                              $query = "SELECT * FROM events WHERE id ='$id'";
                              $select = mysqli_query($con, $query);
                              $row = mysqli_fetch_assoc($select);
                               ?>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title *</label>
                                    <input type="text" placeholder="" class="form-control" name="title" value="<?= $row['title'] ?>">
                                </div>
                                <div class="col-12 form-group">
                                    <label>Description *</label>
                                    <textarea name="des" class="form-control" style="height: 200px;"><?= $row['des'] ?></textarea>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" class="form-control" name="eve_date" value="<?= $row['eve_date'] ?>">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Time</label>
                                    <input type="text" placeholder="" class="form-control" name="eve_time" value="<?= $row['eve_time'] ?>">
                                </div>

                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Photo (150px X 150px)</label>
                                    <input type="file" name="image" class="form-control-file" value="<?= $row['photo'] ?>">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="update_event">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              </div>
<?php

}
 ?>



            <br>

                <?php

                if (isset($_POST['submit'])) {

                  $id = $_GET['about_id'];

                  $about = $_POST['about'];

                  $ssql = "UPDATE about SET about = '$about' where id = $id";

                  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

                  if( $qr ) {
                     echo $success = 'About has been successfully updated';
                  } else {
                    echo $err = 'About was not updated Successfully';
                  }

                }

                if (isset($_POST['update_vision'])) {

                  $id = $_GET['vision_id'];

                  $vision = $_POST['vision'];

                  $ssql = "UPDATE vision SET vision = '$vision' where id = $id";

                  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

                  if( $qr ) {
                    echo $success = 'Vision has been successfully updated';
                  } else {
                    echo $err = 'Vision was not updated Successfully';
                  }

                }

                if (isset($_POST['update_mission'])) {

                  $id = $_GET['mission_id'];

                  $mission = $_POST['mission'];

                  $ssql = "UPDATE mission SET mission = '$mission' where id = $id";

                  $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

                  if( $qr ) {
                     echo $success = 'Mission has been successfully updated';
                  } else {
                    echo $err = 'Mission was not updated Successfully';
                  }

                }

                  if (isset($_POST['update_quote'])) {

                    $id = $_GET['quote_id'];

                    $quote = $_POST['quote'];

                    $ssql = "UPDATE quote SET quote = '$quote' where id = $id";

                    $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

                    if( $qr ) {
                      echo $success = 'Quote has been successfully updated';
                    } else {
                      echo $err = 'Quote was not updated Successfully';
                    }

                  }

                  if (isset($_POST['update_event'])) {

                    $id = $_GET['event_id'];

                    $title = $_POST['title'];
                    $des = $_POST['des'];
                    $eve_date = $_POST['eve_date'];
                    $eve_time = $_POST['eve_time'];

                    $eve_date = date("Y-m-d");

                    $target_dir = "media/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);  // media/car2.jpg
                    $photo =  basename($_FILES["image"]["name"]);
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                    $ssql = "UPDATE events SET title = '$title', des = '$des', eve_date = '$eve_date', eve_time = '$eve_time', photo = '$photo' where id = $id";

                    $qr = mysqli_query($con, $ssql ) or die( mysqli_error($con) );

                    if( $qr ) {
                      echo $success = 'Event has been successfully updated';
                      header("location:add-event.php");
                    } else {
                      echo $err = 'Event was not updated Successfully';
                    }

                  }


              ?>
                <?php include 'includes/footer.php' ?>
