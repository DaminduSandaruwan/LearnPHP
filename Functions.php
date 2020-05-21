<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php         

        function newCalc($x){
            $newnum = $x * 0.75;
            echo " Here is 75% of what you wrote :" . $newnum;
        }

        $x =100;
        newCalc($x);
        echo "<br>";

        $y =200;
        newCalc($y);
        echo "<br>";
    ?>
</body>
</html>