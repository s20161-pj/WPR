<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Zadanie 1.4 </title>
</head>

<body>
    <?php

    $liczba_1 = $_POST['liczba_1'];
    $liczba_2 = $_POST['liczba_2'];

    if ($liczba_1 > 0 && $liczba_2 > 0) { 
            $suma_liczb = $liczba_1 + $liczba_2;
            echo "<h2>Suma liczb = $suma_liczb </h2>";
         
            $odejmowanie_liczb = $liczba_1 - $liczba_2;
            echo "<h2>Wynik odejmowania = $odejmowanie_liczb </h2>";
        
            $mnozenie_liczb = $liczba_1*$liczba_2;
            echo "<h2>Wynik mnożenia= $mnozenie_liczb </h2>";

            $modulo=$liczba_1%$liczba_2;
            echo "<h2>Wynik modulo= $modulo </h2>";
    } 
    else {
        echo ("Nie można wykonać działania, do obliczeń należy podać liczby naturalne");
    }
    ?>
</body>

</html>