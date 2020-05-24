<?php 
    include 'Connection.php';

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $colleage = mysqli_real_escape_string($conn,$_POST['college']);

    $sql = "INSERT INTO student (Name,Colleage) VALUES ('$firstname','$colleage');";
    mysqli_query($conn,$sql);    
    
    header("Location:InsertToDB.php?signup=success");
?>