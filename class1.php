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
/*
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
*/
/*
$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1 && $condition2 && $condition3){
    echo "Hello";
}elseif($condition1 && $condition2){
    echo "No 2";
}elseif($condition1){
    echo "No1";
}else{
    echo "No 3";
}
*/

/*
$age = 13;
if($age>=13 && $age<=19){
    echo "You are Tenager";
}else{
    echo "You are not Tenager";
}
echo PHP_EOL;
echo ($age>=13 && $age<=19)?("You are Tenager"):("You are not Tenager");
*/

// Leapyear program 
// Chllange1: daviation = 4
// Chllange1: daviation = 100
// Chllange1: daviation = 400
/*
$year = 2000;

if($year%4==0 && $year%100==0 && $year%400==0){
    echo "This is leap year";
}elseif($year%4==0 && $year%100==0){
    echo "This is leap year";
}elseif($year%4==0){
    echo "This is leap year";
}
else{
    echo "This is not leap year";
}
*/
/*
$marks = 110;
if($marks<33){
    echo 'Fail!';
}elseif($marks>=34 && $marks<39){
    echo "D Grade";
}elseif($marks>=40 && $marks<49){
    echo "C Grade";
}elseif($marks>=50 && $marks<=59){
    echo "B Grade";
}elseif($marks>=60 && $marks<=69){
    echo "A- Grade";
}elseif($marks>=70 && $marks<=79){
    echo "A Grade";
}elseif($marks>=80 && $marks<=100){
    echo "A+ Grade";
}elseif($marks>100){
    echo "Invalid Resutlt";
}else{
    "No Result found!";
}
*/
// enter tuition fee of amount 
$tuitionFee = 20000;
$commission = ($tuitionFee>=20000)?($tuitionFee * 0.25):(($tuitionFee>=10000)?($tuitionFee * 0.20):(($tuitionFee>=7000)?($tuitionFee * 0.15):("Invalid data")));

echo "The tuition fee commission is {$commission}";