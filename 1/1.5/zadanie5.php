<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $text =$_POST['napis'];
    $pieces = explode(" ", $text);
    echo "%$pieces[1] $pieces[0]$#";
    ?>
</body>

</html>