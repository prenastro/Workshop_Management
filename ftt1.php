<html>
<body>
<?php
$dbh=mysql_connect("localhost","root"," ") or die(mysql_error());
mysql_selesct_db("login") or die(mysql_error());
$nme=$_post['name'];
if($nme=='chandrika')
{
$var=mysql_query("select * from timetable");
}
else if($nme=='mallegowda')
{
$var=mysql_query("select * from timetable1");
}
else if($nme=='mamtha')
{
$var=mysql_query("select * from timetable2");
}
else if($nme=='veena')
{
$var=mysql_query("select * from timetable3");
}
else echo "faculty not in database";
echo "<table>";
while($arr=mysql_fetch_row($var))
{
echo "<tr><td>$arr[0]</td><td>$arr[1]</td></tr>";
}
echo "</table>";
mysql_free_result($var);
mysql_close($dbh);
?>
<form action="login21.html">
<input type="submit" value="back">
</form>
</body>
</html>