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

        .title {
            padding-top: 30px;
            ;
            padding-bottom: 80px;
            text-align: center;
            color: #4A148C;
            font-weight: 900;
            font-size: 32px;
        }
    </style>
</head>

<body style="background-color:#CFD8DC ">

    <div class="title">Summary of the registration form</span></div>
    <div class="form">
        <?php
        $loadData = isset($_POST['csv']);

        if ($loadData == true) {
            loadDataFromCSV();
        } else {
            showFormResult();
        }

        function loadDataFromCSV()
        {
            $row = 1;
            $fp = fopen("dane.csv", "r");
            while ($data = fgetcsv($fp, 1000, ",")) {
                $num = count($data);
                $row++;
                for ($c = 0; $c < $num; $c++) {
                    print $data[$c] . ", ";
                }
                echo "<br />";
            }
            fclose($fp);
        }

        function showFormResult()
        {
            $guests = $_POST['guests'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $credit_card = $_POST['credit_card'];
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];
            $additional_bed = isset($_POST['additional_bed']);
            $room_facilities = $_POST['room_facilities'];

            $data = array($guests, $name, $surname, $address, $email, $phone, $credit_card, $check_in, $check_out, $additional_bed ? "yes" : "no", implode(" ", $room_facilities));
            $file = fopen('dane.csv', 'a');

            fputcsv($file, $data);

            fclose($file);
            echo '<span style="color:#4A148C"><b>Number of guests:</b></span> '  . $guests;
            echo '<span style="color:#4A148C"><br> <br> <b>Name and surname:</b></span> '   . $name, " "  . $surname;
            echo '<span style="color:#4A148C"><br><br> <b>Address:</b></span> ' . $address;
            echo '<span style="color:#4A148C"><br><br> <b>e-mail:</b></span> ' . $email;
            echo '<span style="color:#4A148C"><br><br> <b>Phone number:</b></span> ' . $phone;
            echo '<span style="color:#4A148C"><br><br><b>Credit card number:</b></span> ' . $credit_card;
            echo '<span style="color:#4A148C"><br><br><b>Check-in:</b></span> ' . $check_in;
            echo '<span style="color:#4A148C"><br><br><b>Check-out:</b></span> ' . $check_out;
            echo "<br><br>";

            if (isset($_POST['additional_bed'])) {
                $selected = $_POST['additional_bed'];
                echo '<span style="color:#4A148C"><b>Additional bed:</b></span>  Yes';
            } else {
                echo '<span style="color:#4A148C"><b>Additional bed:</b></span> No';
            }
            echo '<span style="color:#4A148C"><br><br><b>Room facilities:</b> </span>';
            if (!isset($_POST['room_facilities'])) {
                echo "Not selected";
            } else {
                foreach ($_POST['room_facilities'] as $selectedOption)
                    echo $selectedOption . "\n";
            }
        }
        ?>
    </div>
</body>
</html>