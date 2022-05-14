<?php
	include_once 'paymentdb.php';
	$recordId = $_GET['id'];

	$sql = "SELECT * FROM paydetails WHERE payment_id = $recordId";
	$result = $conn -> query($sql);
	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			   $fname = $row['fname'];
			   $lname = $row['lname'];
			   $email = $row['email'];
			   $nic = $row['nic'];
			   $mobile = $row['mobile'];
			   $city = $row['city'];
			   $state = $row['state'];
			   $zip = $row['zip'];
			   $namecard = $row['namecard'];
			   $creditno = $row['creditno'];
			   $expirem = $row['expirem'];
			   $year = $row['year'];
			   $cvv = $row['cvv'];
		}
	}   
	
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
	 
		 $sql =  "UPDATE paydetails 
      SET fname='$fname', lname='$lname',email='$email',nic='$nic',mobile=$mobile,city='$city',state='$state',
			zip=$zip,namecard='$namecard',creditno=$creditno,expirem='$expirem',year=$year,cvv=$cvv
			WHERE payment_id=$recordId";
			
			if (mysqli_query($conn, $sql)) {
				$success="<h3>Updated successfully !</h3><a href='paymentdashbord.php'>Click Here</a>";
			
		 } else {
			echo "Error: " . $sql . ":-" . mysqli_error($conn);
		 }
		 mysqli_close($conn);  
	}

?>




<!DOCTYPE html>
<html>
	<head>
 	<!-- add a title (a) -->
		<Title>Payment</title>
		<script src="js/myscript.js"></script>
		<link rel="stylesheet" type="text/css" href="../style/navi.css">
		<link rel="stylesheet" type="text/css" href="../style/header.css">
		<link rel="stylesheet" type="text/css" href="../style/footer.css">
    <link rel="stylesheet" type="text/css" href="../style/styles.css">
		<link rel="stylesheet" type="text/css" href="../style/sl.css">
		<link rel="stylesheet" type="text/css" href="../style/slgal.css">
		<link rel="stylesheet" type="text/css" href="../style/one.css">
		<link rel="stylesheet" type="text/css" href="../style/dubai price.css">
    <link rel="stylesheet" type="text/css" href="../style/payment.css">
  


		<header>	
			<img class = "logo" src = "../images/HeadPic.jpg" width = 100% height="300px">

		</header>
		<ul class="one" position=fixed;>
			<li><a href="home.html">Home</a></li>
			<li><a href="signup.html">Sign Up</a></li>
			<li><a href="destinations.html">Destinations </a></li>
			<li><a href="contactus.html">Contact Us</a></li>
			<li><a href="about.html">About us</a></li>
		</ul>



    <!DOCTYPE html>
    <html lang="en">
    <head>
	    <meta charset="UTF-8">
	    <title>Payment Checkout Form</title>
	    <link rel="stylesheet" href="styles.css">

</head>
<body>
	


<div class="wrapper">
  <div class="payment">
    <div class="payment-logo" src = "/flyaway.jpeg">
    </div>
    
    
    <h2>Payment Gateway</h2>
	<form action="paymentupdate.php?id=<?php echo $recordId ?>" method="post" style="font-size:20px">
    <div class="form">
      <label for="fname"><i class="fa fa-user"></i>First Name</label>
      <input value="<?php echo $fname ?>" type="text" id="fname" name="fname" placeholder="Enter First Name" required>

      <br><br><label for="lname"><i class="fa fa-user"></i>Last Name</label>
      <input value="<?php echo $lname ?>" type="text" id="lname" name="lname" placeholder="Enter Last Name" required>

      <br><br><label for="email"><i class="fa fa-envelope"></i>Email</label>
      <input value="<?php echo $email ?>" type="text" id="email" name="email" placeholder="Enter your e-mail" required>

      <br><br><label for="mobile number"><i class="fa fa-address-card-o"></i>NIC</label>
      <input value="<?php echo $nic ?>" type="text" id="nic" name="nic" placeholder="Add your NIC" required>

      <br><br><label for="mobile number"><i class="fa fa-address-card-o"></i>Mobile No</label>
      <input value="<?php echo $mobile ?>" type="text" id="mobile" name="mobile" placeholder="Enter Mobile" required>

      
      <br><br><label for="city"><i class="fa fa-institution"></i>City</label>
      <input value="<?php echo $city ?>" type="text" id="city" name="city" placeholder="Enter your city" required>
                            
      <div class="row">
        <div class="col-50">
        <br><label for="state">State</label>
          <input value="<?php echo $state ?>" type="text" id="state" name="state" placeholder="PP" required>
        </div>
          <div class="col-50">
          <br> <label for="state">Zip</label>
            <input value="<?php echo $zip ?>" type="text" id="zip" name="zip" placeholder="10001" required>
          </div>
      </div>
    </div>
    <div class="col-50">
    <br> <h3>Payment</h3>
      <br> <label for="fname">Accepted Cards</label>
          <div>
          <br> <img src="../images/visa.png" alt="payment method" width="250px" height="50px"/>
          </div>
              <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <br><br> <label for="cname">Name on Card</label>
              <input value="<?php echo $namecard ?>" type="text" id="namecard" name="namecard" placeholder="Enter the name of the card" required>
              
              <br><br><label for="ccnum">Credit card number</label>
              <input value="<?php echo $creditno ?>" type="text" id="creditno" name="creditno" placeholder="xxxx-xxxx-xxxx-xxxx" required>
              
              <br><br><label for="expmonth">Exp Month</label>
              <input value="<?php echo $expirem ?>" type="text" id="expirem" name="expirem" placeholder="January" required>
              
              <div class="row">
                  <div class="col-50">
                    <br><label for="expyear">Exp Year</label>
                    <input value="<?php echo $year ?>" type="text" id="year" name="year" placeholder="2018" required>
                  </div>
                 <div class="col-50">
                 <br> <label for="cvv">CVV</label>
                      <input value="<?php echo $cvv ?>" type="text" id="cvv" name="cvv" placeholder="352" required>
                      <br><br><input type="submit" value="Update Info" name="submit" class="btn">
                      <?php echo $success; ?>
                  </div>
                </div>
              </div>
            </div>
            
                    
            
</form>
                </div>
            </div>


</body>

<!-- add a footer (g)-->
	 

<footer class="footer">
 <div class="footer__addr">
   <h1 class="footer__logo">flyaway</h1>
     
   <h2>About</h2>
   
   <address>
   

   Tourist Board License No : TS/TA/1387<br><br>
   Civil Aviation License No: A-922 <br><br>
   © 2020 Flyaway (Pvt) LTD Sri Lanka (Reg: PV72478) <br><br>
   
   <br><br>
   
   <br>
   </address>
 </div>
 
 <ul class="footer__nav">
   <li class="nav__item">
   <h2 class="nav__title">Media</h2>
 
   <ul class="nav__ul">
     <li>
     <a href="#">Facebook</a>
   
     </li>
 
     <li>
      
     <a href="#">Twitter</a>
     </li>
     
     <li>
     <a href="#">Instergram</a>
     </li>
   </ul>
   </li>
   
   <li class="nav__item nav__item--extra">
   <h2 class="nav__title">Support</h2>
   
   <ul class="nav__ul">
     <li>
     <a href="#">Contact us</a>
     </li>
     
     <li>
     <a href="#">F&Q</a>
     </li>
     
   </ul>
   </li>
   </form>
</html>