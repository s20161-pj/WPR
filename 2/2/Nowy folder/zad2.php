<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Booking from</title>
</head>

<body>
    <?php
    $guests = $_POST['guests'];
    echo 'Number of guests: ' . $guests;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    echo "<br> <br> Name and surname: $name  $surname";
    $address = $_POST['address'];
    echo "<br><br> Address: $address";
    $email = $_POST['email'];
    echo "<br><br> e-mail: $email";
    $phone = $_POST['phone'];
    echo "<br><br> Phone number: $phone";
    $credit_card = $_POST['credit_card'];
    echo "<br><br>Credit card number: $credit_card";
    $check_in = $_POST['check_in'];
    echo "<br><br>Check-in: $check_in";
    $check_out = $_POST['check_out'];
    echo "<br><br>Check-out: $check_out<br><br>";
    if (isset($_POST['additional_bed'])) {
        $selected = $_POST['additional_bed'];
        echo 'Additional bed: Yes';
    } else {
        echo 'Additional bed: No';
    }
    echo "<br><br>Room facilities: ";
    foreach ($_POST['room_facilities'] as $selectedOption)
    echo $selectedOption."\n";
    ?>

</body>

</html>