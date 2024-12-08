<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start(); 
    ?>
    <div>
        <form action="adicionar.php" method="post">

            <label for="numCaso">Insira o numero do caso</label>
            <br>
            <input type="text" name="numCaso" id="numCaso">
            <br>
            <label for="descCaso">Insira uma descrição sobre o caso</label>
            <br>
            <input type="text" name="descCaso" id="descCaso">
            <br>
            <label for="suspects">Insira os principais suspeitos</label>
            <br>
            <input type="text" name="suspects" id="suspects">
            <br>
            <label for="vit">Insira as vitimas</label>
            <br>
            <input type="text" name="vit" id="vit">
            <br>
            <label for="tipoCrime">Insira o tipo de crime</label>
            <br>
            <input type="text" name="tipoCrime" id="tipoCrime">
            <br>
            <label for="solu">O caso foi solucionado?</label>
            <br>
            <select name="solu" id="solu">
                <option value="n">Não</option>
                <option value="s">Sim</option>
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>