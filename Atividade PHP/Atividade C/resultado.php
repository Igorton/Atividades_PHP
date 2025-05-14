<?php
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];

$soma = $v1 + $v2;

if($soma > 20){
    $soma += 8;
}elseif($soma <= 20){
    $soma -= 5;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metódo de adição</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="container" id="resultado">
            <h1>Resultado</h1>
            <input type="number" value="<?=$soma?>" disabled>
            <button id="voltar" onclick="window.history.back()">Voltar</button>
    </div>
</body>
</html>