<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\styleIndex.css">
</head>
<body>
    <header>
       <h1>Login</h1>
    </header>
    <div>
        <form action="analisa.php" method="post">
            <label for="name">Informe o seu nome</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="pass">Informe sua senha</label>
            <input type="password" name="pass" id="pass">
            <br>
            <label for="cargo">Informe sua patente</label>
            <select name="cargo" id="cargo">

            </select>
            <br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <script>
        var cargos = ["Policial","Detetive","Tenente"];
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