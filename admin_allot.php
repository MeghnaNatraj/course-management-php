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
echo "<body>\n"; 
echo "<form action=\"admin_selected.php\" method=\"GET\">";
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>";
echo "<hr>";
echo "<h2>ALLOT ELECTIVES</h2>";
echo "<br>";
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from coordinator where cuser_id='$un'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  print("<div><h4>NAME: $row[1] </h4></div>");
  print("<div><h4>BRANCH:&nbsp;&nbsp;$row[2]</h4></div>");
}
echo "<br/><br/>";
echo "<table border=\"border\" align=\"center\">";
echo "<tr>";
echo "<th colspan=\"6\">GROUP A</th>";
echo "<tr>";
echo "<th>SUBJECT</th>";
echo "<th>Faculty </th>";
echo "<th>First preference</th>";
echo "<th>Second preference</th>";
echo "<th>Allot</th>";

echo "</tr>";

$sql="select * from elective_subject where egroup='a'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{

  echo "<tr>";
  print("<th>$row[1]</th>");

   
  $sql2="Select * from teacher where subject='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  print("<td>");
  while($row2 = mysql_fetch_array($result2)) print("$row2[1]<br/>");
  print("</td>");
  
  $sql2="Select count(*) from group_a where 1st_pref='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) print("<td>$row2[0]</td>");
  
  $sql2="Select count(*) from group_a where 2nd_pref='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) print("<td>$row2[0]</td>");

  echo "<td>";
   print("<label><input type=\"checkbox\" name=\"$row[0]\" value=\"$row[0]\"/></label>");
  echo "</td>";
  
  echo "</tr>";
}

  echo "</table>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

echo "<table border=\"border\" align=\"center\">";
echo "<tr>";
echo "<th colspan=\"6\">GROUP B</th>";
echo "<tr>";
echo "<th>SUBJECT</th>";
echo "<th>Faculty </th>";
echo "<th>First preference</th>";
echo "<th>Second preference</th>";
echo "<th>Allot</th>";
echo "</tr>";

$sql="select * from elective_subject where egroup='b'";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  echo "<tr>";
  print("<th>$row[1]</th>");
    $sql2="Select * from teacher where subject='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  print("<td>");
  while($row2 = mysql_fetch_array($result2)) print("$row2[1]<br/>");
  print("</td>");
   
  $sql2="Select count(*) from group_b where 1st_pref='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) print("<td>$row2[0]</td>");

  $sql2="Select count(*) from group_b where 2nd_pref='$row[1]'";
  $result2 = mysql_query($sql2) or die(mysql_error());
  while($row2 = mysql_fetch_array($result2)) print("<td>$row2[0]</td>");

  echo "<td>";
   print("<label><input type=\"checkbox\" name=\"$row[0]\" value=\"$row[0]\"/></label>");
  echo "</td>";
  echo "</tr>";
}
echo "</table>";


echo "</div>";
echo "<div>";
echo "<br/>";
echo "<input type=\"SUBMIT\" value=\"SUBMIT\">";
echo "</input>";
echo "<br/>";
echo "</form>";
echo "<br/>";
echo "<form action=\"admin_menu.php\">";
echo "<input type=\"SUBMIT\" value=\"BACK TO MENU\">";
echo "</input>";
echo "<br/>";
echo "</form>";
echo "</body>";
echo "</html>";
?>