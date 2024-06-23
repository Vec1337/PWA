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

    <form action="" method="POST">
        <div class="form-item">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-item">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-item">
            <button type="submit" value="Prijava">Login</button>
        </div>
    </form>

    <?php
    include 'connect.php';
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM korisnik WHERE korisnicko_ime = ?";

        $stmt = mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                mysqli_stmt_bind_result($stmt, $id, $ime, $prezime, $korisnicko_ime, $lozinka, $razina);

                while (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($pass, $lozinka)) {
                        if ($razina == 1) {
                            header("Location: administracija.php");
                            exit();
                        } else {
                            echo "$korisnicko_ime, nemate dovoljna prava za
                                    pristup ovoj stranici.";
                        }
                    } else {
                        echo "Neuspješan login. Krivi password.";
                        echo "<a href='registracija.php'>Registrirajte se</a>";
                    }
                }
            } else {
                echo "Neuspješan login. Korisničko ime ne postoji.";
                echo "<a href='registracija.php'>Registrirajte se</a>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Failed to prepare the statement.";
        }

        mysqli_close($dbc);
    }
    ?>

    <footer class="footer">
        <p>News from 17.05.2019 | © stern.de GmbH | Home</p>
    </footer>
</body>
</html>
