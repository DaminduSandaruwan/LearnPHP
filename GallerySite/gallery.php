<?php 
    $_SESSION['username']="Admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php" class="header-brand">Damindu</a>
        <nav>
            <ul>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>
                <div class="gallery-container">
                <?php   
                    include_once 'includes/gdb.inc.php'; 
                    $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        echo "SQL statement failed!";
                    } 
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <a href="#">
                                    <div style ="background-image:url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                                    <img src ="img/gallery/'.$row["imgFullNameGallery"].'">
                                    <h3>'.$row["titleGallery"].'</h3>
                                    <p>'.$row["descGallery"].'</p>
                                </a>                            
                                ';
                        }
                    }        
                    
                ?>
                </div>

                
                    <?php
                    if(isset($_SESSION['username'])){
                        echo '
                        <div class="gallery-upload">
                            <h2>Upload</h2>
                            <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="filename" placeholder="File name....">
                                <input type="text" name="filetitle" placeholder="Image title...">
                                <input type="text" name="filedesc" placeholder="Image description....">
                                <input type="file" name="file">
                                <button type="submit" name="submit">UPLOAD</button>
                            </form>
                        </div>
                        ';
                    }
                    
                ?>
            </div>
        </section>
    </main>
</body>
</html>