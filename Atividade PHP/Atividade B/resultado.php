<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$array = array($n1, $n2, $n3);

rsort($array);

foreach($array as $valor){
    echo $valor . "</br>";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação de números</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="container" id="resultado">
        <h1>Valores Decrescentes</h1>
        <div class="decrescente">
        <?php
                foreach($array as $valor){
                    echo "<p>$valor</p>";
                }
        ?>
        </div>
        <button id="voltar" onclick="window.history.back()">Voltar</button>
    </div>
</body>
</html>