<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bookappt.css">
	<title>Book appointment</title>
</head>
<body>
	<div class="bookappt">
		<u>Book Appointment</u><br>
		<form action="" method="post">
			<br>
			<label>Your Name:</label>
			<?php echo $_SESSION['name'];?>
			<br>
			<label>Your email:</label>
			<?php echo $_SESSION['email'];?><br>
			<label for="type">Type of id:</label>
			<input type="text" name="id1" id="id1" placeholder="Enter id...">
		<label for="time">Time of Appointment</label>
<select name="time">
  <option>select a time</option>
  <option value="10AM">10AM</option>
  <option value="11AM">11AM</option>
  <option value="12AM">12AM</option>
  <option value="2PM">2PM</option>
  <option value="3PM">3PM</option>
  <option value="6PM">6PM</option>
  <option value="7PM">7PM</option>
  <option value="8PM">8PM</option>
</select>
			<label for="Date">Date:</label>
			<input type="date" name="date" id="date">
			<input type="submit" value="submit">
			<style>
				input[type=submit] {
				  width: 40%;
				  background-color: #4CAF50;
				  color: white;
				  padding: 14px 20px;
				  margin: 12px 0;
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				  margin :2px;

				}
				input[type=submit]:hover {
				  background-color: skyblue;
				}
			</style>
		</form>
	</div>
</body>
</html>
<?php include('footer.php'); ?>
<?php
$index = 1;
if(isset($_POST['id1'])){$id1 = $_POST['id1'];}
if(isset($_POST['time'])){$time = $_POST['time'];}
if(isset($_POST['date'])){$date = $_POST['date'];}
  $cid = $_SESSION['id'];
  $fname = $_SESSION['name'];
  $email1 = $_SESSION['email'];
  $phone1 = $_SESSION['number'];
  $addr = $_SESSION['addr'];
  $city = $_SESSION['city'];
  $state = $_SESSION['state']; 
  include 'connect.php';

$conn = new mysqli('localhost','root','','esewa') ;
if($conn->connect_error){
      die('connection failed :' .$conn->connect_error);
}
else
{
      $stmt = $conn->prepare("INSERT INTO appointment(id1,time,date,cid,fname,email1,phone1,addr,city,state)
            values(?,?,?,?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("ississssss", $id1, $time, $date, $cid, $fname, $email1, $phone1, $addr, $city ,$state);
            $stmt->execute();
            $stmt->close();
            $conn->close();
}
  
 ?>
