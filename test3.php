<?php
	include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	$sql =" select * from register where type='2';";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['fname'] . "<br>";
		}
	}
?>
</body>
</html>