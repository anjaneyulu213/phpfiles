<?php
$text='PHP Tutorial';
$text=preg_replace('/(\b[a-z])/i',
    '<span style="color:orangered;">\1</span>', $text);
echo $text;
?>
