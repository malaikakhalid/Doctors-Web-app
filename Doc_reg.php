<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add City</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

</head>

<body>

    <?php
include 'config.php';
if(isset($_POST['save']))
{
  $doc=$_POST['txtdoc'];
  $country_id=$_POST['c_id'];
  $about=$_POST['about'];
  $degree_id=$_POST['d_id'];
  $city_id=$_POST['city_id'];
  $address=$_POST['address'];
  $lang=$_POST['lang'];
  $insur_id=$_POST['i_id'];
   $spec_id=$_POST['s_id'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

  

  $query="insert into doctor(doc_name,country_id,about,degree_id,city_id,insurance_id,address,language,specality_id,email,password) values('".$doc."','".$country_id."','".$about."','".$degree_id."','".$city_id."','".$insur_id."','".$address."','".$lang."','".$spec_id."','".$email."','".$pass."')";
  $test=mysqli_query($conn,$query);
  if($test) 
  {
    header('Location:doctors.php');
  }
  else
  {
    echo "error";
  }
}
  ?>





    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Welcome </h3>
                <strong>DB</strong>
            </div>

            <ul class="list-unstyled components">

                <li class="active">
                    <a href="#"  class=" dropdown-btn">

                        Registration
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-container">
                        <a href="add-country.php">Add Country</a>
                        <a href="add-city.php">Add City</a>
                        <a href="add-specialty.php">Add Specialty</a>
                        <a href="add-degree.php">Add Degree</a>
                        <a href="add-insurance.php">Add Insurance</a>
                    </div>
                </li>
                <li>
                    <a href="Doc_reg.php">
                        <i class="fas fa-briefcase"></i>
                        Doctor Form
                    </a>
                </li>
                <li>
                    <a href="doctors.php">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Doctors
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        Patient
                    </a>
                </li>
                <li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Feedback
                    </a>
                </li>
                <form method="post">
                    <input type="submit" name="out" class="btn btn-primary" value="Logout">
                </form>
                </li>
            </ul>
        </nav>

        <?php 

               if(isset($_POST['out']))
    {
      session_destroy();
      session_unset();
      header('location:index.php');
    }
    ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid" style="background-color: grey">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <!--   <span>Collapse Menu</span> -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>


                </div>
            </nav>



            <div class="container">
                <div class="row">



                    <div class="col-lg-12 col-md-6 col-sm-12" style="margin-top:50px">
                        <div class="card" style="padding:20px">
                            <div class="card-header">
                                Add Doctor
                            </div>
                            <form action="#" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Doctors</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="txtdoc" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">About</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="about" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="address" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Language</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="lang" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                                </div>


                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Country Id</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="country_id">
                                </div> -->
                                <!-- <button type="submit" class="btn btn-primary" 
                                    name="save">Save</button> -->


                                <div class="form-group">

                                    <?php
         //Get all country data
             $query = $conn->query("SELECT * FROM country ORDER BY country_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    <label>Select country</label>


                                    <select class="form-control" id="exampleFormControlSelect1" name="c_id" required>
                                        <option value="">Doctor Country</option>

                                        <?php
               if($rowCount > 0){
                     while($row = $query->fetch_assoc()){ ?>
                                        <option value='<?php echo $row['country_id'];?>'>
                                            <?php echo $row['country_name'];?></option>
                                        <?php }
               }else{
                     echo '<option value="">Country not available</option>';
               }
               ?>
                                    </select>
                                </div>


                                <div class="form-group">

                                    <?php
         //Get all country data
             $query = $conn->query("SELECT * FROM specialty ORDER BY specialty_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    <label>Select Specialty</label>


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
                                </div>



<div class="form-group">

                                    <?php
         //Get all country data
             $query = $conn->query("SELECT * FROM insurance ORDER BY insurance_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    <label>Select Insurance</label>


                                    <select class="form-control" id="exampleFormControlSelect1" name="i_id" required>
                                        <option value="">Doctor Insurance</option>

                                        <?php
               if($rowCount > 0){
                     while($row = $query->fetch_assoc()){ ?>
                                        <option value='<?php echo $row['insurance_id'];?>'>
                                            <?php echo $row['insurance_name'];?></option>
                                        <?php }
               }else{
                     echo '<option value="">Insurance not available</option>';
               }
               ?>
                                    </select>
                                </div>




                                <div class="form-group">

                                    <?php
         //Get all country data
             $query = $conn->query("SELECT * FROM city ORDER BY city_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    <label>Select city</label>


                                    <select class="form-control" id="exampleFormControlSelect1" name="city_id" required>
                                        <option value="">Doctor City</option>

                                        <?php
               if($rowCount > 0){
                     while($row = $query->fetch_assoc()){ ?>
                                        <option value='<?php echo $row['city_id'];?>'>
                                            <?php echo $row['city_name'];?></option>
                                        <?php }
               }else{
                     echo '<option value="">City not available</option>';
               }
               ?>
                                    </select>
                                </div>



<div class="form-group">

                                    <?php
         //Get all country data
             $query = $conn->query("SELECT * FROM degree ORDER BY degree_name ASC");

         //Count total number of rows
         $rowCount = $query->num_rows;
         ?>
                                    <label>Select degree</label>


                                    <select class="form-control" id="exampleFormControlSelect1" name="d_id" required>
                                        <option value="">Doctor Degree</option>

                                        <?php
               if($rowCount > 0){
                     while($row = $query->fetch_assoc()){ ?>
                                        <option value='<?php echo $row['degree_id'];?>'>
                                            <?php echo $row['degree_name'];?></option>
                                        <?php }
               }else{
                     echo '<option value="">Degree not available</option>';
               }
               ?>
                                    </select>
                                </div>




                                <button type="submit" class="btn btn-primary" name="save">Save</button>
                            </form>




                        </div>
                    </div>

                   
                    </div>
                </div>

            </div>








            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                crossorigin="anonymous"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                    });
                });
                $(document).ready(function () {
                    $('#fetch').on('click', function () {
                        $('#con').css('display', 'none');
                        $('#c').css('display', 'block');
                    });
                });

            </script>

            <script>
                /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var dropdownContent = this.nextElementSibling;
                        if (dropdownContent.style.display === "block") {
                            dropdownContent.style.display = "none";
                        } else {
                            dropdownContent.style.display = "block";
                        }
                    });
                }
            </script>
</body>

</html>