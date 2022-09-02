
<?php include('nbase.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>login.php</title>
</head>
<body>
	<div class="Login"> 
		<h2>Login</h2>
			<form action="#" method="post"><t>
						<h2>Customer Login</h2>
 					<label for="email">Email</label>
  					<input type="email" id="email" name="email" id="email" placeholder="Your Email id.."><br>
  				Password: <input type="password"  id="passwd" name="passwd" placeholder="Please Enter Password.."   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="20" /required><br><br>
          <style type="text/css">
              input[type=password], select {
              width:100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }    
             input[type=text], select {
              width:100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }  
          </style>
          <input type="checkbox" onclick="myFunction()">Show Password<br>
					<input type="submit" name="submit" value="Submit" onclick="myalert()"><br>
    			
    				<br>
   					<a href="signup.php">Signup</a>
 			 </form>
	</div>
</body>
</html>
<?php include('footer.php'); ?>
<script type="text/javascript">
   function myFunction() {
  var x = document.getElementById("passwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks!for Logging in"); 
            }
</script>
<?php
session_start();
 $conn= mysqli_connect("localhost","root","");
 $db= mysqli_select_db($conn,'esewa');

 if(isset($_POST['email']))
 {
 	$email=$_POST['email'];
 	$passwd=$_POST['passwd'];
 	$sql="select * from signup where email='".$email."' AND passwd='".$passwd."'";
 	$result= mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

 	if($num ==1){
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['passwd'];
    $_SESSION['id']= $email_pass['id'];
    $_SESSION['name']= $email_pass['fname'];
    $_SESSION['lname']= $email_pass['lname'];
    $_SESSION['number'] = $email_pass['phone1'];
    $_SESSION['email'] = $email_pass['email'];
    $_SESSION['addr'] = $email_pass['addr'];
    $_SESSION['city'] = $email_pass['city'];
    $_SESSION['state'] = $email_pass['state'];
 		header('Location: Customer/home.php');
 		echo "successfully logged in";
 	}
 	else{
 		echo "invalid email or password";
 	}
 }
?>
