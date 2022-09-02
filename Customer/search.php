<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<title></title>
</head>
<body>
				<div class="new">
					<form action="#" method="post">
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
			<input type="submit" value="Submit"><br>
			 <table style="width:80%" id="Pasttable">
					<tr>
					<th>Worker id</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Price</th>
				
					</tr>
					  <?php
					  
    					include 'connect.php';
					    if ($conn-> connect_error) {
					      die("connection failed:". $conn-> connect_error);
					    }
					    $type1 = $_POST['type'];
					    $email1 = $_SESSION['email'];
					    $det = date("Y-m-d");
					    $sql= "SELECT * FROM register WHERE type like '%".$type1."%'  ";
					    
					    $result= $conn-> query($sql);
					    if ($result-> num_rows > 0) {
					      while ($row = $result-> fetch_assoc()) {
					        echo "<tr><td>". $row["id"]."</td>";
					        echo "<td>". $row["fname"]."</td>";
					        echo "<td>". $row["lname"]."</td>";
							echo "<td>". $row["price"]."</td>";	
							
					      }
					      echo "</table>";
					    }
    				
    ?>			
				</div>
			</form>

</body>
</html>

