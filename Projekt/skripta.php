<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Unos</title>
</head>
<body>
    <header class="header">
        <div class="prviDio">
            <img src="/images/SternLogo.png" alt="Stern Logo" class="logo">;
        </div>

        <div class="drugiDio">
        <h1 class="sternnn">stern</h1>
       
        <nav class="nav">
                <a href="index.php">Home</a>
                <a href="politika.php">Politics</a>
                <a href="zdravlje.php">Health</a>
                <a href="login.php">Administration</a>
            </nav>
    </div>
    </header>



    <section role="main" class="sect12">
        <div class="row">
            <p class="category">
                <?php
                    $category = $_POST['category'];
                    echo $category;
                ?>
            </p>
 
        <h1 class="title">
            <?php
                $title = $_POST['title'];
                echo $title;
            ?>
        </h1>

        <p>AUTOR:</p>
        <p>OBJAVLJENO:</p>

        </div>

        <section class="slika">
            <?php
                $image = $_POST['image'];
                echo "<img src='img/$image'";
            ?>
        </section>


        <section class="about">
    
        <p>
            <?php
                $about = $_POST['about'];
                echo $about;
            ?>
        </p>
        </section>

        <section class="sadrzaj">
            <p>
                <?php
                    $content = $_POST['content'];
                    echo $content;
                ?>
            </p>
        </section>
 </section>



    <footer class="footer">
        <p>News from 17.05.2019 | © stern.de GmbH | Home</p>
    </footer>
</body>
</html>