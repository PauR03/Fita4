<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina 2</title>
</head>
<body>
    <p>NOMBRE ENREGISTRAT</p>
    <?php
        session_start();

        $_SESSION['ocult'] = $_POST['ocult'];
    ?>
    <a href="ex41pagina3.php">Endevinar</a>
</body>
</html>