<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Zadanie 1.10</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="number">
        <input type="submit" name="submit" value="Wyświetl" />   
    </form>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    for ($i = $number; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    for ($i = $number; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
}  
   
?>