<?php

include "conn.php";

session_start();

if($conn->connect_error){
    echo "server morreu".$conn->connect_errno;
}else{
    $numCaso = $conn->real_escape_string($_POST["numCaso"]);
    $descCaso = $conn->real_escape_string($_POST["descCaso"]);
    $suspects = $conn->real_escape_string($_POST["suspects"]);
    $vitimas = $conn->real_escape_string($_POST["vit"]);
    $tipo = $conn->real_escape_string($_POST["tipoCrime"]);
    $solu = $conn->real_escape_string($_POST["solu"]);
    $nomeOficial = $_SESSION["nome"];

    $sql = "INSERT INTO `casos`(`numCaso`, `descricao`, `suspeitos`, `vitimas`, `tipo`, `solucao`, `nomeOficial`) VALUES
    ('".$numCaso."','".$descCaso."','".$suspects."','".$vitimas."','".$tipo."','".$solu."','".$nomeOficial."')";

    if ($conn->query($sql) == true) {
        echo "<script>
        alert('inserção feita com sucesso');
        window.location.href='pagprincipal.php';
        </script>";
    }else{
        echo "<script>
        alert('inserção Mal-sucedida');
        window.location.href='addCaso.php';
        </script>";
    }
    $conn->close();
}