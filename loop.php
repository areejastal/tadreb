<?php
for($x = 0 ; $x<=100 ; $x+=10){
    echo "number  : $x <br>";
  }
  
  $a = [1 , 3 , 5];
  for($i = 0 ;  $i <count($a) ; $i++){
    echo $a[$i];
  }
  
  
  //foreach //array
  $c = array('y' , 'w' , 'a');
  foreach($c as $value){
    echo $value;
  }
  
  $x= 1;
  while($x <= 5){
    echo "number  $x <br>";
    $x++;
  }
  $x=1;
  
  do{
    echo $x . "<br>";
    $x++;
    break;
  }
  while($x<=5);
  
  $age = array('v'=> '35' , 'a' => '33' , 'vv' , '5');
  foreach($age as $x=>$val){
    echo $val;
  }
  
  ?>
  
  