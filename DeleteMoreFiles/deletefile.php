<?php
    $fileNames=$_POST['filename'];
    $removeSpaces=str_replace(" ","",$fileNames);
    $allFileNames=explode(",",$removeSpaces);
    // print_r($allFileNames);

    $countAllNames=count($allFileNames);
    for ($i=0; $i < $countAllNames; $i++) { 
        if (file_exists("uploads/".$allFileNames[$i])==false) {
            header("Locations:index.php?deleteerror");
            exit();
        }
    }

    for ($i=0; $i < $countAllNames; $i++) {  
        $path = "uploads/".$allFileNames[$i];
        if (!unlink($path)) {
            echo "You have an Error!!!";
            exit();
        }else{
            echo "You have deleted your file";
        }
        
    }
    header("Location:index.php?deletesuccess");
    

?>