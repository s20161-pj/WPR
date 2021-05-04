<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Zadanie2</title>
</head>

<body>
    <?php
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wczesniejse_wpisy = file_get_contents('baza.txt');
    $nowy_wpis = $wczesniejse_wpisy . PHP_EOL . $imie . " " . $nazwisko;
    if (file_put_contents('baza.txt', $nowy_wpis) !== false) {
        echo 'Dodano';
    } else {
        echo 'Nie udało się dodać';
    } ?>
</body>

</html>