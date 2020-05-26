<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $data = array();
        $data[] = "Damindu";
        $data[] = 23;
        print_r($data);
        echo "<br>";

        array_push($data,"Sandaruwan",25);
        print_r($data);
    ?>
</body>
</html>