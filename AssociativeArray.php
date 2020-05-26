<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = array(
            "first"=>"Damindu",
            "last"=>"Sandaruwan",
            "age"=>23
        );
        echo $data['first'];

        echo "<br>";



        $data["first"]="Damindu";
        $data["last"]="Sandaruwan";
        $data["age"]=23;
       
        echo $data['first'];
        echo "<br>";
        print_r($data);

    ?>
</body>
</html>