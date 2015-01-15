<?php
include "db.inc";
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
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
echo "<form action=\"login.php\" method=\"GET\" >";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");

//GROUPA


$sql2="select * from elective_subject where egroup='a';";
$result2 = mysql_query($sql2) or die(mysql_error());
while($row2 = mysql_fetch_array($result2))
{
  print("<h2>ELECTIVE 1</h2>");
  $sql="select * from student where group_a='$row2[1]';";
  $result = mysql_query($sql) or die(mysql_error());
  echo "<table border =\"3\" align=\"center\"><tr> <th>Sl no.</th> <th>USN</th> <th>Name</th></tr>";
  $count=1;
  print("<h3>$row2[1]</h3>");
  while($row = mysql_fetch_array($result)) 
  {
    print("<tr> ");
    print("<td>$count</td>");
    print("<td>$row[0]</td>");
    print("<td>$row[1]&nbsp;$row[3]&nbsp;$row[2]</td>");
    print("</tr>");
    $count++;
   }
   
   $count--;
   echo "</table>";
   print("<h3>Total number : $count </h3><hr size=\"10\" color=\"black\">");
}

//GROUPB
$sql2="select * from elective_subject where egroup='b';";
$result2 = mysql_query($sql2) or die(mysql_error());
while($row2 = mysql_fetch_array($result2))
{
 
  $sql="select * from student where group_b='$row2[1]';";
  $result = mysql_query($sql) or die(mysql_error());
  echo "<table border =\"3\" align=\"center\"><tr> <th>Sl no.</th> <th>USN</th> <th>Name</th></tr>";
  $count=1;
  print("<h2>ELECTIVE 2</h2>");
  print("<h3>$row2[1]</h3>");
  while($row = mysql_fetch_array($result)) 
  {
    print("<tr> ");
    print("<td>$count</td>");
    print("<td>$row[0]</td>");
    print("<td>$row[1]&nbsp;$row[3]&nbsp;$row[2]</td>");
    print("</tr>");
    $count++;
   }
   $count--;
   echo "</table>";
   print("<h3>Total number : $count </h3><hr size=\"10\" color=\"black\">");
}

echo "</form>";
echo "<form action=\"admin_menu.php\">";
echo "<div><input type=\"SUBMIT\" value=\"BACK TO MENU\">";
echo "</input></div>";
echo "<br>";
echo "</div>";
echo "</form>";
echo "</body>";
echo "</html>";
?>