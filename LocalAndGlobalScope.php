<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 5; //Global Scope

        function something(){
            $y = 10; //Local Scope
        }
        echo $x;
        echo $y; // error because y is local to that function
    ?>
</body>
</html>