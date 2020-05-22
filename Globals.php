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
        $GLOBALS
        $_POST
        $_GET
        $_COOKIE
        $_SESSION
    */
        $x = 5; 

        function something(){
            $y = 10;
            echo $GLOBALS['x']; //accessing global variable

        }
        something();
        
    ?>
</body>
</html>