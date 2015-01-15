<?php
session_start();
if($_SESSION["lp"]=="0") header('Location: start.php');
include "db.inc";
echo "<html>";  
echo "<head>"; 
echo "<link rel=\"stylesheet\" type=\"text/css\"";  
echo "href=\"style.css\"/>"; 
echo "</head>";  
echo "<body>"; 
echo "<h1>M.S.RAMAIAH INSTITUTE OF TECHNOLOGY</h1>\n";  
echo "<hr>"; 
echo "<h2>ELECTIVE SUBJECTS FOR 7th SEMESTER</h2>";  
echo "<form action=\"login.php\" method=\"GET\" >"; 
echo "<p>\n"; 
echo "<table border =\"3\" align=\"center\">";  
echo "<tr>\n"; 
echo "  <th colspan=\"4\"> <h3> GROUP A </h3> </th> \n"; 
echo "   </tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> CODE </th>\n"; 
echo "      <th> SUBJECT </th>\n"; 
echo "      <th>CREDITS </th>\n"; 
echo "</tr>\n"; 

$con= mysql_connect($hostname,$username,$password)or print("connection error");
mysql_select_db($database) or print("Cannot db");
$sql="select * from elective_subject where egroup='a'";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
   
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[0]</td>\n"; 
  echo "<td>$row[1]</td>\n";    
  echo "<td>$row[2]</td>\n"; 
  echo "</tr>\n";
  $count++; 
}
echo "</table>\n"; 
echo "</p>\n"; 
echo "<br/>\n"; 
echo "<br/>\n"; 
echo "<p><table border =\"3\" align=\"center\">\n"; 
echo "<tr>\n"; 
echo "  <th colspan=\"4\"><h3>GROUP B<h3></th> \n"; 
echo "   </tr>\n"; 
echo "<tr> <th> SL.NO</th> \n"; 
echo "     <th> CODE </th>\n"; 
echo "      <th> SUBJECT </th>\n"; 
echo "      <th>CREDITS </th>\n"; 
echo "</tr>\n"; 
$sql="select * from elective_subject where egroup='b'";
$result = mysql_query($sql) or die(mysql_error());
$count=1;
while($row = mysql_fetch_array($result)) 
{
   
  echo "<tr>";
  echo "<td>$count</td> \n"; 
  echo "<td>$row[0]</td>\n"; 
  echo "<td>$row[1]</td>\n";    
  echo "<td>$row[2]</td>\n"; 
  echo "</tr>\n";
  $count++; 
}


echo "</table>\n"; 
echo "\n"; 
echo "\n"; 
echo "</form>\n"; 
echo "\n"; 
echo "<br/>\n"; 
echo "<div>\n"; 
echo "<form action=\"student_menu.php\">\n"; 
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