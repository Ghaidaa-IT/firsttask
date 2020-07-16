<?php

    require_once "ghaidaa \ DBGhaidaa.php";
?>
<!DOCTYPE html>
<html> <title>
Ghaidaa Nasib </title>
<head>
<b><h1 style="text-align:center;">Machine's Movements<h1/><b/></head>
<hr>
<style>
.ghaidaa {
text-align: Center;
width : 200px;
height: 50px;
font-size: 20px;
cursor: pointer;
background-color: blue;}
body {
  background-image: url('https://blog.beyondsecurity.com/wp-content/uploads/isometric_cloud_data_Iot_security_rendered.png');
}
h1 {
  color: white;
}
</style> 
<body style="background-color:mistyrose">
<center> 
<button class="ghaidaa" style="background: PaleTurquoise" id'right'>GO RIGHT &#8594; </button>
</br> </br>
<button class="ghaidaa" style="background: SkyBlue" id'left'> &#8592; GO LEFT </button>
</br> </br>
<button class="ghaidaa" style="background: red " id'stop'><b> STOP</b> </button>
</br> </br>
<button class="ghaidaa" style="background: SkyBlue" id'forward'> FORWARD </button>
</br> </br>
<button class="ghaidaa" style="background: PaleTurquoise" id'back'> BACKWARD </button>
</center> 
</body> </html>

<?php
$result='';
if(isset($_POST['R'])){
$result = 'R';
$sql = "INSERT INTO`movements`('left','right','backward','forward','stop') VALUES('','$result','','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['L'])){
$result = 'L';
$sql = "INSERT INTO`movements`('left','right','backward','forward','stop') VALUES('$result','','','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}


$result='';
if(isset($_POST['F'])){
$result = 'F';
$sql = "INSERT INTO`movements`('left','right','backward','forward','stop') VALUES('','','$result','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['B'])){
$result = 'B';
$sql = "INSERT INTO`movements`('left','right','backward','forward','stop') VALUES('','','',$result','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['S'])){
$result = 'S';
$sql = "INSERT INTO`movements`('left','right','backward','forward','stop') VALUES('','','','',$result')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

?>