<?php
for ($x = 1; $x <= 10; $x++) {
    if($x<=10){
        echo $x;
    if ($x<10){
        echo"-";
    }    
    } else {
        echo $x."\n";
        
    }
}
echo "<br>";



for ($i=1; $i<=5; $i++)	
{	 
for($j=1;$j<=$i;$j++)	  
{	  	
echo " * ";	 
}	  	
echo "<br/>";   	
}
echo "<br/>";    

for ($i=1; $i <=5 ; $i++) { 
    for ($x=6-$i; $x >=1 ; $x--) { 
        echo "*"."\t";
    }
    echo "<br/>";
} 
