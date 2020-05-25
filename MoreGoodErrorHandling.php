<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SignUp</h2>
    <form action="signupnew.php" method="POST">
        <?php 
            if(isset($_GET['first'])){
                $firstname = $_GET['first'];
                echo '<input type="text" name="firstname" placeholder="firstname" value="'.$firstname.'">';
            }
            else{
                echo '<input type="text" name="firstname" placeholder="firstname">';
            }
        ?>
        <!-- <input type="text" name="firstname" placeholder="firstname"> -->
        <input type="text" name="email" placeholder="email">
        <button type="submit" name="submit">SignUp</button>
    </form>

    <?php
        // $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // if (strpos($fullUrl,"signup=empty")==true) {
        //     echo "<h3>YOU DID NOT FILL NOT ALL FIELDS!!!!</h3>";
        //     exit();
        // }
        // elseif (strpos($fullUrl,"signup=char")==true) {
        //     echo "<h3>YOU USED INVALID CHARS!!!!</h3>";
        //     exit();
        // }
        // elseif (strpos($fullUrl,"signup=invalidemail")==true) {
        //     echo "<h3>YOU USED INVALID EMAIL!!!!</h3>";
        //     exit();
        // }
        // elseif (strpos($fullUrl,"signup=success")==true) {
        //     echo "<h3>YYOU HAVE BEEN SIGN UP!!!!</h3>";
        //     exit();
        // }

        if(!isset($_GET['signup'])){
            exit();
        }else{
            $signupcheck =$_GET['signup'];
            if($signupcheck=="empty"){
                echo "<h3>YOU DID NOT FILL NOT ALL FIELDS!!!!</h3>";
                exit();
            }
            elseif($signupcheck=="char"){
                echo "<h3>YOU USED INVALID CHARS!!!!</h3>";
                exit();
            }
            elseif($signupcheck=="email"){
                echo "<h3>YOU USED INVALID EMAIL!!!!</h3>";
                exit();
            }
            elseif($signupcheck=="success"){
                echo "<h3>YOU HAVE BEEN SIGN UP!!!!</h3>";
                exit();
            }

        }
    ?>
</body>
</html>