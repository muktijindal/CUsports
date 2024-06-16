<?php
        $name = $_POST['name'];
        $Number= $_POST['Number'];
        $Day = $_POST['Day'];
        $Hour = $_POST['Hour'];

        $conn = new mysqli('localhost','root','','pool');

        if($conn->connect_error){
            die('Connection failed   : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into  reserve(name, Number, Day, Hour)
            values(?,?,?,?)");
            $stmt->bind_param("siss",$name, $Number, $Day, $Hour);
            $stmt->execute();
            echo '<script>alert("Pool booking has been done")</script>';
            $stmt->close();
            $conn->close();
        }
    
        
?>