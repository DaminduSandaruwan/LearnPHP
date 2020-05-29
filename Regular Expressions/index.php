<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $string = "My name is Damindu, Damindu is my name";
        echo $string."<br>";

        if (preg_match("/Damindu/",$string, $array)) {
            echo "It is a match<br>";
            print_r($array);
        }
        else{
            echo "It doesnt match <br>";
            
        }

        echo "<br>";

        if (preg_match_all("/Damindu/",$string, $array)) {
            echo "It is a match<br>";
            print_r($array);
        }
        else{
            echo "It doesnt match <br>";
            
        }

        echo "<br>";

        if (preg_match_all("/Da(mi)ndu/",$string, $array)) {
            echo "It is a match<br>";
            print_r($array);
            echo "<br>";
            echo $array[0][1];
            
        }
        else{
            echo "It doesnt match <br>";
            
        }

        echo "<br>";

        $string2 = preg_replace("/Da(mi)ndu/","John", $string);
        echo $string2;


    ?>
</body>
</html>