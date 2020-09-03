<?php
$docname=$_POST['name'];
$speciality=$_POST['special'];
$country=$_POST['country'];
$city=$_POST['city'];
$degree=$_POST['degree'];
$address=$_POST['address'];
$about=$_POST['about'];
$insurance=$_POST['about'];
$language=$_POST['language'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fdoc";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM speciality WHERE speciality_id=$speciality 
union
SELECT * FROM country WHERE country_id=$speciality 
union
SELECT * FROM city WHERE city_id=$speciality 
union
SELECT * FROM insurance WHERE insurance_id=$insurance 
union
SELECT * FROM degree WHERE degree_id=$degree  ";

 $mal = mysqli_query($conn,$sql);
$row = mysqli_num_rows($mal);
$num_rows = mysqli_num_rows($row); 

if($num_rows > 0){
    $qry="insert into doctor(docname,speciality,country,city,degree,about,address,language) values('".$docname."','".$speciality."','".$country."','".$city."','".$degree."','".$about."' ,'".$address."' ,'".$language."')";
}else{
    echo "Team is not valid!!!";
}


$conn->close();
?>