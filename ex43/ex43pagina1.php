<?php
    session_start();
    if(!isset($_SESSION['conjuntDeLletres'])){
        $_SESSION['conjuntDeLletres'] = "";
    }
    
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

                $llista =  'QWERTYUIOPASDFGHJKLçZXCVBNM';
                echo "<form action='ex43pagina1.php' method='get'>\n";
                for($i = 0; $i < strlen($llista); $i++){
                    echo "<input type='submit' value='$llista[$i]' name='$llista[$i]'>\n";
                }
                echo "</form>";
                $ultimaLletra = "";
                foreach($_GET as $letra){
                    $ultimaLletra = $letra;
                }
                $_SESSION['conjuntDeLletres'] .= $_GET[$ultimaLletra] ;
                echo $_SESSION['conjuntDeLletres'];
    ?>
</body>
</html>