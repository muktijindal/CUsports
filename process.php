<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $conn = new mysqli('localhost','root','','contact');

        if($conn->connect_error){
            die('Connection failed   : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into  contact_us(name, email, message)
            values(?,?,?)");
            $stmt->bind_param("sss",$name, $email, $message);
            $stmt->execute();
            echo '<script>alert("Data has been submitted successfully")</script>';
            
            $stmt->close();
            $conn->close();
        }
    
        
?>

