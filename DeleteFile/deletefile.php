<?php 
    $path = "uploads/photo1.jpeg";
    if (!unlink($path)) {
        echo "You have an Error!!!";
    }else{
        echo "You have deleted your file";
    }
    header("Location:index.php?deletesuccess");

?>