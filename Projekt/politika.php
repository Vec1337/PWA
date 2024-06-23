<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Stern</title>
    <style>
        .section {
            padding: 20px;
            margin: 0 auto;
        }

        .articles {
            display: flex;
            flex-wrap: wrap; 
            gap: 20px;
        }

        .article {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #f9f9f9;
            width: calc(33.333% - 20px); 
            box-sizing: border-box; 
        }

        .article img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .title a {
            text-decoration: none;
            color: black;
        }

        .title a:hover {
            text-decoration: underline;
        }
        
        .centriraj {
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
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

    <div class="centriraj">
    <section class="section"
    >
        <h2><a href="politika.php" style="text-decoration: none; color: black;">Politics ></a></h2>

        <div class="articles">


        <?php
            include 'connect.php';

            define('UPLPATH', 'img/');
        ?>
        
        
        
        <?php
            $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='politics'";

            $result = mysqli_query($dbc, $query);

            $i=0;
            while($row = mysqli_fetch_array($result)) {

                echo '<article class="article">';
                echo'<div class="">';
                echo '<div class="sport_img">';
                echo '<img src="' . UPLPATH . $row['slika'] . '"';
                echo '</div>';
                echo '<div class="media_body">';
                echo '<h4 class="title">';
                echo '<a href="clanak.php?id='.$row['id'].'">';
                echo $row['naslov'];
                echo '</a></h4>';
                echo '</div></div>';
                echo '</article>';
            }
            ?>
            
       

            
        </div>
    </section>

        
        
        

   
</div>

    <footer class="footer">
        <p>News from 17.05.2019 | © stern.de GmbH | Home</p>
    </footer>
</body>
</html>