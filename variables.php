<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>

    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>

    <?php
        $name = "Damindu"; // string variable
        echo $name;
        echo "<br>"; // to brak line
        echo $name . " is a handsome fellow"; // comine using . mark
        echo "<br>";


        $nameperson = $_GET['person']; // get name from form input using get method
        echo $nameperson. " is a handsome fellow";
        //but there is error when starting because there is no value assing for nameperson
    ?>
</body>
</html>