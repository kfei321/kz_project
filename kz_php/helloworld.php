<?php

echo "Hello world <br/>";
$name = "Kelly";
$age=18;
echo "my name is $name and $age old";


/* comments line   */
//double quote will be passed value in side, single not
$word="world"; 
echo "Hello $word <br/>" ; 
echo 'hello $word'; 

echo "<br/><a href='www.yahoo.com'> click here </a>";
echo '<br/>hello, it\'s a nice day';

$students=array("michael", "grace", "Tim");

echo "<br/>student1 is $students[0]";

$ages=array('Chris'=>3, 'Michael'=>4);

/* no quote needed */

echo $ages['Michael'];
print_r($ages);



?>
