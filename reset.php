<?php include('base.php'); ?>
<div class="q">
	<h3>Reset Password</h3>
<label for="old password">Old Password</label><br>
<input type="text" name="opassword" placeholder="Enter Old Password" ><br>
<label for="new password">New password</label><br>
<input type="text" name="npassword" placeholder="Enter New Password"><br>
<label for="new password">New password</label><br>
<input type="text" name="npassword" placeholder="Re-enter New Password" ><br>
<input type="submit" name="submit">
</div>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
        .new{
        	margin-top: -200px;
        }
        #sidebar{
        	margin-top: -115px;
        }
        .q{
			  border: 3px solid #008080;
			  background-color: #008080;
			  padding: 70px;
			  margin-top: 200px;
			  margin-left: 200px;
			  margin-right: 200px;
			  border-radius: 10px;
			  box-shadow: 10px 10px 5px grey;
			  color: white;
			}
			.q h3{
			  text-shadow: 1px 1px 2px black, 0 0 25px #008080, 0 0 5px white;
			  text-align: center;
			  margin: 3px;
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
			input[type=submit] {
			  width: 40%;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: =13px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  margin-left:125px;
			  box-shadow: #f2f2f2;
			}

			input[type=submit]:hover {
			  background-color: #45a049;
			}
</style>
<?php include('footer.php'); ?>
<?php 
include('connect.php');

$select = "SELECT * from signup";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

$oldpwd= $data['passwd'];

if (isset($_POST['submit'])) {
	$email = $_POST['email']; 
	$current = $_POST['opassword'];
	$new = $_POST['npassword1'];
	$confirm = $_POST['npassword2'];
	while ($row = $result-> fetch_assoc()) {	
		if ($current == $oldpwd) {
			if ($new == $confirm) {
				$update = "update signup set passwd = '$new' where email = '$email'";
				$query1 = mysqli_query($conn,$update);

				if($query1){
					echo "your password changed successfully";
				}
				else{
					echo "both passwords do not match";
				}
			}
		}
	}
}



?>