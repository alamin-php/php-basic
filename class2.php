<?php 
// 1. different type of loop 
for($i=1; $i<=10; $i++){
    if($i%2==0){
        echo $i." is even number\n";
    }else{
        echo $i." is odd number\n";
    }
}
echo PHP_EOL;
for($i=1; $i<10;$i++){
    for($j=1; $j<$i; $j++){
        echo "*";
    }
    echo PHP_EOL;
}
echo PHP_EOL;

$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;

$i=0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);