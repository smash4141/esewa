
<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<div class="home"> 
        <h2>E SEWA</h2><br>
        <img src="home.jfif">
        <p>
            <?php echo"Hello ";echo $_SESSION['name']; echo"   ";echo $_SESSION['lname']; ?><br>
        	<b>We are glad! Welcome you to E SEWA platform</b><br>
        	Our Company build bridge between the Customer and the Workers.
        	We Believe in quote "Vocal For Local" and We want to promote "Made in India".
        	We want to build a platform wherein the worker get employed using the technology. 
        </p>
</div>            
</body>
</html>                 
            
<?php include('footer.php'); ?>