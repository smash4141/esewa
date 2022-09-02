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
    $stmt = $conn->prepare("INSERT INTO feedback (email,feedback,rating)
        values(?,?,?)");
        echo $conn -> error;
        $stmt->bind_param("ssi", $email, $feedback, $rating);
        $stmt->execute();
        echo "feedback submitted successfully";
        
        header('Location: home.php');
         
        $stmt->close();
        $conn->close();
}
  

 ?>
