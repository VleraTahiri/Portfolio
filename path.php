<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['text1'];
    $message=$_POST['text2'];

    $conn = new mysqli('localhost','root','','contact');
   
        $stmt=$conn->prepare("insert into contact_us(first_name, email, message, message2)
        values(?, ?, ?, ? )");
        $stmt->bind_param("ssss",$name, $email, $subject, $message);
        $stmt->execute();
        //echo "registration successfully...";
        $stmt->close();
        $conn->close();
  

?>
