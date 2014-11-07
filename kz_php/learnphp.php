<html>
<head></head>
<body>
<?php 
echo "<p>Data processed</p>";
 
 date_default_timezone_set('UTC');
 
 echo date('h:i:s:u a, l F, jS Y e');
 
 $username=$_POST['username'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 
 echo "</br> username=:".$username. " city= ". $city. "  address=  ". $address . "</br>";
 /*
 $str = <<<EOD
 The customers name is $username and they live 
 at $address in $city </br>
 EOD;
 
 echo $str;
 */
 define('PI', 3.14);
 echo  "the value of pid is " . PI;
 
 echo "</br> 5+2=" . (5+2);
 echo "</br> 5/2=" . (integer)(5/2);
 
 /* ref number changes when random number changes */
 $randNum=5;
 $refToNum = &$randNum;
 
 $randNum=100;
 
 echo '</br>$refToNum= ' . $refToNum;
 
 if(5 == 10){
 echo '<br/>5==10';
 }else{
 echo '<br/>!=10';
 }
 // condition:
 $numB=4;
 $numA=36;
 if($numB> 25 && $numA>30){
 echo '<br/>25% discount';
 } else if ($numB> 25 || $numA>30){
 echo '<br/>15% discount';
 }
 else if (!($numB < 5 ) || $numA>30){
 echo '<br/>15% discount';
 }
 else{
 echo '<br/>10% discount';
 }
 
 //condition?  value if : true if false
 $biggestNum=(15>10)? 15:10;
 
 echo "</br>biggestNum is $biggestNum";
 
 switch($username){
 case "Derek":
 echo "</br>Hello ddd";
 break;
 
 case "Derek":
 echo "</br>Hello ddd";
 break;
 
 default:
 echo "</br>Hello valued customer";
 break;
 }
 
 //while loop
 echo "</br>";
 $num=0;
 while($num <20){
 echo $num++. ',';
 }
 echo "</br>";


 for($num=1; $num <20; $num++){
 echo $num;
 
 if ($num!=20)
 echo ',';
 else{
 break;}
 }
 
 $bestfriends=array('dd', 'ddf', 'ggg');
echo "</br>";
 foreach($bestfriends as $friend){
  echo $friend . ',';
  }
  
  echo "</br>";
 $customer = array('name'=>'dff', "street"=>'ffddd');
   echo "</br>";
 foreach($customer as $key=>$value){
      echo $key. " ", $value. "</br>";
 }
   echo "</br>";
   
   
   $randstring="dfff ddff";
   echo strlen($randstring). "<br/>";
   echo strlen( ltrim($randstring)). "<br/>";
    echo strlen( rtrim($randstring)). "<br/>";
	
	echo "the $randstring <br/>";
	printf ("the randstring  %s <br/>", $randstring);
	
	$decimalNum=2.3456;
	printf("decial point number is %.2f </br>", $decimalNum);
	
	//b: integer to binary
	
	echo strtoupper($randstring);
	echo strtolower($randstring);
	echo ucfirst($randstring);
	$arrayForstring=explore(' ', $randstring, 2);
	echo $arrayForstring;
	
	$stringtoArray=implore(' ', $randstring);
	echo $stringtoArray;
	
  ?>
</body>
</html>
