<?php
$x = 5;
$y = 10;
Function test(){
    global $x, $y;
   echo $y =  $x+$y;

    
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


//salary
$r = 2000;
$salary = $r * 0.05;
echo $r-$salary."<br>";


//array
$student = array("v" , "vv");
array_push($student , 'areej');


$cars = array("a", "b", "c");
 rsort($cars);
 print_r ($cars);


$cars = array(
  array('j' , 'jj' , 'jjj'),
  array('t', 'tt' , 'ttt')
);
echo $cars[0][0];


$age = array("areej"=>"21", "toqa"=>"20", "J"=>"3");
echo $age["areej"];

//function
$car=array(
    array("a","d","e"),
    array("w","v","f")
);

sort($car);
print_r( $car);

//if..else if .. else
$color = "red";
if($color == "red"){
    echo " color is red";
}
elseif($color == "blue"){
    echo "color is blue";
}
else{
    echo "color is neither red, blue, nor green";
}


//switch
$color = "red";

switch ($color) {
  case "red":
    echo " color is red";
    break;
  case "blue":
    echo "color is blue";
    break;
  case "green":
    echo " color is green";
    break;
  default:
    echo "color is neither red, blue, nor green";
}

?>