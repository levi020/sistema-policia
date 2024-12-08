<?php
include "conn.php";
session_start();

if($conn->connect_error){
    echo "server morreu".$conn->connect_errno;
}else{
    $id = $_POST["id"];
    $numCaso = $conn->real_escape_string($_POST["newName"]);
    $descNew = $conn->real_escape_string($_POST["descNew"]);
    $susNew = $conn->real_escape_string($_POST["susNew"]);
    $vit = $conn->real_escape_string($_POST["vit"]);
    $tipoCrime = $conn->real_escape_string($_POST["tipoCrime"]);
    $solu = $conn->real_escape_string($_POST["solu"]);

    $sql = "UPDATE `casos` SET`numCaso`='".$numCaso."',`descricao`='".$descNew."',`suspeitos`='".$susNew."',`vitimas`='".$vit."',`tipo`='".$tipoCrime."',`solucao`='".$solu."' WHERE `id`='".$id."';";
    if($conn->query($sql) == true){
        echo "
        <script>
            alert('Mudanças salvas com sucesso');
            window.location.href = 'pagprincipal.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Mudanças não foram salvas');
            window.location.href = 'pagprincipal.php';
        </script>";
    }
    $conn->close();
}