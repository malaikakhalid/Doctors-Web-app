<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>

 <?php
 include 'config.php';
$id = $_GET['id'];

    if(isset($_GET['id']))
    {
        $qu= "delete from degree where degree_id='$id'"; 
         $res = mysqli_query($conn,$qu);
    if($res)
    {
        header('location:add-degree.php');
    }
    else
         {
             mysqli_error($conn);
         }
}
?>
</body>
</html>