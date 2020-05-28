<?php 
    $path = "uploads/photo1*";
    $fileinfo = glob($path);
    // print_r($fileinfo);
    $fileactualname=$fileinfo[0];

    if (!unlink($fileactualname)) {
        echo "You have an Error!!!";
    }else{
        echo "You have deleted your file";
    }
    header("Location:index.php?deletesuccess");

?>