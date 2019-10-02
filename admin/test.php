<?php include 'includes/header.php' ?>
<?php include_once 'includes/navbar.php' ?>

<script type="text/javascript">
  $(document).ready(function() {
    $("#show_stu").click(function() {
      $("#student").slideToggle(1000);
    });
  });
</script>

<?php

  $query = "SELECT * FROM classes";
  $select = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($select)) {

 ?>

  <button class="btn btn-lg btn-gradient-yellow" id="show_stu" name="<?= $row['class'] ?>" value="<?= $row['class'] ?>" style="height:30px; margin: 5px"><?= $row['class'] ?></button>

  <div class="row" id="student" style="display:none">
    <table class="table display data-table text-nowrap">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Address</th>
                <th>Date Of Birth</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
          $class = $row['class'];
          $query = "SELECT * FROM students WHERE class = '$class'";
          $select = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($select)) {
          ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                <td><?= $row['fname'] . " " . $row['lname'] ?></td>
                <td><?= $row['father'] ?></td>
                <td><?= $row['phno'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['class'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['dob'] ?></td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="flaticon-more-button-of-three-dots"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="delete-student.php?id=<?php echo $row['id'] ?>"><i class="fas fa-times text-orange-red"></i>Delete</a>
                          <a class="dropdown-item" href="update-student.php?id=<?php echo $row['id'] ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
  </div>


  <?php
}

   ?>



<?php include 'includes/footer.php' ?>
