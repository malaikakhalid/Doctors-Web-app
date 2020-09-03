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
$sql = "select * from city where city_id = '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
  $cityname= $row['city_name'];
  $countryname= $row['country_id'];
 
 
}
if(isset($_POST['btnupdate']))
{
  $query = "update city set city_name ='".$_POST['txtname']."',
  country_id='".$_POST['C_id']."' where city_id='$id'";
  $res = mysqli_query($conn,$query);
  if($res)
  {
    header('location:add-city.php');
  }
  else
  {
     echo  mysqli_error($conn);
  }
}
?>
<form method="POST">
<div style="padding:100px">
<div class="form-group">
   
    <input type="text" class="form-control" disabled  placeholder="Enter Name" name="txtid" value="<?php echo $id; ?>">
   
    
  </div>

  <div class="form-group">
   
    <input type="text" class="form-control" value="<?php echo $cityname; ?>"  placeholder="Enter Name" name="txtname">
    
  </div>
    
  <?php
    //Include database configuration file
    include('config.php');
    
    //Get all country data
    $query = $conn->query("SELECT * FROM country ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
 <select class="form-control" name="C_id" id="cat" value="<?php echo $countryname; ?>" >
        <option value="">Select Country</option>
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

  
 
  <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
  </div>
 
</form>
</body>
</html>