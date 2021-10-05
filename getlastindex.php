<?php
function get_last_key($items,$func){
    $filteredItems=array_keys(array_filter($items,$func));
    return array_pop($filteredItems);
}
echo get_last_key([1,2,3,4,5,6],function ($n){
    return $n%2===1;
});
echo get_last_key([1,2,3,4,5,6],function ($n){
    return $n%2===0;
});
?>
