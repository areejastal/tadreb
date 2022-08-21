<?php 
function write() {
    echo "Hello world!"."<br>";
  }
  
  write();

  



function factorial($a)
{
  if($a ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $a * factorial($a-1);
    }
	}
echo(factorial(5));
echo "<br>";





?>