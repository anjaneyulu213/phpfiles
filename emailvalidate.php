<?php
 $email='Anjaneyuluthummalapally@gmail.com';
 if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'valid email address';
}
else{
    echo 'invalid email address';
}
?>