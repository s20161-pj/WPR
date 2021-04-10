<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
    .form {
        background-color: white;
        padding: 20px;
        margin: 30px;
        font-size: 20px;
        
    }
    .title{
        padding-top: 30px;;
        padding-bottom: 80px;
        text-align: center;
        color: #4A148C;
        font-weight: 900;
        font-size: 32px;
    }
    </style>
</head>

<body style ="background-color:#CFD8DC ">

    <div class="title">Summary of the registration form</span></div>
<div class="form">
    <?php
    $guests = $_POST['guests'];
    echo '<span style="color:#4A148C"><b>Number of guests:</b></span> '  . $guests;
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    echo '<span style="color:#4A148C"><br> <br> <b>Name and surname:</b></span> '   .$name, " "  .$surname;
    $address = $_POST['address'];
    echo '<span style="color:#4A148C"><br><br> <b>Address:</b></span> ' .$address;
    $email = $_POST['email'];
    echo '<span style="color:#4A148C"><br><br> <b>e-mail:</b></span> ' .$email;
    $phone = $_POST['phone'];
    echo '<span style="color:#4A148C"><br><br> <b>Phone number:</b></span> ' .$phone;
    $credit_card = $_POST['credit_card'];
    echo '<span style="color:#4A148C"><br><br><b>Credit card number:</b></span> ' .$credit_card;
    $check_in = $_POST['check_in'];
    echo '<span style="color:#4A148C"><br><br><b>Check-in:</b></span> ' .$check_in;
    $check_out = $_POST['check_out'];
    echo '<span style="color:#4A148C"><br><br><b>Check-out:</b></span> ' .$check_out; 
    echo "<br><br>";
    if (isset($_POST['additional_bed'])) {
        $selected = $_POST['additional_bed'];
        echo '<span style="color:#4A148C"><b>Additional bed:</b></span>  Yes';
    } else {
        echo '<span style="color:#4A148C"><b>Additional bed:</b></span> No';
    }
    echo '<span style="color:#4A148C"><br><br><b>Room facilities:</b> </span>';
    if(!isset($_POST['room_facilities'])) {
        echo "Not selected";
    } else {
        foreach ($_POST['room_facilities'] as $selectedOption)
        echo $selectedOption."\n";
    }
    
    ?>
</div> 

</body>

</html>