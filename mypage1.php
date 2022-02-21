<html>
<head>
<title>HTML-PHP for form1</title>
</head>
<body>
<?php
$name=$_POST["name"];
$seats=$_POST["seats"];
$contact=$_POST["contact"];
$airport=$_POST["airport"];
$destination=$_POST["destination"];

echo("Name:".$name."<br>");
echo("Seats:".$seats."<br>");
echo("Contact:".$contact."<br>");
echo("Airport:".$airport."<br>");
echo("Destination:".$destination."<br>");

$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("exam1") or die ("Database selection failed");
$q1="Insert INTO flights(name,seats,contact,airport,destination) VALUES('$name','$seats','$contact','$airport','$destination');";
mysql_query($q1) or die ("Booking error");
echo("Successfully booked!");
?>
</body>
</html>