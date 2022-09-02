
<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/wappt.css">
</head>
<body>
<div class="appt">
    <h2>Appointment</h2>
    <table style="width:80%" id="Pasttable">
  <tr>
    <th>Customer id</th>
    <th>Customer first name</th>
    <th>Contact number</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Date</th>
    <th>Time</th>
  </tr>
 <?php
 session_start();

            
              include 'connect.php';
              if ($conn-> connect_error) {
                die("connection failed:". $conn-> connect_error);
              }
            
              $email1 = $_SESSION['email'];
              $id = $_SESSION['id'];
              $det = date("Y-m-d");
              $sql= "SELECT * FROM appointment WHERE id1 like '%".$id."%' ";
              
              $result= $conn-> query($sql);
              if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                  echo "<tr><td>". $row["cid"]."</td>";
                  echo "<td>". $row["fname"]."</td>";
                  echo "<td>". $row["phone1"]."</td>"; 
                  echo "<td>". $row["addr"]."</td>"; 
                  echo "<td>". $row["city"]."</td>";
                  echo "<td>". $row["state"]."</td>";
                  echo "<td>". $row["date"]."</td>";
                  echo "<td>". $row["time"]."</td>";
                }
                echo "</table>";
              }
            
    ?>  
</div>
</body>
</html>                 
            
<?php include('footer.php'); ?>