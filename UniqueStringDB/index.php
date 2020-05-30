<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost","root","","php62");


        function checkKeys($conn,$randStr){
            $sql = "SELECT * FROM keystring";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                if($row['keystringKey'] == $randStr){
                    $keyExists=true;
                break;
                }else{
                    $keyExists=false;
                }
            }
            return $keyExists;
        }

        function generateKey($conn){
            $keyLength = 8;
            $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
            $randStr = substr(str_shuffle($str), 0,$keyLength);
            $checkKey = checkKeys($conn,$randStr);
            
            while($checkKey==true){
                $randStr = substr(str_shuffle($str),0,$keyLength);
                $checkKey = checkKeys($conn,$randStr);
            }
            return $randStr;
            
        }
        echo generateKey($conn);
    ?>
</body>
</html>