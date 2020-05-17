<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        //String
        $name ='Cording is fun'; //can use single quote
        echo $name;
        echo "<br>";

        //Interger
        $age = 23;
        echo $age;
        echo "<br>";

        //Float
        $height = 157.56;
        echo $height;
        echo "<br>";

        //Boolean
        $pass = true;
        echo $pass;
        echo "<br>";

        //Array
        $details = array("Damindu","Sandaruwan","Bandara");
        echo $details['0']; //print 0 index
        echo "<br>";
        echo $details[1]; 

    ?>
</body>
</html>