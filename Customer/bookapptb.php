<?php 
session_start();
if (isset($_POST['submit'])) {
;
  $id = $_SESSION['id'];
  $fname = $_SESSION['fname'];
  $email1 = $_SESSION['email'];
  $phone1 = $_SESSION['phone1'];
  include 'connect.php';

      $stmt = $conn->prepare("INSERT INTO appointment (id,fname,email1,phone1) values(?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("isss",  $id, $fname, $email1, $phone1);
            $stmt->execute();
        
            header('Location: home.php');
            $stmt->close();
            $conn->close();

}

 ?>