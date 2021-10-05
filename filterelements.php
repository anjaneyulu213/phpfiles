<?php
function filter_elements($items,...$params){
    return array_values(array_diff($items,$params));
}
print_r(filter_elements([1,2,3,4,3,4],3,4));
?>