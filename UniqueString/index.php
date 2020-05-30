<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function generateKey(){
            $keyLength = 8;
            $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
            $randStr = str_shuffle($str);
            return $randStr;
        }

        echo generateKey();

        
    ?>
</body>
</html>