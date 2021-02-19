<?php

$con = mysqli_connect('localhost','root');
if($con){

	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'easytravuserdata');

$Name = $_POST ['Name'];
$Mobile = $_POST['Mobile'];
$Email = $_POST['Email'];
$PickupLocation  = $_POST['PickupLocation'];
$AirportLocation = $_POST['AirportLocation'];
$Cartype = $_POST['Cartype'];



$query = "insert into userinfodata (Name, Mobile, Email, P_location, A_location, Cartype) values ('$Name',
'$Mobile','$Email','$PickupLocation','$AirportLocation','$Cartype') ";

 echo "$query";
mysqli_query($con,$query);
 /*header('location:index.php');*/

?>