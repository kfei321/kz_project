<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if ($username&&$password){

$connect = mysql_connect("localhost", "kzhang", "") or die ("can't access");
mysql_select_db('test') or die ("couldn't find db");
$query =mysql_query("select * from users where username='$username'");
$numrows=mysql_num_rows($query);

if($numrows!=0){
  while($row =  mysql_fetch_assoc($query)){
   $dbusername=$row['username'];
    $dbpassword=$row['password'];
  }
  
  //check to see if match!
  if ($username==$dbusername && $password==$dbpassword){
  echo "you're in click here to membership page <a href='member.php'>click here<a>";
  $_SESSION['username']=$dbusername;
  }
  else {
  echo " not find";}
}
else 
die("that user doesn't exist! Please try again <a href='index.php'>Click here!</a>");

//echo "$numrows";
}
else die("please enter username and password");





?>