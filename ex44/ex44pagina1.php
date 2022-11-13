<?php
    session_start();
    if(!isset($_SESSION['llistaText'])){
        $_SESSION['llistaText'] = [];
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex44pagina1.php" method="post">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        array_push($_SESSION['llistaText'],$_POST['text']);
        foreach($_SESSION['llistaText'] as $text){
            echo $text."<br>\n<br>\n";
        }
    ?>
</body>
</html>