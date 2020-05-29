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

        echo preg_match("/(a|o)/",$string); //check a or o
        echo "<br>";
        echo preg_match("/[a-z|A-Z]/",$string);

        echo "<br>";

        preg_match_all("/D*/",$string,$array);
        print_r($array);
        echo "<br>";

        preg_match_all("/D.*/",$string,$array);
        print_r($array);
        echo "<br>";

        preg_match_all("/D.*m/",$string,$array); //stop m
        print_r($array);
        echo "<br>";

        preg_match_all("/D+/",$string,$array); 
        print_r($array);
        echo "<br>";

        preg_match_all("/D.+/",$string,$array); 
        print_r($array);
        echo "<br>";

        $string2 = "My 1name2 is 1Damindu, 2Damindu is my name";
        
        preg_match_all("/1.*2/",$string2,$array1); 
        print_r($array1);
        echo "<br>";

        preg_match_all("/1.*?2/",$string2,$array1); 
        print_r($array1);
        echo "<br>";


        $string3 = "My name is Damindu, Damindu is my name";
        
        echo preg_match("/D{2}/",$string3,$array2); 
        echo "<br>";
        echo preg_match("/D{1,2}/",$string3,$array2); 
        echo "<br>";
        echo preg_match("/D{1,}/",$string3,$array2); 
        echo "<br>";
        echo preg_match("/D{2,}/",$string3,$array2); 
        echo "<br>";

        echo preg_match("/\D{3}/",$string3,$array2); //D - digit
        echo "<br>";

        preg_match("/\D{3}/",$string3,$array2); 
        print_r($array2);
        echo "<br>";

        preg_match_all("/\S{3}/",$string3,$array2); //S -white spaces
        print_r($array2);
        echo "<br>";

        echo preg_match("/^M/",$string3); // captila M        
        echo "<br>";

        echo preg_match("/e$/",$string3); // captila M        
        echo "<br>";

        echo preg_match("/^Me$/",$string3); // captila M        
        echo "<br>";

        echo preg_match("/^M.*e$/",$string3); // captila M        
        echo "<br>";

        $string4 = "^My name is Damindu, Damindu is my name";
        echo preg_match("/\^.*e$/",$string4); // captila M        
        echo "<br>";

        
    ?>
</body>
</html>