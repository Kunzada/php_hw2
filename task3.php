<!-- 1. Создайте функцию, которая принимает на входе массив,
ищет в нем отрицательные числа, выводит массив на страницу
и меняет цвет отрицательных чисел на красный. -->
<?php
function task3($arr)
{

    for( $i = 0; $i < count($arr); $i++ )
    { 
        if ($arr[$i]>0){
            echo " "."<span style='color:green'>".$arr[$i]." "."</span>";
        }
        elseif ($arr[$i]<0){
            echo " "."<span style='color:red'>".$arr[$i]." "."</span>";
        } 
    }
}
$array=[-1,-2,3,4,5,6,7,8,9,10];
task3($array);
