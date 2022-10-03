<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENREGISTRA FRASE 2</title>
</head>
<body>
    <p>ENREGISTRA FRASE 2</p>
    <form action="ex42pagina3.php" method="get">
        <input type="text" name="frase2">
        <input type="submit">
    </form>
    <?php
        session_start();
        $_SESSION['frase1'] = $_GET['frase1'];
    ?>
</body>
</html>