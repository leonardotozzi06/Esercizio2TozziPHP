<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $capitale = 10000;
        echo "<p>il capitale è $capitale </p>";

        $tasso = 5;
        echo "<p>il tasso è $tasso </p>";

        $numGiorni = 12;
        echo "<p>i giorni sono $numGiorni </p>";

        $interessi = ($capitale * $tasso * $numGiorni) / 36500;

        echo "<h2 style = 'color: green'> L'interesse calcolato è di $interessi € </h2>";

    ?>
</body>
</html>