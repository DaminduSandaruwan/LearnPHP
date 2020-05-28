<?php 
    session_start();
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $sqlImg="SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn,$sqlImg);
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                echo "<div class='user-container'>";
                    if ($rowImg['status']==0) {
                        $filename = "uploads/profile".$id."*";
                        $fileinfo = glob($filename);
                        //print_r($fileinfo);
                        $fileext = explode(".",$fileinfo[0]);
                        $fileaxtualext = $fileext[1];
                        echo "<img src='uploads/profile".$id.".".$fileaxtualext."?".mt_rand()."'>";
                    }
                    else{
                        echo "<img src='uploads/ProfileDefault.png'>";
                    }
                    echo "<p>".$row['username']."</p>";
                echo "</div>";
            }
        }
    }else{
        echo "THERE ARE NO USERS YET!!!!";
    }

    if(isset($_SESSION['id'])){
        if ($_SESSION['id']==1) {
            echo "You are logged in as user #1";
        }
        echo " 
        
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
        </form>
        
        ";

        echo " 
        
        <form action='deleteprofile.php' method='POST'>            
            <button type='submit' name='submit'>DELETE Profile IMAGE</button>
        </form>
        
        ";

        
    }else{
        echo "You are not logged in!!";
        echo "
            <form action='signup.php' method='POST'>
                <input type='text' name='first' placeholder='First Name'>
                <input type='text' name='last' placeholder='Last Name'>
                <input type='text' name='uid' placeholder='Username'>
                <input type='password' name='pwd' placeholder='Password'>
                <button type='submit' name='submitsignup'>SignUp</button>
            </form>
        
        ";
    }
?>
    

    <p>Login as User!!</p>
    <form action="login.php" method="POST">
        <button type="sumbit" name="submitLogin">Login</button>
    </form>

    <p>Logout as User!!</p>
    <form action="logout.php" method="POST">
        <button type="sumbit" name="submitLogout">Logout</button>
    </form>
</body>
</html>