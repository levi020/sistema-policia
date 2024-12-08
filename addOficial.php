<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="addOficialSql.php" method="post">
            <label for="name">Insira o nome do oficial:</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="senha">Insira a senha do oficial</label>
            <br>
            <input type="text" name="senha" id="senha">
            <br>
            <label for="cargo">Qual o cargo do oficial</label>
            <br>
            <select name="cargo" id="cargo">

            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <script>
        var cargos = ["Policial","Detetive","tenente"];
        const select = document.getElementById("cargo");

        for(let i = 0; i < cargos.length;i++){
            let option = document.createElement("option");
            option.value = cargos[i];
            option.textContent = cargos[i];
            select.appendChild(option);
        }
        </script>
    </div>
</body>
</html>