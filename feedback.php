<?php include('nbase.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/feedback.css">
</head>
<body>
<div class="feedback"> 
        <h2>Feedback</h2>
            <form  action="#" method="post"><t>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email id.."/required><br>
                    <label for="feedback">Give Feedback:</label>
                    <input type="textfield" id="feedback" name="feedback" placeholder="Your Feedback.."><br>
                   <label for="Rate Us">Rate Us:</label><br>
                   <div class="abc">
                   <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                </div>
                    <br>               
                    <input type="submit" value="submit"><br>
                 
             </form>
    </div>  
</body>
</html>
<?php include('footer.php'); ?>
<?php
$index = 1;
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['feedback'])){$feedback = $_POST['feedback'];}
if(isset($_POST['rating'])){$rating = $_POST['rating'];}


$conn = new mysqli('localhost','root','','esewa') ;
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("INSERT INTO feedback(email,feedback,rating)
        values(?,?,?)");
        echo $conn -> error;
        $stmt->bind_param("ssi", $email, $feedback, $rating);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "feedback submitted successfully";
}
  

 ?>
