<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $podana_liczba = $_POST['liczba'];
    if ($podana_liczba > 0 && $podana_liczba <= 12) {
        switch ($podana_liczba) {
            case 1:
                echo "styczeń 31 dni";
                break;
            case 2:
                echo "luty 29dni";
                break;
            case 3:
                echo "marzec 31dni";
                break;
            case 4:
                echo "kwiecień 30dni";
                break;
            case 5:
                echo "maj 31dni";
                break;
            case 6:
                echo "czerwiec 30dni";
                break;
            case 7:
                echo "lipiec 31dni";
                break;
            case 8:
                echo "sierpień 31dni";
                break;
            case 9:
                echo "wrzesień 30dni";
                break;
            case 10:
                echo "październik 31dni";
                break;
            case 11:
                echo "listopad 30dni";
                break;
            case 12:
                echo "grudzień 31dni";
                break;
        }
    } 
    else {
        echo ("BLĄD");
    }
    ?>
</body>

</html>