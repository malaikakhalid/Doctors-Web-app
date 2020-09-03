<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container">
<?php
include 'config.php';
$id = $_GET['id'];
$sql = "select * from doctor where doc_id = '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
  $docname= $row['doc_name'];
  $countryname= $row['country_id'];
  $cityname= $row['city_id'];
  $degree= $row['degree_id'];
  $about= $row['about'];
  $address= $row['address'];
  $language= $row['language'];
  $insurance= $row['insurance_id'];
  $specialty= $row['specality_id'];
 
 
}
if(isset($_POST['save']))
{
  $query = "update doctor set doc_name ='".$_POST['txtdoc']."',country_id ='".$_POST['c_id']."',city_id ='".$_POST['city_id']."',specality_id ='".$_POST['s_id']."',
  degree_id ='".$_POST['d_id']."',about ='".$_POST['about']."', address='".$_POST['address']."', language ='".$_POST['lang']."',insurance_id ='".$_POST['i_id']."' where doc_id='$id'";
  $res = mysqli_query($conn,$query);
  if($res)
  {
    header('location:doctors.php');
  }
  else
  {
     echo  mysqli_error($conn);
  }
}
?>
<form action="#" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Doctors</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="txtdoc" value="<?php echo $docname; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">About</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="about" value="<?php echo $about; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="<?php echo $address; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Language</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="lang" value="<?php echo $language; ?>">
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


                                    <select class="form-control" id="exampleFormControlSelect1" name="c_id" value="<?php echo $countryname; ?>">
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
                                    <label>Select specialty</label>


                                    <select class="form-control" id="exampleFormControlSelect1" name="s_id" value="<?php echo $specialty; ?>">
                                        <option value="">Doctor specialty</option>

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


                                    <select class="form-control" id="exampleFormControlSelect1" name="i_id" value="<?php echo $insurance; ?>">
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


                                    <select class="form-control" id="exampleFormControlSelect1" name="city_id" value="<?php echo $cityname; ?>">
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


                                    <select class="form-control" id="exampleFormControlSelect1" name="d_id" value="<?php echo $degree; ?>">
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
</body>
</html>