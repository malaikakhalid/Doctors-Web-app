<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

  <title>Find Doctor</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-5" style="color: black;" href="#"> <img src="./Capture1.JPG" alt="kay" width="50px"
        height="40px"> Find Doc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="#">Book an Appointment</a>
        </li>
      </ul>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" style="color:black;" href="#">List your practice </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link mr-5 " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="background-color: inherit; outline: none;">
            Sign Up / Login
          </a>
          <div class="dropdown-menu dropcolor" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 10px;">
            <h5 class="dropdown-header">Patients</h5>
            <a class="dropdown-item" href="./patient_login.php">Log in</a>
            <a class="dropdown-item" href="./signup.php">Sign up</a>
            <h5 class="dropdown-header">Doctors</h5>
            <a class="dropdown-item" href="./doctor_login.php">Login</a>
            <h5 class="dropdown-header">Administration</h5>
            <a class="dropdown-item" href="./login.php">Admin</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>




  <div style = "background-color: #c2d6d6;">
    <h3 style=" padding-left: 50px; padding-top: 20px;">Top specialties</h3>
    <div class="main-service">
      <div class="card1">
        <div class="image1">
          <center>
            <img src="./picture1.svg" class="avatar1" alt="avatar" style="background-color: #66ccff;">
          </center>
        </div>
        <div>
          <h6 class="center">Primary Care</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image2">
          <center>
            <img src="./picture2.svg" class="avatar1" alt="avatar" style="background-color: #ff9999;">
          </center>
        </div>
        <div>
          <h6 class="center">OBYGn</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image3">
          <center>
            <img src="./picture3.svg" class="avatar1" alt="avatar" style="background-color: #cc99ff;">
          </center>
        </div>
        <div>
          <h6 class="center">Dentist</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image4">
          <center>
            <img src="./picture4.svg" class="avatar1" alt="avatar" style="background-color:  #ff6666;">
          </center>
        </div>
        <div>
          <h6 class="center">Dermatologist</h6>
        </div>
      </div>


      <div class="card1">
        <div class="image1">
          <center>
            <img src="./picture5.svg" class="avatar1" alt="avatar" style="background-color: #33ff99;">
          </center>
        </div>
        <div>
          <h6 class="center">Psychiatrist</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image2">
          <center>
            <img src="./picture6.svg" class="avatar1" alt="avatar" style="background-color: #ffff66;">
          </center>
        </div>
        <div>
          <h6 class="center">Eye Doctor</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image3">
          <center>
            <img src="./picture7.svg" class="avatar1" alt="avatar" style="background-color: #66ccff;">
          </center>
        </div>
        <div>
          <h6 class="center">ENT</h6>
        </div>
      </div>

      <div class="card1">
        <div class="image4">
          <center>
            <img src="./picture8.svg" class="avatar1" alt="avatar" style="background-color: #cc99ff;">
          </center>
        </div>
        <div>
          <h6 class="center">Gastroenterologist</h6>
        </div>
      </div>

    </div>

    <div>
      <h3 class="mt-3 mb-2 ml-5">
        Find Doctor
      </h3>


      <div class="col-lg-11 col-sm-12 col-md-2" style="margin-bottom: 20px;">
        <form>
          <div class="input-group mb-3 ">


            <?php
               
include 'config.php';
         //Get all country data
             $query = $conn->query("SELECT * FROM specialty ORDER BY specialty_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    


                                    <select class="form-control" id="exampleFormControlSelect1" name="s_id" required>
                                        <option value="">Doctor Specialty</option>

                                        <?php
               if($rowCount > 0){
                     while($row = $query->fetch_assoc()){ ?>
                                        <option value='<?php echo $row['specality_id'];?>'>
                                            <?php echo $row['specialty_name'];?></option>
                                        <?php }
               }else{
                     echo '<option value="">Specialty not available</option>';
               }
               ?>
                                    </select>
            <input type=" text" class="form-control" placeholder="Zip code or city">
              <input type="date" class="form-control">
              <input type="text" class="form-control" placeholder="Choose Insurance">

              <div class="input-group-append">
                <button class="btn btn-outline-secondary" style = "background-color:yellow;"  type="button" id="button-addon2" ><i class="fa fa-search"
                    aria-hidden="true"></i></button>
              </div>
          </div>
        </form>
      </div>
    </div>



    <div class=" main-desc">
      <div class="descript1">
        <h1>Are you a five-star doctor?</h1>
        <h5>List your practice to reach millions of patients.</h5>
        <ul>
          <li>Attract and engage new patients</li>
          <li>Build and strengthen your online reputation</li>
          <li>Deliver a premium experience patients love</li>
        </ul>

        <button class=" learn-more"> Join US</button>

      </div>

    </div>



    <div class="footer">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            Home
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            About Us
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            Book an Appointment
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            Doctor Join
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            Contact Us
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6" style="width: auto;">
            Help
          </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 10px;">

          <div class="col-auto">
            <p style="color: white;font-size: 20px;font-weight: bolder;padding-top:7%;" class="mx-auto">Connect With Us
            </p>

            <div class="social-menu">
              <ul>
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            

          </div>
        </div>

      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>
</body>

</html>