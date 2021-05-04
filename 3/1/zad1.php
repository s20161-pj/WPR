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
                return addition($number1, $number2);
                break;
            case "Substraction":
                return substraction($number1, $number2);
                break;
            case "Multiplication":
                return multiplication($number1, $number2);
                break;
            case "Division":
                return division($number1, $number2);
                break;
                
        }
    }

    include ('functions.php');


    echo "The resault is: " .calculation();
    ?>
    <br><br>
    <a href="1.php">Back</a>
</body>

</html>