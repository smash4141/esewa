<?php 
error_reporting(0);
 ?>
<?php include('nbase.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/Register.css">
	<title>Register</title>
</head>
<body>
	<div class="Register"> 
		<h2>Register</h2>
			<form  action="" method="post"><t>
				<h2>Worker Registration</h2>
					<h4><u>Personal Information:</u></h4>
			    	<label for="First Name">First Name</label>
  					<input type="text" id="fname" name="fname" placeholder="Please Enter First Name.." maxlength="10" /required><br>
  					<label for="Middle Name">Middle Name</label>
  					<input type="text" id="mname" name="mname" placeholder="Please Enter Middle Name.." maxlength="10" /required><br>
 					<label for="Last Name">Last Name</label>
  					<input type="text" id="lname" name="lname" placeholder="Please Enter Last Name.." maxlength="10" /required><br>
 					<label for="gender">Select the gender</label>
 					<select name="gender" id="gender">
 						<option value="None"selected>Gender</option>
 						<option value="male">Male</option>
 						<option value="female">Female</option>
 						<option value="others">Others</option>
 					</select>
 					<br>
 		
<script type="text/javascript">
    function EnableDisableTextBox(ddlModels) {
        var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
        var txtOther = document.getElementById("txtOther");
        txtOther.disabled = selectedValue == 7 ? false : true;
        if (!txtOther.disabled) {
            txtOther.focus();
        }
    }
</script>
 		<label for="type">Select type of work you do:</label>
<select id = "ddlModels" name="type" onchange = "EnableDisableTextBox(this)">
		<option value="1"selected>Type of Worker </option>
 		<option value="2">Electrician</option>
 		<option value="3">Carpenter</option>
 		<option value="4">Plumber</option>
 		<option value="5">Painter</option>
 		<option value="6">Maid</option>
 		<option value="7">others</option>
    
</select>
Other:
<input type="text" id="txtOther" name="type" disabled="disabled" />

 					<br>
 					<label for="Age">Age</label>
  					<input type="number" id="age" name="age" placeholder="Please Enter Age.." maxlength="2" min="18" max="99" /required><br>
  					<label for="Aadhar">Aadhar Card Number</label>
  					<input type="number" id="aadhar" name="aadhar" placeholder="Please Enter Aadhar Card No.."  min="0000000000" max="9999999999" /required><br>
 					<br><h4><u>Contact Information:</u></h4>
  					<label for="Phone">Phone Number</label>
  					<input type="number" id="phone" name="phone" placeholder="Please Enter Phone No.." min="0000000000" max="9999999999"/required><br>
  					<label for="Address">Address</label>
  					<input type="text" id="addr" name="addr" placeholder="Please Enter Address.."  maxlength="100" /required><br>
 					<label for="email">Email</label>
  					<input type="email" id="email" name="email" placeholder="Please Enter Email id.."  maxlength="20" /required><br>
  					<label for="price">Consultation Charge:</label>
                    <input type="number" id="price" name="price" placeholder="Please Enter Consultation Charges.." min="0"maxlength="4">
  					Password: <input type="password"  id="myinput" name="myinput" placeholder="Please Enter Password.."   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="20" /required><br><br>
					<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script><br>
     				

					<input type="submit" value="Submit" onclick="myalert()"><br>
 			 </form>
	</div>
</body>
</html>

<?php include('footer.php'); ?>
<script type="text/javascript">
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks!for registration"); 
            }
</script>
<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}
if(isset($_POST['type'])){$type = $_POST['type'];}
if(isset($_POST['age'])){$age = $_POST['age'];}
if(isset($_POST['aadhar'])){$aadhar = $_POST['aadhar'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['price'])){$price = $_POST['price'];}
if(isset($_POST['myinput'])){$myinput = $_POST['myinput'];}


$conn = new mysqli('localhost','root','','esewa') ;
if($conn->connect_error){
      die('connection failed :' .$conn->connect_error);
}
else
{
      $stmt = $conn->prepare("INSERT INTO register(fname,mname,lname,gender,type,age,aadhar,phone,addr,email,price,myinput)
            values(?,?,?,?,?,?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("sssssiiissis", $fname, $mname, $lname, $gender, $type, $age, $aadhar, $phone, $addr, $email, $price, $myinput);
            header('Location: login.php');
            $stmt->execute();
            $stmt->close();
            $conn->close();
}
  
 ?>
