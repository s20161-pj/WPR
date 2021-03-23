<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Pole prostokąta o bokach a i b </title>
</head>
<body>
   <?php
   $bok_a=$_POST['a'];
   $bok_b=$_POST['b'];
   $pole_prostokata=$bok_a*$bok_b;
   echo "<h2>Pole prostokąta = $pole_prostokata </h2>";
   ?>
</body>

</html>