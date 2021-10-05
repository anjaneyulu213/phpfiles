<?php
$number=407;
     $sum = 0;
    $x = $number;
    while($x != 0)
    {
        $rem = $x % 10;
        $sum = $sum + $rem*$rem*$rem;
        $x = $x / 10;
    }
     if ($number == $sum){
         echo "Yes it is an armstrong number";
}
     else {
         echo "No it is not an armstrong number";
     }
     ?>