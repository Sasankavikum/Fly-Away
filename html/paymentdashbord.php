<?php
  include 'paymentdb.php'
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
	    <link rel="stylesheet" href="payment.css">
		
		<style>
		#details {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#details td, #details th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#details tr:nth-child(even){background-color: #f2f2f2;}

		#details tr:hover {background-color: #ddd;}

		#details th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #39B1E5;
		  color: white;
		}
		</style>

</head>
<body>
	


<div style="width:100%;background:#fff" class="table">
            <!--add a table-->
            <table id="details" style = "width:96%; margin:2%">
                <tr>
                    <th>Payment ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>State</th>
                    <th>ZIP</th>
                    <th>Update / Delete</th>
                   </tr>
                <?php
                  $sql="SELECT * FROM paydetails";
                  $result=$conn->query($sql);
                  if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                      $id=$row["payment_id"];
                      $name=$row["fname"];
                      echo "<tr>
                        <td>".$id."</td>
                        <td>".$name."</td>
                        <td>".$row["lname"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["nic"]."</td>
                        <td>".$row["mobile"]."</td>
                        <td>".$row["city"]."</td>
                        <td>".$row["state"]."</td>
                        <td>".$row["zip"]."</td>
						<td>
							<a href='paymentupdate.php?id=".$id."'>Update</a>
							<a href='paymentdelete.php?id=".$id."'>Delete</a>
						</td>
                      </tr>";
                    }
                  }
				  ?>
			</table>
			
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


        





     