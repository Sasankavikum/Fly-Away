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
	    <link rel="stylesheet" href="../style/payment.css">

</head>
<body>
	


<div class="wrapper">
  <div class="payment">
    <div class="payment-logo" img src = "../images/circle-cropped.png">
    </div>
    
    
    <h2>Payment Gateway</h2>
    <form action="payment.php" method="POST" style="font-size:20px">
    <div class="form">
      <label for="fname"><i class="fa fa-user"></i>First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>

      <br><br><label for="lname"><i class="fa fa-user"></i>Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required>

      <br><br><label for="email"><i class="fa fa-envelope"></i>Email</label>
      <input type="text" id="email" name="email" placeholder="Enter your e-mail" required>

      <br><br><label for="mobile number"><i class="fa fa-address-card-o"></i>NIC</label>
      <input type="text" id="nic" name="nic" placeholder="Add your NIC" required>

      <br><br><label for="mobile number"><i class="fa fa-address-card-o"></i>Mobile No</label>
      <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile" required>

      
      <br><br><label for="city"><i class="fa fa-institution"></i>City</label>
      <input type="text" id="city" name="city" placeholder="Enter your city" required>
                            
      <div class="row">
        <div class="col-50">
        <br><label for="state">State</label>
          <input type="text" id="state" name="state" placeholder="PP" required>
        </div>
          <div class="col-50">
          <br> <label for="state">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="10001" required>
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
                <input type="text" id="namecard" name="namecard" placeholder="Enter the name of the card" required>
                <br><br><label for="ccnum">Credit card number</label>
               <input type="text" id="creditno" name="creditno" placeholder="xxxx-xxxx-xxxx-xxxx" required>
               <br><br><label for="expmonth">Exp Month</label>
                <input type="text" id="expirem" name="expirem" placeholder="January" required>
                <div class="row">
                   <div class="col-50">
                   <br><label for="expyear">Exp Year</label>
                     <input type="text" id="year" name="year" placeholder="2018" required>
                    </div>
                 <div class="col-50">
                 <br> <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352" required>
                  </div>
                </div>
              </div>
        
                  
              <br><br><input type="submit" value="Continue to Payment" name="submit" class="btn">
                        
            </form>
            <br><button> <a href="paymentdashbord.php"> For More Details</a></button>
                </div>
            </div>
            </form>
      
    </div>
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
		  
	  </footer>
</html>































