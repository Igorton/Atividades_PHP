<?php
$chico = 1.50;
$juca = 1.10;

$anos = 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de altura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>Anos</th>
                <th>Juca</th>
                <th>Chico</th>
            </tr>
            <?php
                while($chico > $juca){
                    $juca += 0.03;
                    $chico += 0.02;
                    $anos++;

                    echo "<tr><td>$anos</td><td>$juca m</td><td>$chico m</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>