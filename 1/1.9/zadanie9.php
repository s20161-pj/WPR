<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php

    $tablica1 =  array_map('intval', explode(",", $_POST['var1']));
    $tablica2 =  array_map('intval', explode(",", $_POST['var2']));
    $wynik = false;
    $suma = 0;
    if (count($tablica1) == count($tablica2)) {
        for ($i = 0; $i < count($tablica1); $i++) {
            if ($tablica1[$i] > 0 && $tablica2[$i] > 0) {
                $suma += $tablica1[$i] * $tablica2[$i];
                $wynik = true;
            } else {
                $wynik = false;
            }
        }
        if ($wynik) {
            echo " Iloczyn skalarny = $suma";
        } else {
            echo "Błąd";
        }
    } else {
        echo "Błąd";
    }
    ?>
</body>

</html>