<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 5;
        $y = 10;

        if($x < $y){ 
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";


        if($x > $y){ 
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";


        if($x <= $y){ 
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";


        if($x >= $y){ 
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";



        if($x == $y){  //check x is same as y
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";



        if($x != $y){  //check x is different as y
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";


        if($x === $y){  //check x is same as y and same data type
            echo "True!";
        }
        else{
            echo "False!";
        }
        echo "<br>";



    ?>
</body>
</html>