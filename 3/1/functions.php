<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>functions</title>
</head>

<body>
    <?php

    function addition($num1, $num2)
    {
        $total = $num1 + $num2;
        return $total;
    }
    function substraction($num1, $num2)
    {
        $difference = $num1 - $num2;
        return $difference;
    }
    function multiplication($num1, $num2)
    {
        $product = $num1 * $num2;
        return $product;
    }
    function division($num1, $num2)
    {
        $quotient = $num1 / $num2;
        return $quotient;
    }
    ?>
</body>

</html>