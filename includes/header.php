<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
    <title>School Management System</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- header -->
      <section>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Education<span>+</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="courses.php">Courses</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="teachers.php">Faculty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link btn" href="login.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
