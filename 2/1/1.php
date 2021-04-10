<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Calculator 2 </title>
</head>

<body>

    <form action="zad1.php" method="post">
        <label>Select an operation:</label>
        <select name="dropdown">
            <option></option>
            <option value="Addition">Addition</option>
            <option value="Substraction">Substraction</option>
            <option value="Multiplication">Multiciplation</option>
            <option value="Division">Division</option>
        </select><br><br>
        Enter the first number:<input type="number" name="first_number" required><br></br>
        Enter the second number:<input type="number" name="second_number" required><br></br>
        <input type="submit" value="Calculate"/>
    </form>
    
</body>

</html>