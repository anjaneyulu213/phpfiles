<?php
function get_last_element($source_array)
{
     $result = end($source_array);
    echo "Last element: ".$result;
}
echo get_last_element([1,2,3,4,5]).'<br>';
echo get_last_element([8,9,5,2]);

?>