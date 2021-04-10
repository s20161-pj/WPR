<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Calculator</title>
</head>

<body>
    <?php
    function calculation()
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        switch ($_POST['dropdown']) {
            case "Addition":
                $total = $number1 + $number2;
                return $total;
                break;
            case "Substraction":
                $difference= $number1 - $number2;
                return $difference;
                break;
            case "Multiplication":
                $product = $number1 * $number2;
                return $product;
                break;
            case "Division":
                $quotient = $number1 / $number2;
                return $quotient;
                break;
                
        }
    }
    echo "The resault is: " .calculation();
    ?>
    <br><br>
    <a href="1.php">Back</a>
</body>

</html>