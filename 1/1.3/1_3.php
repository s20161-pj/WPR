<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Pierwiastek kwadratowy z liczby </title>
</head>

<body>
    <?php
    function pierwiastek_kwadratowy($liczba)
    {
        return sqrt($liczba);
    }
    $wynik = pierwiastek_kwadratowy(pi());
    echo round($wynik, 2);
    ?>
</body>

</html>