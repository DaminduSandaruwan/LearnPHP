<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*
            $GLOBALS
            $_POST
            $_GET
            $_COOKIE
            $_SESSION
        */

        echo $_GET['name'];
        echo $_POST['name'];

    ?>

    <form method="GET">
        <input type="hidden" name="name" value="Damindu">
        <button type="submit">PRESS ME!</button>
    </form>

    <form method="POST">
        <input type="hidden" name="name" value="Damindu">
        <button type="submit">PRESS ME!</button>
    </form>

</body>
</html>