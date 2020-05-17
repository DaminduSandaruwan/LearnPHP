<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Hi Damindu";
        echo "<br>";

        //string length
        echo "String Length : " . strlen("Hi Damindu"); 
        echo "<br>";

        //count number of words 
        echo "Word Count : " . str_word_count("Hi Damindu"); 
        echo "<br>";

        //reverse String 
        echo "String Reverse : " . strrev("Hi Damindu"); 
        echo "<br>";

        //string position - give the index of search string
        echo "String Position : " . strpos("Hi Damindu","Dam"); 
        echo "<br>";

        //string replace - replace th damindu as sandaruwan.
        echo "String Replace : " . str_replace("Damindu","Sandaruwan","Hi Damindu"); 
        echo "<br>";
    ?>
</body>
</html>