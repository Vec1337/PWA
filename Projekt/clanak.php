<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Stern</title>
</head>
<body style="width: 60%;">
    <header class="header">
        <div class="prviDio">
            <img src="./img/SternLogo.png" alt="Stern Logo" class="logo">
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


    <?php
            include 'connect.php';

            define('UPLPATH', 'img/');
        ?>
        
        
        
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM vijesti WHERE id=$id";

            $result = mysqli_query($dbc, $query);

            $i=0;
            $row = mysqli_fetch_array($result);
        ?>


    <section role="main">
    <div class="row">
        <h2 class="category">
            <?php
                echo "<span>".$row['kategorija']."</span>";
            ?>
        </h2>

        <h1 class="title">
            <?php
                echo $row['naslov'];
            ?>
        </h1>
        <p>AUTOR:</p>
        <p>OBJAVLJENO: 
            <?php
                echo "<span>".$row['datum']."</span>";
            ?>
        </p>
    </div>
    <section class="slika">
        <?php
            echo '<img src="' . UPLPATH . $row['slika'] . '">';
        ?>
    </section>
    <section class="about">
        <p>
            <?php
                echo "<i>".$row['sazetak']."</i>";
            ?>
        </p>
    </section>
    <section class="sadrzaj">
        <p>
            <?php
                echo $row['tekst'];
            ?>
        </p>
    </section>
</section>



    <footer class="footer">
        <p>News from 17.05.2019 | © stern.de GmbH | Home</p>
    </footer>
</body>
</html>