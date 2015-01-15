<?php
session_start();
if($_SESSION["lp"]=="0") header('Location: l.php');
include "db.inc";
$un=$_SESSION["username"];
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"/>";
echo "</head>";
echo "<body>";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr/>";
echo "<h2>CHOOSE ELECTIVE PREFERENCES</h2>";
echo "<br/>";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from student where usn='$un'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  print("<div><h4>NAME: $row[1]&nbsp;&nbsp;$row[3]&nbsp;&nbsp;$row[2] </h4></div>");
  print("<div><h4>USN: &nbsp;&nbsp;$row[0] </h4></div>");
  print("<div><h4>BRANCH:&nbsp;&nbsp;$row[4]</h4></div>");
  print("<div><h4>SEMESTER:&nbsp;&nbsp;$row[5]</h4></div>");
  print("<div><h4>SECTION:&nbsp;&nbsp;$row[6]</h4></div>");
}
$num1=0;
$num2=0;
$e1=array();
$e2=array();
$sql="select * from elective_subject where egroup='a'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  $e1[$num1]=$row[1];
  $num1++;
}

$sql="select * from elective_subject where egroup='b'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  $e2[$num2]=$row[1];
  $num2++;
}
echo "<form action=\"student_submit.php\" method=\"GET\">";
echo "<h3>CHOOSE YOUR ELECTIVE PREFERENCES FOR GROUP A</h3>";
echo "<table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr><tr><td>1</td><td><select name=\"sa1\">";
foreach ($e1 as $temp)
{
  print("<option>$temp</option>");
}
echo "</select></td></tr>";

echo "<tr><td>2</td><td><select name=\"sa2\">";
foreach ($e1 as $temp)
{
  print("<option>$temp</option>");
}
echo "</select></td></tr></table>";

echo "<h3>CHOOSE YOUR ELECTIVE PREFERENCES FOR GROUP B</h3>"; 
echo "<table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr><tr><td>1</td><td><select name=\"sb1\">";
foreach ($e2 as $temp)
{
  print("<option>$temp</option>");
}
echo "</select></td></tr>";
echo "<tr><td>2</td><td><select name=\"sb2\">";
foreach ($e2 as $temp)
{
  print("<option>$temp</option>");
}
echo "</select></td></tr></table>";
echo "<br/>";
echo "<br/><div>";
echo "<input type=\"SUBMIT\" value=\"SUBMIT\">";
echo "</input>";
echo "</form>";
echo "<br/><br/>";
echo "<form action=\"student_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"BACK TO MENU\">";
echo "</input>";
echo "</form>";
echo "<br/>";
echo "</div>";
echo "</body>";
echo "</html>";
?>