<?php
$graus = $_POST['graus'];

$celsius = (5 * ($graus - 32) / 9);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="resultado">
        <label for="vlr_resultado">Resultado:</label>
        <input type="text" id="vlr_resultado" value="<?=round($celsius,2)?> °C" disabled>
        <button id="voltar" onclick="window.history.back()">Voltar</button>
    </div>
</body>
</html>