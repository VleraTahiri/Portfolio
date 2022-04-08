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
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
  

        /* // ~~~~Kjo pjese eshte vetem demonstrim i kodit per send dhe recive te nje mesazhi po per arsye qe kam perdor 
        //local host nuk ekzekutohet



        if(isset($_POST['send'])){
            $mailto="tahirivlere@gmail.com";
            $from=$_POST['email'];
            $emri=$_POST['name'];
            $permbajtja=$_POST['text1'];
            $mesazhi="Client Name:". $emri. "Wrote the following Message". "\n\n". $_POST['text2'];
            $fillimi="From: " .$from;
    
    
            $rezultati= mail($mailto,$permbajtja,$mesazhi,$fillimi);
            
    
            if($rezultati){
                echo '<script type="text/javascript">alert("Message Sent. Thank you!")</script>';
            }else{
                echo '<script type="text/javascript">alert("Submit faild")</script>';
            }
        } */
?>
