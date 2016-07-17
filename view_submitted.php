<?php
include "db.inc";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
$un=$_SESSION["username"];
echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\"";
echo "href=\"style.css\"/>";
echo "</head>";
echo "<body>";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr>";
echo "<h2>You have successfully submitted your preferences.</h2>";
$sql="select * from group_a where gausn='$un'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  print("<div><h4>USN: &nbsp;&nbsp;$row[0] </h4></div>");
  print("<h3>SELECTED PREFERENCES FOR GROUP A</h3><br/>");
  print("<div><table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr>");
  print("<tr><td>1</td><td>$row[1]</td></tr>");
  print("<tr><td>2</td><td>$row[2]</td></tr>");
  print("</table></div>");
}
$sql="select * from group_b where gbusn='$un'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
   print("<h3>SELECTED PREFERENCES FOR GROUP B</h3><br/>");
  print("<div><table border=\"2\" align =\"center\"><tr><th>PREFERENCE</th><th>OPTIONS</th></tr>");
  print("<tr><td>1</td><td>$row[1]</td></tr>");
  print("<tr><td>2</td><td>$row[2]</td></tr>");
  print("</table></div>");
}
echo "<div><br/>";
echo "<form action=\"student_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"Back to Menu\">";
echo "</input>";
echo "<br>";
echo "</div>";
echo "</form>";
echo "</body>";
echo "</html>";
?>