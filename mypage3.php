<html>
<head>
<title>HTML-PHP for form3</title>
</head>
<body>
<?php
$id=$_POST["id"];

echo("Flight Id:".$id."<br>");


$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("exam1") or die ("Database selection failed");
$q3="Delete FROM flights WHERE id_flight='$id'; ";
mysql_query($q3) or die ("Deleting error");
echo("Successfully deleted!");
?>
</body>
</html>