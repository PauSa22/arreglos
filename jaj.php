<?php
session_start();
?>
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
    if (!isset($_SESSION['num'])) {
        $num = [];
        for ($i = 0; $i < 50; $i++) {
            $num[] = rand(1, 100);
        }
        $_SESSION['num'] = $num;
    }
    
    // lo imprime en vuestra pantalla en un solo renglón
    $cadena_n = implode(", ", $_SESSION['num']);
    echo "<p>" . $cadena_n . "</p>";
    ?>

    <form method="post">
        <button type="submit" name="btn_mayores">Mostrar los 3 más grandes</button>
    </form>

    <?php
    // Obtiene e imprime los 3 números mayores
    if (isset($_POST['btn_mayores'])) {
        $copia_num = $_SESSION['num'];
        rsort($copia_num);
        $tres_mayores = array_slice($copia_num, 0, 3);

        echo "<h3 style='color: blue;'>Los 3 números más grandes son: " . implode(", ", $tres_mayores) . "</h3>";
        session_destroy(); 
    }
    ?>
</body>
</html>
