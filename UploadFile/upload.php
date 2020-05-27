<?php 
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        //print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','pdf');

        if (in_array($fileActualExt,$allowed)) {
            if($fileError===0){
                if($fileSize<1000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination='uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    header("Location: index.php?uploadsuccess");

                }else{
                    echo "YOUR FILE IS TOO LARGE !!!!";
                }

            }else{
                echo "THERE WAS AN ERROR WHEN UPLOADING!!!!";
            }
        }else{
            echo "YOU CANNOT UPLOAD FILES OF THIS TYPE!!!!";
        }

    }
?>