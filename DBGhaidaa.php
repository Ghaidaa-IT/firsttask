<?
$connection = [
'host' =>'localhost',
'user' =>'root',
'database' => 'ghaidaa_db'
];

$mysqli = mysqli_connect($connection['host'],
$connection['user'],
"",
$connection['database']);


if($mysqli->connect_error){
   die($mysqli->connect_error);
}
