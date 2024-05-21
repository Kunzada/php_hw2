<!-- 1. Переведите число из двоичной системы счисления в шест-
надцатеричную. Формат вывода по умолчанию, поместить в пар-
ный тег <p>. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task1.php" method="post">
        <input type="text" name="num">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    while(strlen($num) %4!= 0) {
        $num = "0". $num;
    }
    $hexNumber="";
    for ($i = 0; $i < strlen($num); $i+=4){
        $binaryGroup=substr($num, $i, 4);
        $hexNumber.= dechex(bindec($binaryGroup)); //$binaryGroup;
    }
    echo "<p>Двоичное число: $num в шестнадцатеричной системе: $hexNumber</p>";

}


