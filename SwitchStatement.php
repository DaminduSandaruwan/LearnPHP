<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = "number";

        switch ($x){
            case 1 : 
                echo "Number is 1";
            break;

            case "number" : 
                echo "Number is string number";
            break;

            case 3 : 
                echo "Number is 1";
            break;

            default:
                echo "default answer";

        }
    ?>
</body>
</html>