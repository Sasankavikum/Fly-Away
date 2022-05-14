<?php
 
 include_once 'config.php';


	$model = $_POST["model"];
	$abid = $_POST["abid"];
	$business = $_POST["business"];
	$economy = $_POST["economy"];
	$company = $_POST["company"];
	$length = $_POST["length"];
	$height = $_POST["height"];
	$payload = $_POST["payload"];
	$range = $_POST["maxrange"];
 
	$sql = "insert into planes (model,abid,business,economy,company,length,height,payload,maxrange)
	values('$model','$abid','$business','$economy','$company','$length','$height','$payload','$range')";


 if(mysqli_query($conn,$sql)){
	 
	 echo "<script> alert('Record inserted successfully!!') </script>";
	 header("Location:addnew.html");
 }
 else{
	 echo"<script> alert('Error inserting records') </script>";
	 echo $conn->error;
 }
 mysqli_close($conn);

?>