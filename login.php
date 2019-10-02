<?php include_once 'includes/header.php'; ?>

      <div class="row" style="background-image: url(assets/banner2.jpg); height: 100vh">
        <div class="col-12">
          <div class="row justify-content-center p-5">
            <div class="col-12 mt-5 text-center login-link">
              <a href="teacher-login.php" type="button" class="btn" style="margin: 70px; background-color: #E39A31; padding: 20px; color: white; font-size: 20px;" required>For Teachers</a>
              <a href="student-login.php" type="button" class="btn" style="margin: 70px; background-color: #E39A31; padding: 20px; color: white; font-size: 20px;" required>For Students</a>
            </div>
          </div>
        </div>

      </div>

      <?php
      // if (isset($_POST['submit'])) {
			//
      // 	$email = $_POST['email'];
      // 	$pass = $_POST['pass'];
			//
      // 	// $query = "select * from users where email = '$email'";
      //   $query = "SELECT * from users WHERE email = '$email'";
			//
      // 	$select = mysqli_query($con, $query);
      // 	$row = mysqli_fetch_assoc($select);
			//
      //   // echo $row['email'];
			//
      // 	if ($email == $row['email'] and $pass == $row['pass']) {
			//
			//
      // 		$_SESSION['id'] = $row['id'];
			//
      // 		header("location:admin/index.php");
			//
      // 	}
      // 	else{
      // 		echo 'Email or password didnt match';
      // 	}
      // }
      ?>


      <?php include 'includes/footer.php'; ?>
