<?php
$x = 5;
$y = 10;
Function test(){
    global $x, $y;
   echo $y =  $x+$y;

    
}
test();



Function test(){
    $x =5;
$y = 10;
  echo    $x+$y;

}
test();

$x = 1.7;
$y = intval($x);
echo $y;

$x1 = 1;
$y1 = strval($x1);
echo $y1;

$e="eeeeuuuuu";
$ee= floatval($e);
echo $ee;

echo str_word_count("f d");
echo substr('ggggggg' , 4 , 4);

$s= "ja jaaa!";
echo substr($s, 0 , strpos("$s" , '!')+1);

$r = 2000;
$salary = $r * 0.05;
echo $r-$salary;



?>