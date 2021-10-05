<?php
function head($items){
    return reset($items);
}
print_r(head([1,2,3,4]));
echo '<br>';
print_r(head([3,4,5]));
?>