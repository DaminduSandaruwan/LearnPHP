<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*
            $_COOKIE - saving data in user side
            $_SESSION - saving data in server side
        */

         setcookie("namecookie","Daniel",time() - 86400); # - for remove + for add

         $_SESSION['name']="12";
         

    ?>
</body>
</html>