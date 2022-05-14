<?php
include_once 'paymentdb.php';
if(isset($_POST['submit']))
{    
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $nic = $_POST['nic'];
   $mobile = $_POST['mobile'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $namecard = $_POST['namecard'];
   $creditno = $_POST['creditno'];
   $expirem = $_POST['expirem'];
   $year = $_POST['year'];
   $cvv = $_POST['cvv'];
 
     $sql = "INSERT INTO paydetails (fname, lname,email,nic,mobile,city,state,zip,namecard,creditno,expirem,year,cvv)
     VALUES ('$fname', '$lname','$email','$nic','$mobile','$city','$state','$zip','$namecard','$creditno','$expirem','$year','$cvv')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        echo '<a href="paymentindex.php">Click here</a>';
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

    
     
     
}
?>

