<?php
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