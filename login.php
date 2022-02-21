<?php
	$user=$_POST['user'];
	$pass=$_POST['password'];
	if($pass==="db"  ) {header ("location: main.html");}
	else {header ("location: error.html");}
	
	
	$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
	$database=mysql_select_db("exam1") or die ("Database selection failed");
	$q1="Insert INTO login(user,password) VALUES('$user','$pass')";
	mysql_query($q1) or die ("login error");
?>