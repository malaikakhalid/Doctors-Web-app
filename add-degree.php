<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add Degree</title>

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
  $degree=$_POST['txtdegree'];
  

  $query="insert into degree(degree_name) values('".$degree."')";
  $test=mysqli_query($conn,$query);
  if($test) 
  {
    header('Location:add-degree.php');
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
                        Doctor
                    </a>
                </li>
                <li>
                    <a href="patient_details.php">
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

        <!-- <?php 

               if(isset($_POST['out']))
    {
      session_destroy();
      session_unset();
      header('location:index.php');
    }
    ?> -->

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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card" style="margin-top:50px">
                            <div class="card-header">
                                Add Degree
                            </div>
                            <form action="#" method="POST">

                                <div class="form-group" style="padding:10px">
                                    <label for="exampleInputPassword1">Degree</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="txtdegree">
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;"
                                    name="save">Save</button>
                            </form>
                            <div class="card-header">

                            </div>

                        </div>
                    </div>

                    <?php

                         $sql ="select * from degree";
                         $result =mysqli_query($conn,$sql);
                         $row = mysqli_num_rows($result);
                     ?>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card" style="margin-top:50px">
                            <div class="card-header">
                                List of Degree
                            </div>
                            <table class="card-table table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Degree</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                              	$i=1;
                                            	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  	                                         	echo "<tr>";
                                                echo "<td>".$i++."</td>";
                                                echo "<td>".$row['degree_id']."</td>";
  		                                        echo "<td>".$row['degree_name']."</td>";
                                                echo "<td><a href='degree_update.php?id=".$row['degree_id']."' class='btn btn-primary'>Update</a></td>";
  		                                        echo "<td><a href='degree_delete.php?id=".$row['degree_id']."' class='btn btn-danger'>Delete</a>  	</td>";
  	                                        	echo "</tr>";
                                             	}
                                       ?>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="padding-top:180px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="POST">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">ID</label>
                                                            <input type="text" class="form-control" name="txtid"
                                                                disabled value="<?php echo $id; ?>">
                                                            <label for="recipient-name" class="col-form-label">Country
                                                                Name:</label>
                                                            <input type="text" class="form-control" 
                                                                name="txtdegree" value="<?php echo $country;?>">
                                                            <button type="button" class="btn btn-primary"
                                                                name="btnupdate">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </tbody>
                            </table>
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