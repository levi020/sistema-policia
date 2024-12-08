<?php
include "conn.php";

session_start();

if($conn->connect_error){
    echo "server morreu".$conn->connect_errno;
}else{
    $name = hash("sha512", $conn->real_escape_string($_POST["name"]));
    $senha = hash("sha512", $conn->real_escape_string($_POST["senha"]));
    $cargo = hash("sha512", $conn->real_escape_string($_POST["cargo"]));

    $sql = "INSERT INTO `resgistros`(`name`, `senha`, `cargo`) VALUES ('".$name."','".$senha."','".$cargo."')";
    if($conn->query($sql) == true){
        echo "<script>
            alert('inserção bem sucedida');
            window.location.href = 'pagprincipal.php';
        </script>";
    }else{
        echo "<script>
            alert('inserção mal sucedida');
            window.location.href = 'pagprincipal.php';
        </script>";
    }
    $conn->close();
    
}