<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if ($a < $b  && $a < $c &&  $b < $c) {
        echo "Liczby uporządkowane w kolejności rosnącej: $a  $b  $c </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $c  $b  $a";
    }
    if ($a > $b && $a < $c && $b < $c) {
        echo "Liczby uporządkowane w kolejności rosnącej:$b $a $c </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $c  $a  $b";
    }
    if ($a > $b && $a > $c && $b < $c) {
        echo "Liczby uporządkowane w kolejności rosnącej:$b $c $a </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $a  $c  $b";
    }
    if ($a > $b && $a > $c && $b > $c) {
        echo "Liczby uporządkowane w kolejności rosnącej:$c $b $a </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $a  $b  $c";
    }
    if ($a < $b && $a < $c && $b > $c) {
        echo "Liczby uporządkowane w kolejności rosnącej:$a $c $b </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $b  $c  $a";
    }
    if ($a < $b && $a > $c && $b > $c) {
        echo "Liczby uporządkowane w kolejności rosnącej:$c $a $b </br> <br>";
        echo "Liczby uporządkowane w kolejności malejącej: $b  $a  $c";
    }

    ?>
</body>

</html>