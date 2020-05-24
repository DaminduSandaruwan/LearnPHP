<?php 
    include 'Connection.php';

    $firstname = $_POST['firstname'];
    $colleage = $_POST['college'];

    $sql = "INSERT INTO student (Name,Colleage) VALUES ('$firstname','$colleage');";
    mysqli_query($conn,$sql);    
    
    header("Location:InsertToDB.php?signup=success");
?>