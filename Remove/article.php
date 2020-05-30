<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $articleId = $_GET['id'];
        $articleName=$_GET['name'];

        echo "Article ID is : ". $articleId;
        echo "<br>";
        echo "Article name is : ".$articleName;
    ?>
</body>
</html>