<?php 
/*
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
*/
// 2. Multi stepping for loops 
/*
for($i=10; $i>0; $i--){
    echo $i.":".(11-$i);
    echo PHP_EOL;
}
echo PHP_EOL;
for($i=10, $j=1; $i>0; $i--, $j++){
    echo $i.':'.$j;
    echo PHP_EOL;
}
*/
// 3. More then Multi stepping for loops
for($i=1; $i<=100; $i++){
    // echo ($i%7==0)?$i."\n":'';
    echo ($i%11==0)?$i."\n":'';
    // echo $i.PHP_EOL;
    // echo PHP_EOL;
}
