<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Zadanie 1.4 </title>
</head>

<body>
    <?php

    $liczba = $_POST['liczba'];


    if ($liczba  < 0) {
        echo "<h3>Podana liczbą nie jest liczbą dodatnią</h3>";
    } else {
        if(isPrime($liczba)){
            echo "Liczba  jest liczbą pierwszą";
        } else{
            echo "Liczba nie jest liczbą pierwszą";
        }
    }

    function isPrime($liczba)
    {
        if ($liczba == 1){
            return false;
        }
        
        $licznik  = 0;
        for ($i = 2; $i <= $liczba/2; $i++){
            $licznik++;

            if ($liczba % $i == 0) {
                echo "Pętla się wykonuje " .$licznik. " <br />";
                return false;
            }      
        }
     echo "Pętla się wykonuje " .$licznik. " <br />";

    return true;
    }
    ?>
</body>

</html>