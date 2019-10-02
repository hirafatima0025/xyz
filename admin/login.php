<?php include_once '../includes/header.php'; ?>
<?php
if (!empty($_SESSION['id'])) {
	header("location:index.php");
}
 ?>

      <div class="row" style="background-image: url(../assets/banner2.jpg)">
        <div class="col-12">
          <div class="row justify-content-center p-5">
            <div class="col-12 mt-5 text-center">
              <h2 class="m-5 text-white">Login Form</h2>
            </div>
            <div class="col-md-5 mx-md-0 m-2 text-center bg-dark text-white p-5 rounded">
              <form method="POST" action="">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
                </div>
                <!-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary mt-3" name="submit">Login</button>
              </form>
            </div>
          </div>
        </div>

      </div>

      <?php
      if (isset($_POST['submit'])) {

      	$email = $_POST['email'];
      	$pass = $_POST['pass'];

      	// $query = "select * from users where email = '$email'";
        $query = "SELECT * from users WHERE email = '$email'";

      	$select = mysqli_query($con, $query);
      	$row = mysqli_fetch_assoc($select);

        // echo $row['email'];

      	if ($email == $row['email'] and $pass == $row['pass']) {

      		$_SESSION['id'] = $row['id'];
					$_SESSION['user'] = 'admin';

      		header("location:index.php");

      	}
      	else{
      		echo 'Email or password didnt match';
      	}
      }
      ?>


      <?php include 'includes/footer.php'; ?>
