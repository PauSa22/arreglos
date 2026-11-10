<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo al azar</title>
</head>
<body>
    <h1>Números Aleatorios</h1>

    <?php
    // crear un arreglo aleatorio con 50 númerillos de 1-100
    $num = [];
    for ($i = 0; $i < 50; $i++) {
        $num[] = rand(1, 100);
    }

    // convierte el arreglo a cadena separada por coma(s)
    $cadena_n = implode(", ", $num);

    // lo imprime en vuestra pantalla en un solo renglón
    echo "<p>" . $cadena_n . "</p>";
    ?>
</body>
</html>