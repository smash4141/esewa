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
    <th>Worker id</th>
    <th>Date</th>
    <th>Time</th>
  </tr>

 <?php


            
              include 'connect.php';
              if ($conn-> connect_error) {
                die("connection failed:". $conn-> connect_error);
              }
            
              $id1 = $_SESSION['id'];
              $det = date("Y-m-d");
              $sql= "SELECT * FROM appointment WHERE cid like '%".$id1."%'";
              $result= $conn-> query($sql);
              if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                  echo "<tr><td>". $row["id1"]."</td>";
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
