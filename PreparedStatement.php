<?php include 'Connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $data ="Damindu";
        //created a template
        $sql = "SELECT * FROM student WHERE Name=?;";
        //create a prepared statemenr
        $stmt = mysqli_stmt_init($conn);
        //Prepare the prepare statement
        if (!mysqli_stmt_prepare($stmt,$sql)){
            echo "SQL STATEMENT FAILED!!!";
        }
        else{
            //binad parameter to the place holder
            mysqli_stmt_bind_param($stmt,"s",$data);
            // Run parameter inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while($row = mysqli_fetch_assoc($result)){
                echo $row['Name'] ."<br>";
            }
        }

            
        
    ?>
</body>
</html>