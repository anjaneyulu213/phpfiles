<?php
function without_mod($m,$n){
    $divides=(int)($m/$n);
    return $m-$n*$divides;
}
echo without_mod(5,2)."<br>";
echo without_mod(10,5);
?>