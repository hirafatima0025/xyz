<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php'; ?>

      </section>
      <!-- header end -->

      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center p-5">
            <div class="col-12 mt-5 text-center">
              <h2 class="m-5">Registration Form</h2>
            </div>
            <div class="col-md-5 mx-md-0 m-2 text-center bg-dark text-white p-5 rounded">
              <form class="needs-validation" novalidate method="POST" >
                <div class="form-group">
                  <label for="exampleInputFname">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFname" placeholder="Enter First Name" name="fname">
                </div>
                <div class="form-group">
                  <label for="exampleInputLname">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLname" placeholder="Enter Last Name" name="lname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone No.">
                </div>
                <div class="form-group">
                  <label for="exampleInputUname">Gender</label><br>
                  <input type="radio" name="" value="male">Male
                  <input type="radio" name="" value="female">Female
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary mt-3" name="submit">Register</button>
              </form>
            </div>
          </div>
        </div>

      </div>
      <?php


      if (isset($_POST['submit'])) {


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        $query = "INSERT INTO users (fname, lname, email, pass) VALUES ('$fname', '$lname', '$email', '$pass')";

        if (mysqli_query($con, $query)) {
          echo "You are registered";
        }

      }

    ?>

<!-- <table>
  <thead>
    <tr>
      <th>id</th>
      <th>first name</th>
      <th>last name</th>
      <th>email</th>
      <th>pass</th>
    </tr>
  </thead>

  <tr>
    <td></td>
  </tr>
</table> -->

      <?php include 'includes/footer.php'; ?>
