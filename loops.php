<?php
$x=1;
while($x<=10){
    if($x==4){
        $x++;
        continue;
    }
    echo $x .'&nbsp';
    $x++;
}
$y=10;
do {
    if($y==15){
        $y++;
        break;
    }
    echo $y . '<br>';
    $y++;
}while($y<=20);
for($i=20;$i<=30;$i++){
    echo $i . '<br>';
}
$cars=array('volve','BMW','Tayota','Audi');
foreach($cars as $value){
    echo $value .'<br>';
}


?>