<!-- 3. Создайте функцию, которая на вход принимает два числа:
число, которое нужно возвести в степень и степень до которого
нужно возвести число. -->

<?php
function power($number, $degree)
{
    $result = 1;
    for ($i = 0; $i < $degree; $i++) {
        $result *= $number;
    }
    return $result;
}
echo power(2, 3);
?>