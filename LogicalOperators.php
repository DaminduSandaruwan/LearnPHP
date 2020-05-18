<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 10;
        $y = 20;

        if($x==$y or 1 == 1){
            echo "True";
        }
        echo "<br>";

        if($x==$y || 1 == 1){
            echo "True";
        }
        echo "<br>";

        if($x==$y and 1 == 1){
            echo "True";
        }
        else{
            echo "False";
        }
        echo "<br>";

        if($x==$y && 1 == 1){
            echo "True";
        }
        else{
            echo "False";
        }
        echo "<br>";


        if($x==$y xor 1 == 1){
            echo "True";
        }
        else{
            echo "False";
        }
        echo "<br>";

    ?>
</body> 
</html>