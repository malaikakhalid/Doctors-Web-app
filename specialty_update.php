<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>Detail</title>
</head>
<body>
<?php
include 'config.php';
$id = $_GET['id'];
$sql = "select * from specialty where specality_id = '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
    {

        $specialtyname=$row['specialty_name'];
       
    }
    if(isset($_POST['btnupdate']))
    {
        $qu= "update specialty set specialty_name ='".$_POST['txtspecial']."'  where specality_id='$id'";
         $res = mysqli_query($conn,$qu);
         if($res)
         {
             header('location:add-specialty.php');
         }
         else
         {
             echo mysqli_error($conn);
         }
    }
?>
<form method="post">
<div style="padding:100px">

<div class="form-group" >
    <label for="exampleInputPassword1">specialty ID</label>
    <input type="text" class="form-control" name="txtid" disabled value="<?php echo $id; ?>">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Specialty Name</label>
    <input type="text" class="form-control" name="txtspecial" value="<?php echo $specialtyname; ?>">
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
  </div>
</form>
</body>
</html>