<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINCIDÈNCIES</title>
</head>
<body>
    <p>COINCIDÈNCIES</p>
    <a href="ex42pagina1.php">Pagina 1</a>
    <br>
    <?php
        session_start();
        $listaFrase1 = explode(" ",$_SESSION['frase1']);
        $listaFrase2 = explode(" ",$_GET['frase2']);
        $noCoinciden = true;
        foreach($listaFrase1 as $palabra){
            if(in_array($palabra,$listaFrase2)){
                echo "La paraula <strong>$palabra</strong> està a les dues frases\n<br>";
                $noCoinciden = false;
            }
            
        }
        if($noCoinciden){
            echo "No hi ha cap coincidència.";
        }
    ?>
    
</body>
</html>