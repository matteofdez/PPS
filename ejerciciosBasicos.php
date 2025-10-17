<!DOCTYPE html>
<html>

<body>
    <h1>Ejercicio 1. Saludo básico</h1>
    <?php

    $miNombre = "Matteo";
    print "Hola, soy " . $miNombre;
    ?>

    <h1> Ejercicio 2. Calculadora simple</h1>
    <?php
    $num1 = 10;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "Número 1: $num1 <br>";
    echo "Número 2: $num2 <br><br>";

    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division <br>";
    ?>

    <h1>3. Conversión de Temperatura</h1>
    <?php
    $celsius = 25;
    $fahrenheit = ($celsius * 9 / 5) + 32;

    echo $fahrenheit;
    ?>

    <h1>4. Cálculo de Edad en Días</h1>
    <?php
    $edad = 15;
    $year = 365;

    $dias_vividos = $edad * $year;
    echo "Has vivido $dias_vividos días.";
    ?>

    <h1>5. Precio con IVA</h1>
    <?php
    $precio_sin_iva = 50;
    $iva_porcentaje = 21;
//EJERCICIOOO
    $iva = $precio_sin_iva * $iva_porcentaje / 100;
    $total = $precio_sin_iva + $iva;

    echo "Precio sin IVA: $precio_sin_iva €<br>";
    echo "IVA (21%): $iva €<br>";
    echo "Precio total: $total €<br>";
    ?>

    <h1>6 Intercambio de valores</h1>
    <?php
    $a = 5;
    $b = 10;

    echo "Antes del intercambio $a y $b <br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    //a

    echo "Después del intercambio $a y $b ";
    ?>
    <h1>7. Cálculo de Área de Rectángulo</h1>
    <?php
    $base = 8;
    $altura = 12;

    $area = $base * $altura;

    echo "El área de un rectángulo con la base: $base y altura: $altura es: $area.";
    ?>

    <h1>8. Promedio de Notas</h1>
    <?php
    $nota = 7;
    $nota1 = 8;
    $nota2 = 9;

    $promedio = ($nota + $nota1 + $nota2) / 3;

    echo "Nota 1: $nota <br>";
    echo "Nota 2: $nota1 <br>";
    echo "Nota 3: $nota2 <br>";
    echo "Nota promedio: $promedio <br>";
    ?>

    <h1>9. Conversión de Moneda</h1>
    <?php
    $dolares = 100;
    $tipoCambio = 0.85;

    $euros = $dolares * $tipoCambio;

    echo "$dolares dólares son equivalentes a " . number_format($euros, 2) . " euros.";
    ?>

    <h1>10. Cálculo de Propina</h1>
    <?php
    $cuenta = 75;
    $porcentajePropina = 0.15;

    $propina = $cuenta * $porcentajePropina;
    $total = $cuenta + $propina;

    echo "Cuenta: " . number_format($cuenta, 2) . "€<br>";
    echo "Propina (15%): " . number_format($propina, 2) . "€<br>";
    echo "Total a pagar: " . number_format($total, 2) . "€";
    ?>

    <h1>11. Contador Reales</h1>
    <?php
    $inicio = 9990;

    while ($inicio <= 10000) {
        echo $inicio . "<br>";
        $inicio++;
    }
    ?>

    <h1>12. Suma de Números</h1>
    <?php

    ?>

    <h1>13. Números Pares</h1>
    <?php

    ?>
    <h1>14. Tabla de Multiplicar</h1>
    <?php

    ?>
    <h1>15. Contador con Límite Variable</h1>
    <?php

    ?>
    <h1>16. Factorial de un Número</h1>
    <?php

    ?>
    <h1>17. Números Impares hasta Límite</h1>
    <?php

    ?>
    <h1>18. Contador Enteros</h1>
    <?php

    ?>
</body>

</html>