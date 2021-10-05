<?php
echo php_uname();
echo PHP_OS;
if(strtoupper(substr(PHP_OS,0,3))==='WIN'){
    echo 'This is a server using windows';
}else{
    echo 'This is not a server using windows';

}
?>