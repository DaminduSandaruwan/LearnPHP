<?php 
    include 'Connection.php';

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $colleage = mysqli_real_escape_string($conn,$_POST['college']);

    $sql = "INSERT INTO student (Name,Colleage) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "SQL STATEMENT FAILED!!!";
    }else{
        mysqli_stmt_bind_param($stmt,"ss", $firstname,$colleage);
        mysqli_stmt_execute($stmt);
    }
    
    header("Location:InsertToDB.php?signup=success");
?>