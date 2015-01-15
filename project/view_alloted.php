<?php
include "db.inc";
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
echo "<h2>ALLOTED ELECTIVES</h2>";
echo "<br/>";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from student where usn='$un'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  print("<div><h4>NAME: $row[1]&nbsp; &nbsp;$row[2]&nbsp; &nbsp;$row[3] </h4></div>");
  print("<div><h4>USN: &nbsp;&nbsp;$row[0] </h4></div>");
  print("<div><h4>BRANCH:&nbsp;&nbsp;$row[4]</h4></div>");
  print("<div><h4>SEMESTER:&nbsp;&nbsp;$row[5]</h4></div>");
  print("<div><h4>SECTION:&nbsp;&nbsp;$row[6]</h4></div>");
  print("<div><h4>GROUP A:&nbsp;&nbsp;$row[7]</h4></div>");
  print("<div><h4>GROUP B:&nbsp;&nbsp;$row[8]</h4></div>");
}
echo "<div>";
echo "<form action=\"student_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"Back to Menu\">";
echo "</input>";
echo "<br>";
echo "</div>";
echo "</form>";
echo "</body>";
echo "</html>";
?>