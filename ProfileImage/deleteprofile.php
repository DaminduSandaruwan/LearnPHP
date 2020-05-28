<?php 

    session_start();
    include_once 'connection.php';
    $sessionid= $_SESSION['id'];

    $filename = "uploads/profile".$sessionid."*";
    $fileinfo = glob($filename);
    //print_r($fileinfo);
    $fileext = explode(".",$fileinfo[0]);
    $fileaxtualext = $fileext[1];

    $file = "uploads/profile".$sessionid.".".$fileaxtualext;

    if(!unlink($file)){
        echo "File WAS DELETED";
    }
    else{
        echo "FILE WAS NOT DELETED";
    }

    $sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
    mysqli_query($conn,$sql);
    header("Location:index.php?deletesuccess");



