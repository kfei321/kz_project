<?php 
//http://www.youtube.com/watch?v=ngqeWUIDlnk
//http://localhost/phpmyadmin
//http://www.youtube.com/watch?v=IUCEEh-ASH8
//http://www.youtube.com/watch?v=ZNqAOzgS370

//http://www.youtube.com/watch?v=tVZqxoesuko


	$submit= $_POST['submit'];
	
	$fullname=strip_tags($_POST['fullname']);
	
	$username=strip_tags($_POST['username']);
	
	$password=strip_tags($_POST['password']);
	
	$password_again=strip_tags($_POST['password_again']);
     $date=date("Y-m-d");
	
	if($submit){
		//echo "$fullname/$username/$password/$password_again";
		//check for existance
		
		if($username&&$password&&$fullname&&$password_again)
		{
			if($password==$password_again)
			{
			  if(strlen($username)>25 || strlen($fullname)>25){
					echo "username or fullname is over the max length.";
			   }
			   else if(strlen($password)>5 || strlen($password_again)>5){
				     
			    		echo "password or repeat password is over the max length.";
			    }
				else
				{
					$password=md5($password);
					//$password_again=md5($password_again);
				 //open database', 
				 $connect=mysql_connect("localhost", "kzhang", "") or die ("can't access");;
				 mysql_select_db('test')  or die ("couldn't find db");; 
				 
				 $queryreg=mysql_query("
				 INSERT INTO users VALUES ('','$fullname', '$username', '$password', '$date')
				 ") or die("error occur ");
		          
				}
			 }
			 
			 else 
			    echo "password not match";
				
				
				
				
				$password=md5($password);
			$password_again=md5($password_again);
			
			
			
			
			
			
		}
		else
		  echo "please fill all fields.";
	
}


 /*echo "form is submitted";
 $required_fileds = array('fullname','username', 'password', 'password_again');
  foreach($_POST as $key =>$value){
    if(empty($value) && in_array($key, $required_fields)===true) {
     
	  $errors[]="field is required";
      break 1;	  
	}
  }
  
}
print_r($errors);*/

?>

<html>
<h1>Register</h1>
<form action ="register.php" method="POST">

<ul>
<li>
Fullname*: <br>
<input type="text" name="fullname" value="<?php echo $fullname ?>">
</li>


<li>
Username*: <br>
<input type="text" name="username" value="<?php echo $username?>">
</li>

<li>
Password*: <br>
<input type="text" name="password">
</li>


<li>
Password again*: <br>
<input type="text" name="password_again">
</li>



<input type="submit" name ="submit" value="Register">
</li>
</ul>

</form>

</html>
