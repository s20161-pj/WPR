<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $bok_a = $_POST['a'];
    $bok_b = $_POST['b'];
    $bok_c = $_POST['c'];
    if ($bok_a + $bok_b > $bok_c && $bok_a + $bok_c > $bok_b && $bok_b + $bok_c > $bok_a) {
        echo ("Z podanych boków można zbudować trójkąt.");
    } else {
        echo ("BŁĄD");
    }
    ?>
</body>

</html>