<?php 
$massiv=[];
for ($i=0; $i < 100; $i++) {
    $massiv[$i] = rand(1,100);
}
$min_num=$massiv[0];
$max_num=$massiv[0];
for ($i= 0; $i < count($massiv); $i++) {
   echo "".$massiv[$i]."  ";
}   
for ($i= 1; $i < count($massiv); $i++) {
        if($massiv[$i]<$min_num){
            $min_num=$massiv[$i];
        }
}   
for ($i= 1; $i < count($massiv); $i++) {
    if($massiv[$i]>$max_num){
        $max_num=$massiv[$i];
    }
}   
echo "</br>";
echo "max = $min_num";
echo "</br>";
echo "min= $max_num";

