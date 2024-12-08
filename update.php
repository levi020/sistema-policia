<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        
        <?php
            include "conn.php";
            session_start();

            if($conn->connect_error){
                echo "server morreu".$conn->connect_errno;
            }else{
                $id = $_POST["idCaso"];
                $sql = "SELECT `numCaso`, `descricao`, `suspeitos`, `vitimas`, `tipo`, `solucao` FROM `casos` WHERE `id`='".$id."';";
                $query = $conn->query($sql);

                while($row = mysqli_fetch_array($query)){
                    echo "
                    <form action='up.php' method='post'>
                        <input type='hidden' name='id' id='id' value='".$id."'>
                        <label for='newName'>Insira o novo numero</label>
                        <br>
                        <input type='text' name='newName' id='newName' value='$row[0]'>
                        <br>
                        <label for='descNew'>Insira uma nova descrição</label>
                        <br>
                        <input type='text' name='descNew' id='descNew' value='$row[1]'>
                        <br>
                        <label for='susNew'>Insira um novo suspeito</label>
                        <br>
                        <input type='text' name='susNew' id='susNew' value='$row[2]'>
                        <br>
                        <label for='vit'>Insira uma nova vitima</label>
                        <br>
                        <input type='text' name='vit' id='vit' value='$row[3]'>
                        <br>
                        <label for='tipoCrime'>Insira o tipo de crime</label>
                        <br>
                        <input type='text' name='tipoCrime' id'tipoCrime' value='$row[4]'>
                        <br>
                        <label for='solu'>O caso foi solucionado?</label>
                        <br>
                        <select type='text' name='solu' id='solu'>
                            <option value='n'>Não</option>
                            <option value='s'>Sim</option>
                        </select>
                        <br>
                        <input type='submit' value='Enviar'>
                    </form>";
                }
            }
            $conn->close();
        ?>
    </div>
</body>
</html>