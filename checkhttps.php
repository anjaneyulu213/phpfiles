<?php
if(isset($_SERVER['HTTPS'])){
    echo 'Called from HTTPS';
}else{
    echo 'called from http';
}
?>