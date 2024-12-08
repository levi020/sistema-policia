<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="analisa.php" method="post">
            <input type="text" name="name" id="name">
            <input type="text" name="pass" id="pass">
            <select name="cargo" id="cargo">

            </select>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <script>
        var cargos = ["Policial","Detetive","Analista","Sargento","tenente","Capitão"];
        const select = document.getElementById("cargo");

        for(let i = 0; i < cargos.length;i++){
            let option = document.createElement("option");
            option.value = cargos[i];
            option.textContent = cargos[i];
            select.appendChild(option);
        }
    </script>
</body>
</html>