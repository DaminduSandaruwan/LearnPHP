<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Robot+Condensed:400,700" rel="stylesheet">

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class = "contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder ="Full Name"><br><br>
            <input type="text" name="mail" placeholder ="Your Email"><br><br>
            <input type="text" name="subject" placeholder ="Subject"><br><br>
            <textarea name="message" placeholder="message"></textarea><br><br>
            <button type="submit" name = "submit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>