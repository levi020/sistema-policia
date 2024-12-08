<?php

include "conn.php";

if($conn->connect_error){
    echo "server morreu".$conn->connect_errno;
}else{
    $nameC = hash("sha512",$conn->real_escape_string($_POST["name"]));
    $senhaC = hash("sha512", $conn->real_escape_string($_POST["pass"]));
    $cargoC = hash("sha512",$conn->real_escape_string($_POST["cargo"]));

    $sql = "SELECT `name`, `senha`, `cargo` FROM `resgistros` WHERE `name`='".$nameC."' AND `senha`='".$senhaC."' AND `cargo`='".$cargoC."';";
    $query = $conn->query($sql);
    if ($query->num_rows == 1) {
        $cargo = $conn->real_escape_string($_POST["cargo"]);
        $nome = $conn->real_escape_string($_POST["name"]);

        session_start();

        $_SESSION["nome"] = $nome;
        $_SESSION["cargo"] = $cargo;
        header("location: pagprincipal.php",true, 301);
    }else{
        echo "<script>
        alert('Login Mal-Sucedido');
        window.location.href = 'Index.php';
      </script>";
    }
    $conn->close();
}