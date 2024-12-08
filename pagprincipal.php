<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\stylePagPrincipal.css">
</head>
<body>
    <div>
        <h1>
        <?php 
        include "conn.php";

        session_start();

        if(empty($_SESSION["nome"]) || empty($_SESSION["cargo"])){
            header("location:index.php",true,301);
        }else{
            echo "Bem-Vindo(a) ".$_SESSION["nome"];
            
        }
        ?>
        </h1>
        <h1><?php echo $_SESSION["cargo"]; ?></h1>
    </div>
    <div>
        <?php
            echo "<div>";
            if($_SESSION["cargo"] == "Policial"){
                echo "<p><a href='addCaso.php'>Adicionar um novo caso</a></p>";
                echo "<p><a href='revisaCaso.php'>Revisar seus casos</a></p>";
                echo "<p><a href='sair.php'>Sair</a></p>";
            }else if($_SESSION["cargo"] == "Detetive"){
                echo "<p><a href='addCaso.php'>Adicionar um novo caso</a></p>";
                echo "<p><a href='revisaCaso.php'>Revisar seus casos</a></p>";
                echo "<p><a href='sair.php'>Sair</a></p>";
            }else if($_SESSION["cargo"] == "Tenente"){
                echo "<p><a href='addOficial.php'>Adicionar novo oficial</a></p>";
                echo "<p><a href='viewCasos.php'>Ver todos os casos</a></p>";
                echo "<p><a href='sair.php'>Sair</a></p>";
            }else{
                echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>