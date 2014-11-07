<?php

session_start();

if($_SESSION['username'])
echo "Welcome, " .$_SESSION['username']. "<br/><a href='logout.php'>logout</a>";
else
die('you must be logged in !');
?>