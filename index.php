<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('./templates/header.html');

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
    <div class="title">
        <h1> Décor </h1>
    </div>
    <div class='container'>
        <?php
        if (empty($_SESSION['username'])) {
        ?>
        <div>
            <form method="POST" action="./queries/login.php">
                <div class="input-container">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button class="button" type="submit" name="login">Login</button>
            </form>
        </div>
        <div>
            <h3>Importar usuarios</h3>
            <form action='./queries/importar_usuarios.php' method='POST'>
                <input class='button' type='submit' value='Importar usuarios'>
            </form>
        </div>
        <?php } ?>

        <?php if (isset($_SESSION['username'])) { ?>
        <div>
            <h1>¡Hola <?php echo $_SESSION['username']; ?>!</h1>
        </div>
        <form method="POST" action="./queries/logout.php">
            <button class="button" name="logout">Logout</button>
        </form>
        <?php } ?>
    </div>
    <footer>
        <p>
        </p>
    </footer>
</body>
<div class="logo">
    <img src="images/logo2.jpg" alt="">
</div>

</html>
