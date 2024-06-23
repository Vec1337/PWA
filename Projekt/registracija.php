<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Stern</title>
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



<section role="main">
    <form enctype="multipart/form-data" action="reg.php" method="POST">
        <div class="form-item">
            <span id="porukaIme" class="bojaPoruke"></span>
            <label for="title">Ime: </label>
            <div class="form-field">
                <input type="text" name="ime" id="ime" class="form-field-textual">
            </div>
        </div>
        <div class="form-item">
            <span id="porukaPrezime" class="bojaPoruke"></span>
            <label for="about">Prezime: </label>
            <div class="form-field">
                <input type="text" name="prezime" id="prezime" class="form-field-textual">
            </div>
        </div>
        <div class="form-item">
            <span id="porukaUsername" class="bojaPoruke"></span>
            <label for="content">Korisničko ime:</label>
            <!-- Ispis poruke nakon provjere korisničkog imena u bazi -->
            <!--<?php echo '<br><span class="bojaPoruke">' . $msg . '</span>'; ?> -->
            <div class="form-field">
                <input type="text" name="username" id="username" class="form-field-textual">
            </div>
        </div>
        <div class="form-item">
            <span id="porukaPass" class="bojaPoruke"></span>
            <label for="pphoto">Lozinka: </label>
            <div class="form-field">
                <input type="password" name="pass" id="pass" class="form-field-textual">
            </div>
        </div>
        <div class="form-item">
            <span id="porukaPassRep" class="bojaPoruke"></span>
            <label for="pphoto">Ponovite lozinku: </label>
            <div class="form-field">
                <input type="password" name="passRep" id="passRep" class="form-field-textual">
            </div>
        </div>
        <div class="form-item">
            <button type="submit" value="Prijava" id="slanje">Prijava</button>
        </div>
    </form>
</section>
<script type="text/javascript">
    document.getElementById("slanje").onclick = function(event) {
        var slanjeForme = true;

        // Ime korisnika mora biti uneseno
        var poljeIme = document.getElementById("ime");
        var ime = document.getElementById("ime").value;
        if (ime.length == 0) {
            slanjeForme = false;
            poljeIme.style.border = "1px dashed red";
            document.getElementById("porukaIme").innerHTML = "<br>Unesite ime!<br>";
        } else {
            poljeIme.style.border = "1px solid green";
            document.getElementById("porukaIme").innerHTML = "";
        }

        // Prezime korisnika mora biti uneseno
        var poljePrezime = document.getElementById("prezime");
        var prezime = document.getElementById("prezime").value;
        if (prezime.length == 0) {
            slanjeForme = false;
            poljePrezime.style.border = "1px dashed red";
            document.getElementById("porukaPrezime").innerHTML = "<br>Unesite Prezime!<br>";
        } else {
            poljePrezime.style.border = "1px solid green";
            document.getElementById("porukaPrezime").innerHTML = "";
        }

        // Korisničko ime mora biti uneseno
        var poljeUsername = document.getElementById("username");
        var username = document.getElementById("username").value;
        if (username.length == 0) {
            slanjeForme = false;
            poljeUsername.style.border = "1px dashed red";
            document.getElementById("porukaUsername").innerHTML = "<br>Unesite korisničko ime!<br>";
        } else {
            poljeUsername.style.border = "1px solid green";
            document.getElementById("porukaUsername").innerHTML = "";
        }

        // Provjera podudaranja lozinki
        var poljePass = document.getElementById("pass");
        var pass = document.getElementById("pass").value;
        var poljePassRep = document.getElementById("passRep");
        var passRep = document.getElementById("passRep").value;
        if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
            slanjeForme = false;
            poljePass.style.border = "1px dashed red";
            poljePassRep.style.border = "1px dashed red";
            document.getElementById("porukaPass").innerHTML = "<br>Lozinke nisu iste!<br>";
            document.getElementById("porukaPassRep").innerHTML = "<br>Lozinke nisu iste!<br>";
        } else {
            poljePass.style.border = "1px solid green";
            poljePassRep.style.border = "1px solid green";
            document.getElementById("porukaPass").innerHTML = "";
            document.getElementById("porukaPassRep").innerHTML = "";
        }

        if (slanjeForme != true) {
            event.preventDefault();
        }
    };
</script>



   
</div>

    <footer class="footer">
        <p>News from 17.05.2019 | © stern.de GmbH | Home</p>
    </footer>
</body>
</html>