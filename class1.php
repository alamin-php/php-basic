<?php 
    // $n = 2000;

    // $output = ($n>500)?(($n>1000)?('The number is above to 500 or 1000'):('Less then 500 or 1000')):('The number is lessthen 500');
    // echo $output;
    // echo PHP_EOL;
/*
    $fname = 'Al-Amin';
    $lname = 'Sarker';
    // printf('His name is %2$s %1$s',$fname, $lname );
    $output = sprintf('His name is %s %s', $fname, $lname);
    // echo strtoupper ($output);
    echo $output;

// conditional statement
$n = 11;
// $output = ($n % 2 == 0)?("$n in even number"):("$n is odd number");
// echo $output;
// echo ($n % 2)?("$n in even number"):("$n is odd number");

if($n % 2 == 0){
    echo "$n is even number";
}else{
    echo "$n is odd number";
}
*/

$alam  = 100;
$rahim = 180;

// if($alam == $rahim){
//     echo 'Alam and Rahim are same moany of amount';
// }elseif($alam > $rahim){
//     echo 'Alam has more moany then Rahim';
// }elseif($alam < $rahim){
//     echo 'Rahim has more moany then Alam';
// }elseif($alam >= $rahim){
//     echo 'Alam has more or same moany then Rahim';
// }elseif($alam <= $rahim ){
//     echo 'Rahim has more or same moany then Alam';
// }

// $output = ($alam == $rahim)?('Alam and Rahim are same amount of moany'):('Them amout are mot same');
// echo $output;

// $age = 14;
// if($age>=13 && $age<=19){
//     echo 'This person is a tenager';
// }else{
//     echo 'This person is not a tenager';
// }

$year = 2000;
if($year % 4==0 && $year % 100==0 && $year % 400==0){
    echo "{$year} is a leap year";
}elseif($year % 4==0 && $year % 100==0){
    echo "{$year} is not leap year";
}elseif($year % 4==0){
    echo "{$year} is a leap year";
}
else{
    echo "{$year} is not leap year";
}
echo PHP_EOL;

if($year%4==0 && ($year%100!=0 || $year%400==0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not leap year";
}