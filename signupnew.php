<?php     
    if(isset($_POST['submit'])){
        include_once 'Connection.php';
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];

        if(empty($firstname)|| empty($email)){
            headder("Location:ErrorHandling.php?signup=empty");
        }
        else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                headder("Location:ErrorHandling.php?signup=invalidemail");
            }
            else{
                echo "Sign up user!!!!";
            }
        }
    }
    else{
        headder("Location:ErrorHandling.php?signup=error");
        //  echo "You did not fill out a form!";
    }
?>