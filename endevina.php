<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 3</title>
</head>
<body>
    <?php
    session_start();
        $aleatori = rand(1,100);
        $_SESSION['aleatorio'] = $aleatori;
    ?>
    <p>ENDEVINA EL NOMBRE</p>
    
    <?php
        if(!isset($_GET['endevina'])){
            ?>
        <form>
            <label for="">ENDEVINA</label>
            <input type="number" name="endevina">
            <input type="submit">
        </form>

    <?php
        }else{
            if($_SESSION['aleatorio'] > $_GET['endevina']){
                echo "Es mayor";
                ?>
                <form>
                    <label for="">ENDEVINA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
                <?php
            }else if($_SESSION['aleatorio'] < $_GET['endevina']){
                echo "Es menor";
                ?>
                <form>
                    <label for="">ENDEVINA</label>
                    <input type="number" name="endevina">
                    <input type="submit">
                </form>
                <?php
            }else{
                echo "Lo has adivinado\n<br>";
                echo "<a href='ex41pagina1.php'>Volver al principio</a>";
            }
        }
    ?>
</body>
</html>