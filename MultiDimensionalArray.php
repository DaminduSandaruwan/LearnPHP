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
        array(1,2,3),
        "Sandaruwan",
        "Bandara"
    );
    print_r($data);
    echo "<br>";

    echo $data[1];
    echo "<br>";

    echo $data[0][1];
    echo "<br>";
?>
</body>
</html>