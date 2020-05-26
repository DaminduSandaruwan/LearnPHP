<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Indexed Array
        $data = array("Damindu", "Sandaruwan", "Bandara");
        echo $data[0];

        echo "<br>";

        //Associative array
        $data = array("first"=>"Damindu", "last"=>"Sandaruwan","age"=>23);
        print_r($data);

        echo "<br>";
        //Multidimensional arrays
        $data =array(array("Damindu","Sandaruwan"),"Bandara","Kalugala");
        print_r($data);
    ?>
</body>
</html>