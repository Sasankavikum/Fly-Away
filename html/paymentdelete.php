<?php
    include_once 'paymentdb.php';
?>

<?php
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM paydetails WHERE payment_id = $recordId";
	
	if($conn -> query($sql)){
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:paymentdashbord.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>