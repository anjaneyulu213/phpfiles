<?php
function get_last_element($items,$func){
    $filteredItems=array_filter($items,$func);
    return array_pop($filteredItems);
}
echo get_last_element([1,2,3,4],function ($n){
    return $n%2===1;
});
echo get_last_element([1,2,3,4],function ($n){
    return $n%2===0;
});
?>
