<?php
    $username = $_POST['username'];
    $password = $_POST['password'];


    //Database connection
    $conn = new mysqli('localhost','root','','details');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login(username, password) values(?, ?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo " login success...";
        $stmt->close();
        $conn->close();
    }


?>