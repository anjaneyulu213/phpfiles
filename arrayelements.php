<?php
function remove_from_left($items,$n=1){
    return array_slice($items,$n);
}
print_r(remove_from_left([1,2,3]));
print_r(remove_from_left([1,2,3,4,5],3));
 ?>