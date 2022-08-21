<?php
$x = 5;
$y = 10;
Function test(){
    global $x, $y;
   echo $y =  $x+$y;
   
echo "<br>";


    
}
test();




$x = 1.7;
$y = intval($x);
echo $y;
echo "<br>";

$x1 = 1;
$y1 = strval($x1);
echo $y1;
echo "<br>";



$e="eeeeuuuuu";
$ee= floatval($e);
echo $ee;
echo "<br>";

echo str_word_count("f d");
echo "<br>";
 echo substr('ggggggg' , 4 , 3);
 echo "<br>";

$s= "ja jaaa!";
echo substr($s, 0 , strpos("$s" , '!')+1);





//array



$cars = array("a", "b", "c");
 rsort($cars);
 print_r ($cars);


$cars = array(
  array('j' , 'jj' , 'jjj'),
  array('t', 'tt' , 'ttt')
);
echo $cars[0][0];


$age = array("aa"=>"21", "a"=>"20", "J"=>"3");
echo $age["aa"];

//function
$car=array(
    array("a","d","e"),
    array("w","v","f")
);

sort($car);
print_r( $car);