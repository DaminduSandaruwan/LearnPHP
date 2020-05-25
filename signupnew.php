<?php     
    if(isset($_POST['submit'])){
        include_once 'Connection.php';
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];

        if(empty($firstname)|| empty($email)){
            header("Location:ErrorHandling.php?signup=empty");
            exit();
        }
        else{
            if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
                header("Location:ErrorHandling.php?signup=char");
                exit();
            }
            else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location:ErrorHandling.php?signup=invalidemail");
                }
                else{
                    echo "Sign up user!!!!";
                }
            }
            
        }
    }
    else{
        header("Location:ErrorHandling.php?signup=error");
        //  echo "You did not fill out a form!";
    }
?>