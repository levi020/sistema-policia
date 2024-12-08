<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1><?php 
        include "conn.php";

        session_start();

        if(empty($_SESSION["nome"]) || empty($_SESSION["cargo"])){
            header("location:index.php",true,301);
        }else{
            echo "Bem-Vindo(a) ".$_SESSION["nome"];
            
        }
        ?></h1>
        <h1><?php echo $_SESSION["cargo"]; ?></h1>
    </div>
    <div>
        <?php
            echo "<div>";
            switch($_SESSION["cargo"]){
                case "Policial":
                        echo "<p><a href='addCaso.php'>Adicionar um novo caso</a></p>";
                        echo "<p><a href='revisaCaso.php></a></p>";
                    break;
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>