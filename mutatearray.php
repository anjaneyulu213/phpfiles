<?php
function mutate_array($items,...$params){
    $items=array_values(array_diff($items,$params));
    return $items;
}
$items=['a','b','c','a','b','c'];
print_r(mutate_array($items,'a','b'));
?>