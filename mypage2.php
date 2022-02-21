<html>
<head>
<title>HTML-PHP for form2</title>
</head>
<body>
<?php
$name=$_POST["name1"];
$seats=$_POST["seats1"];



echo("Name:".$name."<br>");
echo("Seats:".$seats."<br>");



$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("exam1") or die ("Database selection failed");
$q2="Update flights SET  seats='$seats' WHERE name='$name'";
mysql_query($q2) or die ("Updating error");
echo("Successfully updated!");



?>
</body>
</html>