<?php
session_start();
include '../php_action/dbh.php';

// ---Database connection ---- 

$conn = new mysqli(server,user,pass,dbname); 

// ---username and the password send from the Login form ---	
	
	$username=$_POST['userName'];
	$password=$_POST['passWord'];
	$username = stripslashes($username);
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($password);
	$password = mysqli_real_escape_string($conn,$password);
	
	
	
// --- sql query to select user----

$sql="SELECT * FROM user WHERE user_Name='$username' and user_Pass='$password'";
$result = mysqli_query($conn,$sql);
//$datas= array('user_Name'	=>	$username);


$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
$row = mysqli_num_rows($result);
$active = $r['user_Status'];
$user_group=$r['user_Group'];
echo($active);
echo $user_group;
		$count = $row;
// If result matched $username and $password, table row must be 1 row
		
      if($count > 0) 
	  {  // ---if username and password matches loging to the system ---
         //session_register("username");
		 
		
			if($active=='Active')
			  	
			{
				//-------------------
         		$_SESSION['user_Name'] = $username;
		  		$_SESSION['user_Group']=$user_group;
		  		header("location: ../pages/dashboardm.php"); 
				
				/*switch($user_group)
				{
					  	case "1":
							header("location: ../pages/dashboard.php"); 
						  break;
					  	case "2":
							header("location: ../pages/dashboardm.php");
						  break;
						case "3":
							header("location: ../pages/dashboard.php");
						  break;
				  
				  
				  
				  
				  
		  	}*/
				
			}
		  else
		  	{
				echo "Your accout has been deactivated. Contact Administrator";	  
		  	}
		  
		  
		  
		  
		  
		  	//else
//			{
//				echo "Your Password is invalid";	
//			}
		}
		
	  		
		  
		  
         //header("location: ../pages/dashboard.php");
      else 
	  {  // --- username or password is wronge---
		  
         echo "Your Login Name is invalid";
      }
   




?>