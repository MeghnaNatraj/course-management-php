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
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>\n";  
echo "<hr>"; 
echo "<h2>CURRENT SELECTION</h2>";  
echo "<form action=\"admin_menu.php\" method=\"GET\">\n";  
echo "<p>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr> <th rowspan = \"2\" > SL.NO</th> <th rowspan = \"2\"> USN </th><th colspan =\"3\"> GROUP A </th><th colspan =\"3\"> GROUP B </th></tr>\n"; 
echo "<tr><th><h3> Preference1 </h3></th><th> <h3> Preference2 </h3> </th><th><h3> FCFS</h3></th><th> <h3> Preference1 </h3> </th><th> <h3> Preference2 </h3> </th><th><h3> FCFS</h3></th></tr>\n"; 
$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from group_a,group_b where group_a.gausn=group_b.gbusn order by group_a.fcfs ASC;";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) 
{
  echo "<tr>";
  echo "<td>$row[3]</td>"; 
  echo "<td>$row[0]</td>"; 
  echo "<td>$row[1]</td>"; 
  echo "<td>$row[2]</td>"; 
   echo "<td>$row[3]</td>"; 
  echo "<td>$row[5]</td>"; 
   echo "<td>$row[6]</td>"; 
    echo "<td>$row[7]</td>"; 
  echo "</tr>";
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n";  
echo "<br/>\n"; 
echo "<div>\n"; 
echo "<input type=\"SUBMIT\" value=\"BACK TO MENU\">\n"; 
echo "</input>\n"; 
echo "<br/>\n"; 
echo "</div>\n"; 
echo "</form>\n"; 
echo "</body>\n"; 
echo "\n"; 
echo "\n"; 
echo "</html>\n"; 
echo "\n";
?>