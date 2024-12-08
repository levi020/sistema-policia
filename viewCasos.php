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
                $sql = "SELECT `numCaso`, `descricao`, `suspeitos`, `vitimas`, `tipo`, `solucao`, `nomeOficial` FROM `casos`";
                $query = $conn->query($sql);
                echo "<table>";
                while($row = mysqli_fetch_array($query)){
                    echo "
                    <td>
                        <h3>numero do caso:</h3>
                        <p>$row[0]<p>
                    </td>
                    <td>
                        <h3>Descrição do caso:</h3>
                        <p>$row[1]</p>
                    <td>
                    <td>
                        <h3>suspeitos:</h3>
                        <p>$row[2]</p>
                    </td>
                    <td>
                        <h3>vitimas:</h3>
                        <p>$row[3]</p>
                    </td>
                    <td>
                        <h3>Tipo de crime:</h3>
                        <p>$row[4]</p>
                    </td>
                    <td>
                        <h3>Nome do oficial responsável:</h3>
                        <p>$row[6]</p>
                    </td>";
                }
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>